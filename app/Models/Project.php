<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'titolo',
        'descrizione',
        'immagine'
    ];

    // collego il model del projects a quello del tipe
    // in modo da poter richiamare il $type con la sintasi blade ($progetto->type->valore)
    public function type(): BelongsTo
    {
        return $this->belongsTo(type::class);
    }
    // collego $questo model a $tecnologies 
    public function tecnologies()
    {
        return $this->belongsToMany(tecnology::class,'project_technology');
    }
}
