
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('municipalities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('barangays', function (Blueprint $table) {
            $table->dropColumn('municipality');

            $table->foreignId('municipality_id')
                ->nullable()
                ->constrained();
        });
    }

    public function down(): void
    {
        Schema::table('barangays', function (Blueprint $table) {
            $table->dropForeign(['municipality_id']);
            $table->dropColumn('municipality_id');
            $table->string('municipality')->nullable();
        });

        Schema::dropIfExists('municipalities');
    }
};
