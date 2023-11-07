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

        // $priorites=[ on peut aussi le faire comme ca
        //     "haute",
        //     "moyenne",
        //     "faible"
        // ];

        Schema::create('taches', function (Blueprint $table) {
            $table->id();
            $table->string('nom_tache',55);
            $table->string('description_tache')->nullable();
            $table->boolean('it_termine')->nullable();
            $table->enum('priorite', ["haute","moyenne","faible"]);
            $table->date('date_echeance')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taches');
    }
};
