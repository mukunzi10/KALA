<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loyal extends Model
{
    use HasFactory;
    protected $fillable=['fname','lname','gender','date','idno',
    'phone','email','qualification','status'
    ];

}
