<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['content'];

    protected static $rules = array(
        'content' => 'required',
    );
}
