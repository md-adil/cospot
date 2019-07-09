<?php

namespace App\Radius;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class User extends Model
{
    protected $guarded = ['id'];
    protected $table = 'radcheck';
    public $timestamps =false;

    public static function boot()
    {
        parent::boot();
        static::addGlobalScope('latest', function(Builder $builder) {
            // $builder->latest();
        });
    }

    public function scopeLatest($q)
    {
        return $q->orderBy('id', 'DESC');
    }
}
