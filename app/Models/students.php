<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
       'id_number',
       'first_name',
       'last_name',
       'middle_name'
    ];

    public function students()
    {
        return $this->hasMany(students::class);
    }
}