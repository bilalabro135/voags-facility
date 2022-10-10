<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];
    
     protected $fillable = [ 'name','rate','quantity','cost','service_area_id','description','image'];
     
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function service_area()
    {
        return $this->belongsTo(ServiceArea::class);
    }
    public function sub_services()
    {
        return $this->hasMany(SubService::class);
    }
}
