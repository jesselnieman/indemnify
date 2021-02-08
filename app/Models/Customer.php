<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'mobile_phone',
        'home_phone',
        'address_line_one',
        'address_line_two',
        'city',
        'state',
        'zip',
        'status',
        'line',
        'inactive_date',
        'inactive_reason',
        'producer',
        'csr',
        'marital_status',
        'anniversary_date',
        'ssn',
        'date_of_birth',
        'gender',
        'employer',
        'occupation',
        'hire_date',
        'license_number',
        'license_state',
        'license_issue_date',
        'license_expiration_date',
    ];

    //use SoftDeletes;
}
