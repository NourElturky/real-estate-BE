<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class location extends Model
{
    use SoftDeletes, HasFactory;
    protected $table = 'locations';
    protected $fillable = [
        'city',
        'new_attribute',
        'neighborhood',
        'lat',
        'lon',
        'user_id'
        // Removed unit_id as it doesn't exist in the database table
    ];
    protected $casts = [
        'created_at' => 'datetime', // Casts to a Carbon datetime instance
        'updated_at' => 'datetime', // Casts to a Carbon datetime instance
        'deleted_at' => 'datetime', // Casts to a Carbon datetime instance (for soft deletes)
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function units()
    {
        return $this->hasMany(Unit::class);
    }
}
