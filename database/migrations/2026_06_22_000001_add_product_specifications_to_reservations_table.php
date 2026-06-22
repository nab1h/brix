<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->decimal('product_length', 10, 2)->nullable()->after('category');
            $table->decimal('product_width', 10, 2)->nullable()->after('product_length');
            $table->decimal('product_height', 10, 2)->nullable()->after('product_width');
            $table->unsignedSmallInteger('paper_weight')->nullable()->after('product_height');
            $table->string('material')->nullable()->after('paper_weight');
            $table->unsignedInteger('quantity')->nullable()->after('material');
            $table->string('brand_logo')->nullable()->after('quantity');
        });
    }

    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropColumn([
                'product_length',
                'product_width',
                'product_height',
                'paper_weight',
                'material',
                'quantity',
                'brand_logo',
            ]);
        });
    }
};
