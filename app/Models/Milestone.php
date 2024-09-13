<?php


// app/Models/Milestone.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    protected $fillable = ['gig_id', 'title', 'description', 'price'];
}
