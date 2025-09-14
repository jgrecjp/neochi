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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('wallet_address')->unique()->nullable()->after('email');
            $table->string('nonce')->nullable()->after('wallet_address');
            
            // 既存フィールドをnullable にする
            $table->string('email')->nullable()->change();
            $table->timestamp('email_verified_at')->nullable()->change();
            $table->string('password')->nullable()->change();
	});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
	    Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['wallet_address', 'nonce']);
            $table->string('email')->nullable(false)->change();
            $table->string('password')->nullable(false)->change();

            //
        });
    }
};
