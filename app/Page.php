<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded [];

    public funtion courses()
    {
      return $this->hasMany(Course::class);
    }
}
