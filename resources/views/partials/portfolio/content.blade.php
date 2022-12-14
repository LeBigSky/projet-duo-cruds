
        <section class="site-section-small portfolio">

            <div class="container">
                <h1 class="section-title-big text-center">Portfolio</h1>
            </div>

    
            @foreach ($projets as $projet )
            <div class="container-fluid">
            	<div class="row" id="grid">
            		<div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["uiux"]'>
                        <a class="portfolio-link" href="#">
                            <img src="{{ $projet['img'] }}" alt="" class="img-carousel">
                            <div class="portfolio-info">
                                <div class="portfolio-info-top">
                                    <h3>{{ $projet['title'] }}</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>{{ $projet['text'] }}</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                        </a>
                    </div><!-- /.col-lg-fifth  -->@endforeach
            	</div><!-- /#grid -->

            </div>
            
        </section><!-- /.portfolio -->

        <section class="site-section-small section-work-with-us yellow-bg text-center">

            <div class="container">

                <p class="section-title-small white-text mb-50">Coming together is a beginning, keeping together is progress, working together is success.</p>
                <a class="btn" href="#">Start Now</a>

            </div>
            
        </section><!-- /.section-work-with-us -->