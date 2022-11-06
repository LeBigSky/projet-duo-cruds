<section class="mt-5">
    <div class="container">
        <ol class="breadcrumb gap-3">
            <li><a style="text-decoration: none; color:black;" href="{{ route('admin') }}">Admin</a> </li>
            <li><p>/</p></li>
            <li class="active">Messages</li>
        </ol><!-- /.breadcrumb -->
    <h2 class="d-flex justify-content-center border rounded py-2 mb-5 bg-warning">Bienvenue sur votre page de réglage Blog</h2>
    <h4>voici le contenu de votre boite à messages</h4>
    <ul class="list-group list-group-light list-group-small">
        @foreach ($messages as $message )
        <li class="list-group-item d-flex bg-secondary text-white">
          <div class="container">
            <div class="row ">
                <div class="col-4 border-end ">
                    <div><h6 class="border-bottom border-warning text-center">Expediteur</h6><h4> {{ $message ['nom'] }}</h4></div>
                </div>
                <div class="col-4 border-end">
                    <div><h6 class="border-bottom border-warning text-center">Sujet</h6> {{ $message ['sujet'] }}</div>
                </div>
                <div class="col-4">
                    <div><h6 class="border-bottom border-warning text-center">Adresse mail</h6> {{ $message ['email'] }}</div>
                </div>
            </div>
          </div>
        </li>
        <div class="list-group-item mb-3"><h6 style="width: 80px;" class="border rounded py-2 border-warning text-center mb-3">Message</h6> {{ $message['message'] }}</div>
        @endforeach
      </ul>
     
    </div>
</section>