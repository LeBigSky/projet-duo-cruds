<section class="mt-5">
    <div class="container">
        <ol class="breadcrumb gap-3">
            <li><a style="text-decoration: none; color:black;" href="{{ route('admin') }}">Admin</a> </li>
            <li><p>/</p></li>
            <li class="active">Port Settings</li>
        </ol><!-- /.breadcrumb -->
    <h2 class="d-flex justify-content-center border rounded py-2 bg-warning">Bienvenue sur votre page de réglage Portfolio</h2>
    <h4>voici le contenu de votre portfolio</h4>
    <ul class="list-group list-group-light list-group-small">
        @foreach ($projets as $projet)
        <li class="list-group-item d-flex gap-2"> 
            <div><img src="{{ asset($projet['img']) }}" style="max-width:100px;" alt=""></div>
            <div><h4>{{ $projet['title'] }} </h4></div>
            <div class="border border-left border-2"></div>
            <div>{{ $projet['text'] }}</div>
        </li>
        @endforeach
      </ul>
      <button type="button" class="btn btn-warning my-3" ><a style="text-decoration: none; color: black;" href="{{ route('projetcreate') }}">CREATE</a></button>
    </div>
    
</section>