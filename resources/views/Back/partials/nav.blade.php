<header>
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('admin') }}">ESPACE ADMIN</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="{{ route('backblog') }}">SETTINGS BLOG </a>
              <a class="nav-link" href="{{ route('projet') }}">SETTINGS PORTFOLIO</a>

            </div>
          </div>
        </div>
      </nav>
</header>