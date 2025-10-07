<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    /** @use HasFactory<\Database\Factories\SiteFactory> */
    use HasFactory;

    protected $fillable = [ # specify the fillable fields for mass assignment
        'name',
        'capacity',
        'latitude',
        'longitude',
        'site_id',
        'user_id', # foreign key to link to the user who owns the site
    ];
    
    public function user() # relation to the user who owns the site
    {
        return $this->belongsTo(User::class); # each site belongs to a user
    }

    public function inspections() # relation to the inspections done on the site

    {
        return $this->hasMany(Inspection::class); # each site can have many inspections
    }
}