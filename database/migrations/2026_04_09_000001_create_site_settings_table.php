<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->text('hero_title')->nullable();
            $table->text('hero_subtitle')->nullable();
            $table->text('about_text')->nullable();
            $table->string('email')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('github_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('cv_link')->nullable();
            $table->timestamps();
        });

        // Insert default data automatically
        DB::table('site_settings')->insert([
            'hero_title' => "Hi, I'm <br class=\"hidden sm:block\">\n<span class=\"text-gradient\">Nor Rahman Maulana</span>",
            'hero_subtitle' => "IT Student at Polinema | Web & Mobile Developer",
            'about_text' => "\"Mahasiswa Teknik Informatika yang antusias dalam merancang solusi perangkat lunak yang efisien. Di luar coding, saya juga aktif mengelola organisasi sebagai Sekretaris Formadiksi Polinema.\"",
            'email' => "email.anda@gmail.com",
            'whatsapp' => "6281234567890",
            'github_url' => "https://github.com/norrahman",
            'linkedin_url' => "https://linkedin.com/in/nor-rahman-maulana",
            'cv_link' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
