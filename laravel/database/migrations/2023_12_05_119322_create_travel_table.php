<?php

use App\Models\Airline;
use App\Models\Flight;
use App\Models\Travel;
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
        Schema::create('travel', function (Blueprint $table) {
            $table->primary(['flight_id','user_id']);
            $table->foreignId('flight_id')->references('flight_id')->on('flights');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string("evaluation");
            $table->timestamps();
        });
        /*
        Travel::create([
            'flight_id'=>1,
            'user_id'=>1,
            'evaulation'=>'accaptable'
        ]);
        Travel::create([
            'flight_id'=>2,
            'user_id'=>2,
            'evaulation'=>'accaptable'
        ]);
        Travel::create([
            'flight_id'=>3,
            'user_id'=>3,
            'evaulation'=>'accaptable'
        ]);*/
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel');
    }
};
