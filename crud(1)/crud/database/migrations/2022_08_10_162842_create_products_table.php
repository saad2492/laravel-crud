<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Backend;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */  
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments("id");
            $table->string("pname");
            $table->string("pdes");
            $table->string("cat");
            $table->string("scat");
            $table->integer("price");
            $table->integer("status");
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
}
