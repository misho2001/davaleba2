$quizzes = Quiz::whereNotNull('photo') 
    ->where(function ($query) {
        $query->where('status', 1)
            ->orWhereNull('description'); 
    })
    ->orderBy('created_at', 'desc')
    ->take(8)
    ->get();

return view('main_page', ['quizzes' => $quizzes]);