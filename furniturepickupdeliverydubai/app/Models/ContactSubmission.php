<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
 protected $fillable = [
        'name',
        'email',
        'message',
        'post_id',
        'form_id',
        'referer_title',
        'queried_id'
    ];
}
