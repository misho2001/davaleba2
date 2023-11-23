@foreach ($quizzes as $quiz)
    <div>
        <h2>{{ $quiz->title }}</h2>
        @if ($quiz->description)
            <p>Description: {{ $quiz->description }}</p>
        @endif
        @if ($quiz->photo)
            <img src="{{ $quiz->photo }}" alt="Quiz Photo">
        @endif
        <p>Status: {{ $quiz->status ? 'Active' : 'Inactive' }}</p>
        <p>Added on: {{ $quiz->created_at }}</p>
    </div>
@endforeach