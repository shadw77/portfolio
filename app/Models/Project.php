<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['skill_id', 'name', 'image', 'project_url'];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
