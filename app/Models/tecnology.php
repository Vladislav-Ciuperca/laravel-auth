<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class tecnology extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "icon",
    ];

    // collego con relazione many to many a projects
    public function projects()
    {
        return $this->belongsToMany(Project::class,'project_technology');
    }
}
