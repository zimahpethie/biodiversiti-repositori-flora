<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Plant extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'image', 'name', 'scientific_name', 'kingdom', 'divisio', 'class', 'order_', 'family_', 'genus', 'detail', 'species'
    ];
    
    /**
     * Get the index name for the model.
    */
    public function searchableAs()
    {
        return 'plants';
    }    
}
