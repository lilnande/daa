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
    Schema::create('transactions', function (Blueprint $table) {
        $table->id(); // Primary Key
        $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Foreign Key
        $table->integer('quantity');
        $table->decimal('total_price', 10, 2);
        $table->timestamp('transaction_date')->useCurrent();
        $table->timestamps(); // created_at & updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
