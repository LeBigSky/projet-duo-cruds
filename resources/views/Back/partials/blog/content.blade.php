<section class="mt-5 mb-5">
    <div class="container">
        <ol class="breadcrumb gap-3">
            <li><a style="text-decoration: none; color:black;" href="{{ route('admin') }}">Admin</a> </li>
            <li><p>/</p></li>
            <li class="active">Réglages Blog</li>
        </ol>
    
        <h2 class="d-flex justify-content-center border rounded py-2 bg-warning">Bienvenue sur votre page de réglage Blog</h2>
        <h4>voici le contenu de votre blog</h4>
         <button type="button" class="btn btn-warning my-3" href="{{ route('blogcreate') }}"><a style="text-decoration: none; color: black;" href="{{ route('blogcreate') }}">CREER  &#10133;</a></button>
    
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th>IMAGE</th>
                <th>TITRE</th>
                <th>CONTENU</th>
                <th>SUPPRIMER</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article ) 
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{ asset($article['img']) }}" style="max-width:100px;" alt="">
                  </div>
                </td>
                <td>
                    <p style="font-weight:bold;">{{ $article['title'] }}</p>
                </td>
                <td><p>{{ $article['text'] }}</p></td>
                <td>
                  <button type="button" class="btn btn-warning">
                    <a href={{ "article/".$article['id'] }}>Show</a>
                  </button>
                </td>
                <td>
                  <button type="button" class="btn btn-warning">
                    <a href={{ "delete/".$article['id'] }}>DELETE</a>
                  </button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</section>
