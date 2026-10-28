<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Product specifications (style no, fabric, weight, ... , benefits) edited from Admin > Home Products
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->json('specs')->nullable()->after('description');
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('specs');
        });
    }
};
