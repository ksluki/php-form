<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['name', 'email', 'message'];

    public static function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
        ];
    }
}
