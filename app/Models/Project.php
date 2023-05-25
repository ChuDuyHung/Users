<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\Http\Controllers\ProjectController;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';

}