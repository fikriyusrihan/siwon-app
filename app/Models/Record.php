<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    /**
     * Get the record that owns the program
     */
    public function program() {
        return $this->belongsTo(Program::class);
    }

    /**
     * Get the record that owns the user
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
