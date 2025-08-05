<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
      protected $fillable = [
        'name',
        'email',
        'phone',
        'pickup_date',
        'pickup_location',
        'dropoff_date',
        'dropoff_location',
    ];
}
