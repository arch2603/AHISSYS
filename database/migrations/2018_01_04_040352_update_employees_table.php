<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('employees', function ($table){
            $table->integer('emp_no')->after('id');
           $table->string('emp_fname')->after('emp_no');
           $table->string('emp_lname')->after('emp_fname');
           $table->string('emp_email')->after('emp_lname');
            $table->string('emp_oname')->after('emp_email');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('employees', function ($table)
        {
           $table->dropColumn(['emp_no','emp_fname', 'emp_lname', 'emp_email', 'emp_oname']);
        });
    }
}
