<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('short_urls', function (Blueprint $table) {
            $table->id();

            $table->string('full_url')
                ->nullable(false);

            $table->string('token', 50)
                ->unique()
                ->nullable(false);

            $table->unsignedInteger('transition_limit')
                ->default(0)
                ->comment('Maximum number of clicks on the link. 0 = unlimited');

            $table->unsignedInteger('hits')
                ->default(0)
                ->comment('Amount of short URL visits');

            $table->timestamp('lifetime')
                ->nullable(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('short_urls');
    }
};
