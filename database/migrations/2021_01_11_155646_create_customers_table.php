<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Null_;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('email')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('address_line_one');
            $table->string('address_line_two')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('status')->default('active');
            $table->string('producer');
            $table->string('csr');
            $table->string('line')->nullable();
            $table->date('inactive_date')->nullable();
            $table->string('inactive_reason')->nullable();
            //$table->softDeletes() need deletedAt()?;
            $table->string('marital_status')->nullable();
            $table->date('anniversary_date')->nullable();
            $table->string('ssn')->nullable();
            $table->date('date_of_birth');
            $table->string('gender')->nullable();
            $table->string('employer')->nullable();
            $table->string('occupation')->nullable();
            $table->date('hire_date')->nullable();
            $table->string('license_number')->nullable();
            $table->string('license_state')->nullable();
            $table->string('license_issue_date')->nullable();
            $table->string('license_expiration_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
