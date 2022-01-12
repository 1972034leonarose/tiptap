<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function booking(){
        return $this->belongsTo('App\Booking', 'idBooking', 'id');
    }

    public function roles()
    {
        return $this->belongsToMany('App\PaymentDet');
    }
}


