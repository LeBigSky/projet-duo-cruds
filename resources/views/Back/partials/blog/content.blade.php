<section class="mt-5">
    <div class="container">
        <ol class="breadcrumb gap-3">
            <li><a style="text-decoration: none; color:black;" href="{{ route('admin') }}">Admin</a> </li>
            <li><p>/</p></li>
            <li class="active">Blog Settings</li>
        </ol><!-- /.breadcrumb -->
    <h2 class="d-flex justify-content-center border rounded py-2 bg-warning">Bienvenue sur votre page de réglage Blog</h2>
    <h4>voici le contenu de votre blog</h4>
    <ul class="list-group list-group-light list-group-small">
        @foreach ($articles as $article )
        <li class="list-group-item d-flex gap-2"> 
            <div><img src="{{ asset($article['img']) }}" style="max-width:100px;" alt=""></div>
            <div><h4>{{ $article['title'] }}</h4></div>
            <div class="border border-left border-2"></div>
            <div>{{ $article['text'] }}</div>
        </li>
        @endforeach
      </ul>
      <button type="button" class="btn btn-warning my-3" href="{{ route('blogcreate') }}"><a style="text-decoration: none; color: black;" href="{{ route('blogcreate') }}">CREATE</a></button>
    </div>
</section>