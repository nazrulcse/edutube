<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Klass extends Model
{
	protected $table = 'classes';
    protected $fillable = [
        'name', 'description'
    ];

    public function courses() {
        return $this->hasMany('App\Models\Course', 'class_id');
    }
}
