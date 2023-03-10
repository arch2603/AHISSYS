<?php
/**
 * Created by PhpStorm.
 * User: Archie
 * Date: 17/12/2017
 * Time: 4:05 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeDetails extends Employees
{
    protected $emp_type_arr = ['Permanent', 'Part Time', 'Casual', 'Internship'];
    protected $martial_status_arr =['Single', 'Married', 'Defacto'];
    protected $gender_arr = ['Male', 'Female'];
}