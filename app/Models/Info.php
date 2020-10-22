<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Info extends Model {

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'name', 'info', 'nameru', 'inforu', 'image', 'click'
    ];




}
