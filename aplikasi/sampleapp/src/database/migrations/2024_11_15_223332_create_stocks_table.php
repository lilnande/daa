<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('stocks', function (Blueprint $table) {
        $table->id(); // Primary Key
        $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Foreign Key
        $table->integer('stock_quantity')->default(0);
        $table->timestamp('last_updated')->useCurrent();
        $table->timestamps(); // created_at & updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};