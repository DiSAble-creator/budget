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
        Schema::create('operations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->float('sum');
            $table->unsignedBigInteger('responsability_user_id');
            $table->string('flag_sum');
            $table->string('flag_state');
            $table->date('date');
            $table->unsignedBigInteger('categories_id');
            $table->unsignedBigInteger('bank_account_id');
            $table->unsignedBigInteger('account_id');

            $table->foreign('categories_id')->references('id')->on('categories');
            $table->foreign('bank_account_id')->references('id')->on('bank_accounts');
            $table->foreign('account_id')->references('id')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operations');
    }
};
