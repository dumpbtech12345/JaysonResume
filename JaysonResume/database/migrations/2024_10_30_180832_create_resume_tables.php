<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create the jaysonresumes table
        Schema::create('jaysonresumes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('image')->nullable();
            $table->text('objective')->nullable();
            $table->timestamps();
        });

        // Create the experiences table
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resume_id')->constrained('jaysonresumes')->onDelete('cascade'); // Explicit table name
            $table->string('title');
            $table->string('company');
            $table->string('location')->nullable();
            $table->string('start_date');
            $table->string('end_date')->nullable();
            $table->text('description');
            $table->timestamps();
        });

        // Create the education table
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resume_id')->constrained('jaysonresumes')->onDelete('cascade'); // Explicit table name
            $table->string('degree');
            $table->string('institution');
            $table->string('start_date');
            $table->string('end_date')->nullable();
            $table->timestamps();
        });

        // Create the skills table
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resume_id')->constrained('jaysonresumes')->onDelete('cascade'); // Explicit table name
            $table->string('skill_name');
            $table->timestamps();
        });

        // Create the certifications table
        Schema::create('certifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resume_id')->constrained('jaysonresumes')->onDelete('cascade'); // Explicit table name
            $table->string('title');
            $table->string('organization');
            $table->string('date_obtained')->nullable();
            $table->timestamps();
        });

        // Create the languages table
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resume_id')->constrained('jaysonresumes')->onDelete('cascade'); // Explicit table name
            $table->string('language');
            $table->string('proficiency');
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
        Schema::dropIfExists('languages');
        Schema::dropIfExists('certifications');
        Schema::dropIfExists('skills');
        Schema::dropIfExists('education');
        Schema::dropIfExists('experiences');
        Schema::dropIfExists('jaysonresumes');
    }
}
