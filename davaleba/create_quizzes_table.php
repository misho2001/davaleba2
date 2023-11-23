

Schema::create('quizzes', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('description')->nullable();
    $table->string('photo')->nullable();
    $table->boolean('status')->default(1);
    $table->timestamps();
});