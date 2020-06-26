<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->string('state')->default('non livrée');
            $table->string('delivery_option')->default('standard');
            $table->text('address');
            $table->float('price');
            $table->foreignId('commande_id')->constrained();
            $table->foreignId('user_id')->nullable(); // l'ID du transporteur
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
        Schema::dropIfExists('deliveries');
    }
}
