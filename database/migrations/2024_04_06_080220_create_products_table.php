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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->mediumText("description_du_produit");
            $table->string("nom");
            $table->string("categorie_du_produit");
            $table->integer("prix");
            $table->integer('quantite_en_stock');
            $table->enum("status", ["actif", "en_rupture_de_stock"]);
            $table->date("date_de_livraison");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
