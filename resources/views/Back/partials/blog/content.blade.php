<section class="mt-5">
    <div class="container">
    <h2 class="d-flex justify-content-center">Bienvenue sur votre page de réglage Blog</h2>

    <h4>voici le contenu de votre blog</h4>
    <ul class="list-group list-group-light list-group-small">
        @foreach ($articles as $article )
        <li class="list-group-item d-flex gap-2"> 
            <div><img src="{{ asset($article['img']) }}" style="max-width:100px;" alt=""></div>
            <div>{{ $article['title'] }}</div>
            <div>{{ $article['text'] }}</div>
        </li>
        @endforeach
      </ul>
      <button type="button" class="btn btn-warning my-3" href="{{ route('blogcreate') }}"><a href="{{ route('blogcreate') }}">CREATE</a></button>
    </div>
    
</section>