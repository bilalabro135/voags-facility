<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $guarded = [];
    
     protected $fillable = [
        'title',
        'service_id',
        'nte',
        'hourly_rate',
        'rate_details',
        'type',
        'link',
        'quantity',
        'unit_cost',
        'address',
        'job_requirement',
        'scrop_work',
    ];
    
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function descrip()
    {
        return $this->belongsTo(JobDescription::class);
    }

    public function imgs()
    {
        return $this->belongsTo(JobImage::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
