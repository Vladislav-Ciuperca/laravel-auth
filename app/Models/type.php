<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class type extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "icon",
    ];

    public function Projects():HasMany{
        return $this->hasMany(Project::class);
    }
}
 