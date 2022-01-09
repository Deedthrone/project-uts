<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

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
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('short_desc')->nullable();
            $table->text('desc');
            $table->decimal('normal_price');
            $table->decimal('disc_price')->nullable();
            $table->string('sku');
            $table->enum('stock_status', ['instock', 'outstock']);
            $table->boolean('featured')->default(false);
            $table->unsignedInteger('qty')->default(10);
            $table->string('img')->nullable();
            $table->text('imgs')->nullable();
            $table->unsignedBigInteger('kategori_id')->nullable();
            $table->timestamps();
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade');
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
