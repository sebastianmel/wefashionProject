<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->text("description");
            $table->string("price");
            $table->string("picture")->nullable();
            $table->foreignId("category_id")->constrained("categories");
            $table->foreignId("state_id")->constrained("states");
            $table->foreignId("state2_id")->constrained("states2");
            $table->string("alphanum");
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("products", function(Blueprint $table){
            $table->dropForeign("category_id");
            $table->dropForeign("state_id");
            $table->dropForeign("state2_id");
            
        });
        Schema::dropIfExists('products');
    }
};