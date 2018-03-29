<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forgotpassword extends Model
{
    public $timestamps = false;
	protected $table = "password_resets";
    protected $fillable = ['email','token',];
}