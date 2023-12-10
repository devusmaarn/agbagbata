<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'title', 'description', 'status', 'user_id', 'thumbnail'
    ];

    public $incrementing = false;

    public function completed(){
        return $this->status === 1;
    }

    public function ongoing(){
        return $this->status === 0;
    }

    public function stopped() {
        return $this->status === -1;
    }

    public function donations() {
        return $this->hasMany(Donation::class);
    }
}
