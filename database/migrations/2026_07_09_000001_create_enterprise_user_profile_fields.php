<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table): void {
            $table->string('username')->unique()->nullable()->after('name');
            $table->string('phone')->nullable()->after('email');
            $table->string('status')->default('active')->after('phone');
            $table->string('avatar')->nullable()->after('status');
            $table->timestamp('last_login_at')->nullable()->after('avatar');
            $table->ipAddress('last_login_ip')->nullable()->after('last_login_at');
            $table->string('last_login_device')->nullable()->after('last_login_ip');
            $table->softDeletes()->after('updated_at');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table): void {
            $table->dropColumn(['username', 'phone', 'status', 'avatar', 'last_login_at', 'last_login_ip', 'last_login_device', 'deleted_at']);
        });
    }
};
