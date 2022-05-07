<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('animal_kind_id')->constrained()->cascadeOnDelete();
            $table->string('name_en', 200);
            $table->string('name_ar', 200);
            $table->string('brief_en', 200)->nullable();
            $table->string('brief_ar', 200)->nullable();
            $table->string('description_en', 200);
            $table->string('description_ar', 200);
            $table->decimal('starting_price');
            $table->decimal('maximum_price');
            $table->string('image');
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
        Schema::dropIfExists('products');
    }
};
