<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uid');
            $table->string('full_name_arabic');
            $table->string('full_name_english');
            $table->string('gender');
            $table->date('birth_date');
            $table->string('birth_country');
            $table->string('birth_city');
            $table->string('mobile_number');
            $table->string('email');
            $table->string('national_id_number');
            $table->string('national_id_copy');
            $table->string('residential_region_city');
            $table->string('residential_address');
            $table->string('guardian_name_arabic');
            $table->string('guardian_national_id');
            $table->string('guardian_mobile_number');
            $table->string('guardian_email');
            $table->string('certificate_issue_country');
            $table->string('certificate_issue_city_region');
            $table->string('school_name');
            $table->string('seating_number');
            $table->string('school_graduation_year');
            $table->string('certificate_type');
            $table->string('total_score');
            $table->string('percentage');
            $table->timestamps();


            $table->foreign('uid')->references('id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_data');
    }
};
