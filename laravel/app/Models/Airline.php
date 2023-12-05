<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Airline extends Model
{
    use HasFactory;
    protected  $primaryKey='airline_id';
    protected $fillable=[
        'name',
        'country'
    ];
    public function airline()
    {return $this->hasMany(Airline::class,'airline_id','airline_id');}
    
}
