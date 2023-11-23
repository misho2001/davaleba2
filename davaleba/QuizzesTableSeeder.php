foreach (range(1, 16) as $index) {
    Quiz::create([
        'title' => "Quiz $index",
        'description' => ($index % 2 == 0) ? null : "Description for Quiz $index",
        'photo' => ($index % 3 == 0) ? "https://example.com/photo-$index.jpg" : null,
        'status' => ($index % 4 == 0) ? 0 : 1,
        'created_at' => now()->subDays($index),
    ]);
}