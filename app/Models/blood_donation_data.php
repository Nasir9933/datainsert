<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blood_donation_data extends Model
{
    use HasFactory;
    protected $fillable = ['blood_group', 'name', 'phone_number', 'email', 'address'];
}
