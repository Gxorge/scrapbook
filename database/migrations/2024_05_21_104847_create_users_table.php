<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('uid');
            $table->string('username');
            $table->string("password");
            $table->bigInteger("role_rid")->unsigned();
            $table->foreign("role_rid")->references("rid")->on("roles");
            $table->timestamps();
        });

        User::firstOrCreate([
           'username' => 'admin',
           'password' => Hash::make('scrapbook'),
            'role_rid' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
