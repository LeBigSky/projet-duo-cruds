<section class="site-section-small section-blog">

    <div class="container">

        <div class="text-center">

            <h1 class="section-title-big">Blog</h1>
            <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        
        </div>

        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="active">Blog</li>
        </ol><!-- /.breadcrumb -->

        <div class="row">

            <div class="col-md-9">
                
               
                  
                        
                    
               
                <div class="blog-post">
  @foreach ($articles as $article)
                    <a href="blog-post.html"><img class="img-carousel post-img" src="{{ $article['img'] }}" alt=""></a>

                    <div class="post-content">

                        <h3><a class="post-title" href="blog-post.html">{{ $article['title'] }}</a></h3>

                                
                        <p class="section-text">{{ $article['text'] }}</p>
                        
                    </div><!-- /.post-content -->
                    @endforeach
            </div>
        </div>
    </div>
    
</section><!-- /.section-blog -->