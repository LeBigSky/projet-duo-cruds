<section>
    <div class="container">
    <h2>Bienvenue sur votre page de réglage Blog</h2>

    <h3 class="d-flex justify-content-center">voici le contenu de votre blog</h3>
    <ul class="list-group list-group-light list-group-small">
        @foreach ($articles as $article )
        <li class="list-group-item d-flex gap-2"> 
            <div><img src="{{ asset($article['img']) }}" style="max-width:100px;" alt=""></div>
            <div>{{ $article['title'] }}</div>
            <div>{{ $article['text'] }}</div>
        </li>
        @endforeach
      </ul>

    </div>
{{-- @dd($article['img']) --}}
</section>