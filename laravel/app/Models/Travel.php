<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;
    protected  $primaryKey=['flight_id','user_id'];
    protected  $fillable=[
        'evaluation'
    ];
    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('user_id', '=', $this->getAttribute('id'))
            ->where('flight_id', '=', $this->getAttribute('Flight_id'));
        return $query;
    }

}
