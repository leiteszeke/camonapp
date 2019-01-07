<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password', 'remember_token'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $hidden = ['password', 'remember_token', 'created_at', 'updated_at', 'deleted_at'];
}