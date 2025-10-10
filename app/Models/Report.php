<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    /** @use HasFactory<\Database\Factories\ReportFactory> */
    use HasFactory;

    protected $fillable = [
        'inspection_id', 'title', 'summary', 'severity', 'fault_type', 'photo_url'
    ];

    public function inspection() # relation to the inspection that generated the report
    
    {
        return $this->belongsTo(Inspection::class); # each report belongs to an inspection
    }
}
