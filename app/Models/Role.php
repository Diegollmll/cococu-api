<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
        'created_at',
        'updated_at'
    ];

    // Relación con usuarios (un rol puede tener varios usuarios)
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
