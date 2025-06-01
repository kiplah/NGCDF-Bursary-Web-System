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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('gender');
            $table->string('phone')->nullable();
            $table->string('institution_name');
            $table->string('institution_code')->nullable();
            $table->string('mode_of_study')->nullable();
            $table->string('family_status')->nullable();
            $table->text('why_bursary')->nullable();
            $table->boolean('disability')->default(false);
            $table->text('disability_description')->nullable();
            $table->integer('amount_requested')->nullable();
            $table->string('id_copy_path')->nullable();
            $table->string('transcript_path')->nullable();
            $table->string('admission_letter_path')->nullable();
            $table->timestamps();
            $table->softDeletes();
            //$table->foreignId('user_id')->nullable()->constrained(); // Assuming you want to link to a user
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
