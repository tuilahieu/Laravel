<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = [
        'name',
        'email',
        'position'
    ];
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

}
