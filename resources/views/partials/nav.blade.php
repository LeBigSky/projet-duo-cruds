
@if (Route::is('home'))
<header id="masthead"class="site-header" data-anchor-target=".hero" data-top="background: rgba(59,58,54,0); border-bottom-color: rgba(226,226,226,0);" data-top-bottom="background: rgba(59,58,54,1); border-bottom-color: rgba(226,226,226,1);">
@elseif (Route::is('blog'))
<header id="masthead" class="site-header site-header-fill">
@elseif (Route::is('portfolio'))
<header id="masthead" class="site-header site-header-fill">
@elseif (Route::is('contact'))
<header id="masthead" class="site-header site-header-fill">
@endif


    <nav id="primary-navigation" class="site-navigation">

        <div class="container-fluid">

            <div class="navbar-header">
                
                <a href="{{ route('home') }}" class="site-title yellow-text">Business Perfect</a>

            </div><!-- /.navbar-header -->

            <div class="main-menu" id="perfect-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    @if (Route::is('home'))
                        <li class="active">
                        <a href="{{ route('home') }}">Home</a></li>
                    @else
                    <li>
                        <a href="{{ route('home') }}">Home</a></li>
                    @endif
                    @if (Route::is('blog'))
                    <li class="active">
                    <a href="{{ route('blog') }}">Blog</a></li>
                    @else
                    <li>
                    <a href="{{ route('blog') }}">Blog</a></li>
                    @endif
                    @if (Route::is('portfolio'))
                    <li class="active">
                    <a href="{{ route('portfolio') }}">Portfolio</a></li>
                    @else
                    <li>
                    <a href="{{ route('portfolio') }}">Portfolio</a></li>
                    @endif
                    @if (Route::is('contact'))
                    <li class="active">
                    <a href="{{ route('contact') }}">Contact</a></li>
                    @else
                    <li>
                    <a href="{{ route('contact') }}">Contact</a></li>
                    @endif
                    
                    
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->
            
        </div>
                  
    </nav><!-- /.site-navigation -->
    
</header><!-- /#masthead -->