<?php

namespace Grooveland\Users\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The mass asigments to the user
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'guard'
    ];
}
