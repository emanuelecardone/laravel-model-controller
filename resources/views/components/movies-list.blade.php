<section class="movies_wrapper w-100">
    <div class="container">
        <div class="row row-cols-1 g-5">
            @forelse($movies as $movie)
                <div class="col">
                    <div class="movie_card_wrapper w-100 h-100">
                            <div class="movie_card">
                                <h3>Title: {{$movie->title}}</h3>
                                <h4>Original title: {{$movie->original_title}}</h4>
                                <h4>Nationality: {{$movie->nationality}}</h4>
                                <h5>Date: {{$movie->date}}</h5>
                                <h5>Vote: {{$movie->vote}}</h5>
                            </div>
                    </div>
                </div>
            @empty
                <h2>No movies were found</h2>
            @endforelse
        </div>
    </div>
</section>