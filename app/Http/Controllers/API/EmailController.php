<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmailController extends Controller
{
    public function verificationCode(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email'
        ]);

        $code = rand(1000, 9999);

        $user = DB::table('users')->where('email', $data['email'])->first();

        if (!$user) {
            return response()->json(['error' => 'Email not found'], 404);
        }

        $userCode = DB::table('user_codes')->where('user_id', $user->id)->first();

        if ($userCode) {
            // Update the existing code
            DB::table('user_codes')->where('user_id', $user->id)->update([
                'code' => $code,
                'updated_at' => now()
            ]);
        } else {
            // Insert a new code
            DB::table('user_codes')->insert([
                'user_id' => $user->id,
                'code' => $code,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        // Send email using Mailable
        Mail::to($data['email'])->send(new TestMail(['user_id' => $user->id, 'code' => $code]));

        return response()->json(['message' => 'Test email sent!', 'code' => $code], 200);
    }


    public function codeVerification(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'code' => 'required|string',
        ]);

        $userCode = DB::table('user_codes')
            ->where('user_id', $request->user_id)
            ->where('code', $request->code)
            ->first();

        if ($userCode) {
            $user = DB::table('users')->find($request->user_id);
            if ($user) {
                // Update user's verification status
                DB::table('users')
                    ->where('id', $request->user_id)
                    ->update(['is_verified' => 1]);

                // Optionally, you may delete the user code entry from user_codes table
                DB::table('user_codes')->where('id', $userCode->id)->delete();

                return response()->json(['message' => 'User verified successfully'], 200);
            } else {
                return response()->json(['error' => 'User not found'], 404);
            }
        } else {
            return response()->json(['error' => 'Invalid code'], 400);
        }
    }
}
