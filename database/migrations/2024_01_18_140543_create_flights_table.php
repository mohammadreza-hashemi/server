<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->bigInteger('vote')->nullable();
            $table->tinyInteger('vote1')->nullable()->unsigned();
            $table->unsignedTinyInteger('vote2');
            $table->binary('photo')->nullable();
            $table->boolean('confirmed')->nullable()->default(false);
            $table->char('name', 100)->nullable()->charset('utf8mb4');
            $table->string('name2', 100)->nullable()->collation('utf8mb4_unicode_ci');
            $table->decimal('amount', 8, 2)->nullable();
            $table->double('amount2', 8, 2)->nullable();
            $table->enum('difficulty', ['easy', 'hard'])->nullable()->default('easy');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')
                ->on('users')->onDelete('cascade')->onUpdate('cascade');
//            $table->foreignIdFor(\App\Models\User::class);
            $table->foreignUuid('user_id2')->nullable();
            $table->json('options')->nullable();
            $table->lineString('position')->nullable();
            $table->point('position1')->nullable();
            $table->polygon('position2')->nullable();
            $table->longText('description')->nullable();
            $table->text('description2')->nullable();
            $table->nullableMorphs('taggable');
            $table->string('email')->nullable()->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
