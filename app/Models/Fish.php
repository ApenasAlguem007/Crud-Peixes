<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fish extends Model
{
  protected $table = 'fish'; 
    protected $fillable = ['name', 'color', 'type_id'];

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
}