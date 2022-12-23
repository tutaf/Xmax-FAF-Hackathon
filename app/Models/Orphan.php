<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orphan extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'orphanage_id',
        'firstName',
        'lastName',
        'birthsday',
        'image',
        'text',
    ];

    public function orphanBuilding()
    {
        return $this->belongsTo(OrphanBuilding::class);
    }
}