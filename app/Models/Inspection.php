<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    /** @use HasFactory<\Database\Factories\InspectionFactory> */
    use HasFactory;

    protected $fillable = [
        'site_id',
        'user_id',
        'inspection_date',
        'notes',
        'status',
    ];

    public function site() # relation to the site being inspected
    
    {
        return $this->belongsTo(Site::class); # each inspection belongs to a site
    }

    public function report() # relation to the report generated from the inspection
    
    {
        return $this->hasOne(Report::class); # each inspection has one report
    }
}
