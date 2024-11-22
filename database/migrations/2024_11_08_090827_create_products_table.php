<?php

use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
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
            $table->timestamps();

            $table->string('name');
            $table->text('description');

            $table->text('features')
                ->nullable();

            $table->text('specification')
                ->nullable();

            $table->decimal('buying_price', 10 ,2);
            $table->decimal('selling_price', 10, 2);
            $table->float('discount')
                ->nullable();

            $table->string('main_image');
            $table->json('multi_images')
                ->nullable();

            $table->string('video_url')
                ->nullable();

            $table->integer('stock_amount')
                ->nullable();

            $table->boolean('is_out_of_stock')
                ->nullable()
                ->default(false);
            
            $table->foreignIdFor(Brand::class);
            $table->foreignIdFor(Category::class);
            $table->foreignIdFor(SubCategory::class);
                
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
