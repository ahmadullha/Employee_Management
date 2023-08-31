<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAccount extends Model
{
    use HasFactory;
    protected $fillable = [
        'staff_id',
        'username',
        'password',
        'account_type',
    ];

    public function employeeData()
    {
        return $this->belongsTo(EmployeeData::class, 'staff_id', 'staff_id');
    }
}
