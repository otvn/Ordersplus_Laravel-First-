<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kpi extends Model
{
    use HasFactory;

    // Make sure the `name` and `value` columns are fillable
    protected $fillable = ['name', 'value'];
}
