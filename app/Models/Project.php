<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'titolo',
        'descrizione',
        'immagine',
        'name',
        'description',
        'icon',
    ];

    // collego il model del projects a quello del tipe
    // in modo da poter richiamare il $type con la sintasi blade ($progetto->type->valore)
    public function type():BelongsTo{
        return $this ->belongsTo(type::class);
    }

    public function Technology(){
        return $this -> belongsToMany(Technology::class);
    }
}
