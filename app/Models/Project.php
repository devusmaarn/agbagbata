<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'title', 'description', 'completed', 'user_id'
    ];

    public $incrementing = false;

    public function donations() {
        return $this->hasMany(Donation::class);
    }
}
