<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    //employee types
    protected $emp_type_arr = [];
    protected $martial_status_arr = [];
    protected $gender_arr =[];

    public function employee_types()
    {
        return $this->emp_type_arr;
    }

    public function employee_martial_status()
    {
        return $this->martial_status_arr;
    }

    public function employee_gender()
    {
        return $this->gender_arr;
    }


    public function get($employee_id)
    {
        return $this->employee_type_arr[$employee_id];
    }
}
