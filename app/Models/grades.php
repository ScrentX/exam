<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
       'midterm_grade',
       'final_grade'
    ];

    public function grades()
    {
        return $this->hasMany(grades::class);
    }
}