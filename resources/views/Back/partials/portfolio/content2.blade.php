<section class="mt-5 mb-5">
    <div class="container">
        <ol class="breadcrumb gap-3">
            <li><a style="text-decoration: none; color:black;" href="{{ route('admin') }}">Admin</a> </li>
            <li><p>/</p></li>
            <li class="active">Réglages Portfolio</li>
        </ol>
    
        <h2 class="d-flex justify-content-center border rounded py-2 bg-warning">Bienvenue sur votre page de réglage Portfolio</h2>
        <h4>voici le contenu de votre portfolio</h4>
         <button type="button" class="btn btn-warning my-3" href="{{ route('blogcreate') }}"><a style="text-decoration: none; color: black;" href="{{ route('blogcreate') }}">CREER  &#10133;</a></button>
    
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th>IMAGE</th>
                <th>TITRE</th>
                <th>CONTENU</th>
                <th>AFFICHER</th>
                <th>SUPPRIMER</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($projets as $projet ) 
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{ asset($projet['img']) }}" style="max-width:100px;" alt="">
                  </div>
                </td>
                <td>
                    <p style="font-weight:bold;">{{ $projet['title'] }}</p>
                </td>
                <td><p>{{ $projet['text'] }}</p></td>
                <td>
                  <button type="button" class="btn btn-info">
                    <a class="text-white" style="text-decoration: none" href={{ "projet/".$projet['id'] }}>SHOW</a>
                  </button>
                </td>
                <td>
                  <button type="button" class="btn btn-danger">
                    <a class="text-white" style="text-decoration: none" href={{ "delete/".$projet['id'] }}>DELETE</a>
                  </button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</section>