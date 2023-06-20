<?php

use App\Models\User;
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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('full_name')->nullable();
            $table->date('birthday')->nullable();
            $table->string('photo')->nullable();
            $table->integer('country_id');
            //$table->foreignId('country_id')->constrained('location_countries');
            $table->integer('city_id');
            //$table->foreignId('city_id')->constrained('location_cities');
            $table->text('address')->nullable();
            $table->integer('post_code')->nullable();
            $table->text('tags')->nullable();
            $table->string('native_language')->nullable();
            $table->string('web_site')->nullable();
            $table->string('web_site_url')->nullable();
            $table->string('web_portfolio')->nullable();
            $table->string('web_portfolio_url')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('social_telegram')->nullable();
            $table->string('social_instagram')->nullable();
            $table->string('social_linkedin')->nullable();
            $table->string('social_github')->nullable();
            $table->integer('show_age')->default(true);
            $table->integer('show_image')->default(true);
            $table->integer('show_social')->default(true);
            $table->boolean('deleted')->default(0);
            $table->timestamps();
            //$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
