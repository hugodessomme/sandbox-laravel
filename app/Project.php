<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description'
    ];

    /*
     * We can do contrary of the above property with $guarded property,
     * for properties we don't want to allow mass assignment.
     *
     * It's recommended to use $guarded property if we are sure to NEVER
     * use Project::create(request()->all()) in controllers
     */
}
