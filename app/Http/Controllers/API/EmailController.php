<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function test(Request $request)
    {
        $data = $request->validate([
            'code' => 'required|string'
        ]);


        if ($data['code'] !== '1234') {
            return response()->json(['error' => 'Invalid code'], 400);
        }


        Mail::to('noor@mailinator.com')->send(new TestMail($data));

        return response()->json(['message' => 'Test email sent!'], 200);
    }
}
