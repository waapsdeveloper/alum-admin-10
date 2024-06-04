<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectionOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'election_id',
        'name',
        'title',
        'option'
    ];
}
