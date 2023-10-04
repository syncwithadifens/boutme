<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guard = ['id'];

    public function categories()
    {
        return $this->belongsTo(ProjectCategory::class, 'id');
    }
}
