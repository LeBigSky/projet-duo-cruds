<section class="mt-5">
    <div class="container">
        <ol class="breadcrumb gap-3">
            <li><a style="text-decoration: none; color:black;" href="{{ route('admin') }}">Admin</a> </li>
            <li><p>/</p></li>
            <li class="active">MESSAGES</li>
        </ol><!-- /.breadcrumb -->
    <h2 class="d-flex justify-content-center border rounded py-2 bg-warning">Bienvenue sur votre page de réglage Blog</h2>
    <h4>voici le contenu de votre boite à messages</h4>
    <ul class="list-group list-group-light list-group-small">
        @foreach ($messages as $message )
        <li class="list-group-item d-flex gap-2"> 
            <div><h4>{{ $message ['nom'] }}</h4></div>
            <div class="border border-left border-2"></div>
            <div>{{ $message ['message'] }}</div>
        </li>
        @endforeach
      </ul>
     
    </div>
</section>