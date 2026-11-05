<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique(['email']);

            $table->dropColumn([
                'name',
                'email',
                'email_verified_at'
            ]);

            $table->string('fullname');
            $table->string('address');
            $table->integer('age');
            $table->string('username', 30)->unique();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique(['username']);

            $table->dropColumn([
                'fullname',
                'address',
                'age',
                'username'
            ]);

            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
        });
    }
};