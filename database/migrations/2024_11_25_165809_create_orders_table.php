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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignIdFor(\App\Models\User::class);
            $table->foreignIdFor(\App\Models\Cart::class);

            $table->enum('status', [
                'pending', 'paid', 'shipped'
            ]);

            $table->decimal('total', 10, 2);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
