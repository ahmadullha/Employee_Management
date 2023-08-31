<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeData extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_id',
        'firstname',
        'lastname',
        'dob',
        'email',
        'phone_number',
        'position',
    ];

    public function account()
    {
        return $this->hasOne(EmployeeAccount::class, 'staff_id', 'staff_id');
    }
}
