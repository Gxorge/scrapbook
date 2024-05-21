<?php

use App\Models\Role;
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
        Schema::create('roles', function (Blueprint $table) {
            $table->id('rid');
            $table->string('role');
            $table->boolean('post');
            $table->boolean('delete_all');
            $table->boolean('edit_all');
            $table->boolean('manage_users');
            $table->boolean('manage_roles');
        });

        Role::firstOrCreate([
            'role' => 'Admin',
            'post' => true,
            'delete_all' => true,
            'edit_all' => true,
            'manage_users' => true,
            'manage_roles' => true
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
