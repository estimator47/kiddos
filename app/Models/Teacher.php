<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model {

    public $timestamps = false;
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'name', 'occupation', 'info', 'nameru', 'occupationru', 'inforu', 'image'
    ];




}
