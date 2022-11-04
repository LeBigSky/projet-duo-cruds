<section class="mt-5">
    <div class="container">
    <h2 class="d-flex justify-content-center">Bienvenue sur votre page de réglage Portfolio</h2>

    <h4>voici le contenu de votre portfolio</h4>
    <ul class="list-group list-group-light list-group-small">
        @foreach ($projets as $projet)
        <li class="list-group-item d-flex gap-2"> 
            <div><img src="{{ asset($projet['img']) }}" style="max-width:100px;" alt=""></div>
            <div>{{ $projet['title'] }}</div>
            <div>{{ $projet['text'] }}</div>
        </li>
        @endforeach
      </ul>
      <button type="button" class="btn btn-warning my-3" ><a href="{{ route('projetcreate') }}">CREATE</a></button>
    </div>
    
</section>