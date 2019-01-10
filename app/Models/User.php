<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class User extends Model implements AuthenticatableContract, AuthorizableContract {
    use SoftDeletes, Authenticatable, Authorizable;

    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password', 'remember_token'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $hidden = ['password', 'remember_token', 'created_at', 'updated_at', 'deleted_at'];
}