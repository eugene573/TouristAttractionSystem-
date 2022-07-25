<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Session;
use DB;

class Place extends Model
{
    use HasFactory;
    protected $fillable=['name','introduction','nearByArea','reviews','openHour','price','image1','image2','image3','image4','image5','CategoryID','address','bookingMethod','contactNumber','map'];
    public function Category(){
        return $this->belongsTo('App\Models\Category');
    }
}