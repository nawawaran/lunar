<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Lunar\Base\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create($this->prefix . 'staff', function (Blueprint $table) {
            $table->id();
            $table->boolean('admin')->default(false)->index();
            $table->string('firstname')->index();
            $table->string('lastname')->index();
            $table->string('phone');
            $table->string('username')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('tenant_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->unique(['email', 'tenant_id']);
            $table->unique(['phone', 'tenant_id']);
            $table->unique(['username', 'tenant_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists($this->prefix . 'staff');
    }
};
