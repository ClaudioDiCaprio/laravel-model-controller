{{-- @dd($movies) --}}

<ul>
    @foreach ($movies as $movie)
        <li>
            Title: {{$movie->title}},
            Original_Title {{$movie->original_title}},
            Nationality: {{$movie->nationality}},
            Release Date: {{$movie->date}},
            Vote: {{$movie->vote}}.
        </li>
        <div>.</div>
    @endforeach
</ul>