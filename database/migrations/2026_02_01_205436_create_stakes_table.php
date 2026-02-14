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
    Schema::create('stakes', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained()->cascadeOnDelete();
      $table->foreignId('asset_id')->constrained()->cascadeOnDelete();
      $table->float('amount');
      $table->string('apr_rate');
      $table->string('duration');
      $table->float('profit');
      $table->timestamp('matures_on');
      $table->boolean('has_matured')->default(false);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('stakes');
  }
};
