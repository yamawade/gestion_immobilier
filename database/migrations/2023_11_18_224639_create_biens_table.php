<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->enum('categorie',['luxe','moyen','simple']);
            $table->string('image');
            $table->text('description');
            $table->string('adresse');
            $table->float('dimension_bien');
            $table->integer('nombre_chambre');
            $table->integer('nombre_toilette');
            $table->integer('nombre_balcon');
            $table->enum('espace_vert',['disponible','indisponible']);
            $table->enum('statut',['disponible','indisponible'])->default('disponible');
            $table->foreignIdFor(User::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biens');
    }
};
