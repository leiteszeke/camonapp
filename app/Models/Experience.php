<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experience extends Model {
    use SoftDeletes;

    protected $table = 'experiences';
    protected $fillable = ['title', 'description', 'skybox', 'floor', 'objects'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts = [
        'skybox' => 'array',
        'floor' => 'array',
        'objects' => 'array',
    ];
}