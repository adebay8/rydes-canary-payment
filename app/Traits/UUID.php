<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait UUID 
{
     /**
     * Boot function from Laravel.
     * 
     * @returns void
     */
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        }); 
    }
}