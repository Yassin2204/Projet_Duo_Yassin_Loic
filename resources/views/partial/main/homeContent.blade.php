@foreach ( $staticData as $DataHome )

<div class="hero background-overlay">
    
    <div class="hero-text">
        <h1>{{$DataHome->titre}}</h1>
    </div> <!-- /.hero-text -->
    <div class="hero-arrow">
        <a class="scrollTo" href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
    </div><!-- /.hero-arrow -->

</div><!-- /.hero -->

<main id="main" class="site-main">

    <section class="site-section section-quote text-center">

        <div class="container">

            <p class="quote">{{$DataHome->p1}}</p>
            <p class="quote-owner yellow-text">{{$DataHome->p2}}</p>
            
        </div>
        
    </section><!-- /.section-quote -->

    <section class="section-we-are-creative">

        <div class="container-fluid">

            <div class="row">

                <div class="col-sm-6 hidden-xs">
                    <img class="img-carousel" src="assets/img/we-are-creative.jpg" alt="We are creative">
                </div>
                
                <div class="col-sm-6 project yellow-bg">

                    <div class="project-content">

                        <h3 class="section-title">{{$DataHome->sous_titre}}</h3>
                        <p class="small-title mb-30">{{$DataHome->p3}}</p> 
                        <a href="#" class="white-text">{{$DataHome->href}}</a>
                        
                    </div> <!-- /.project-content-->  

                </div>
            
            </div>

        </div>
        
    </section><!-- /.section-we-are-creative -->

    <section class="site-section-small section-services">

        <div class="container">

            <div class="text-center">    

                <h3 class="section-title">{{$DataHome->sous_titre2}}</h3>
                <p class="section-text">{{$DataHome->p4}}</p> 

            </div>

            <div class="row">

                <div class="col-sm-5 col-sm-offset-1 col-xs-6">
                    @foreach ($dynamiqueDataHome as $dynamiqueDataHome )
                    <div class="service">

                        <div class="service-icon">
                            <i class="{{$dynamiqueDataHome->icone}}" aria-hidden="true"></i>
                        </div><!-- /.service-icon -->
                        <div class="service-content">
                            <h4 class="service-title">{{$dynamiqueDataHome->sous_titre}}</h4>
                            <p>{{$dynamiqueDataHome->p1}}</p>
                        </div><!-- /.service-content -->

                    </div><!-- /.service -->
                    
                    @endforeach
                </div>
                    
                </div>
                
            </div>

    </section><!-- /.section-services -->

    <section class="site-section-small section-work-with-us yellow-bg text-center">

        <div class="container">

            <p class="section-title-small white-text mb-50">Coming together is a beginning, keeping together is progress, working together is success.</p>
            <a class="btn" href="#">Start Now</a>

        </div>
        
    </section><!-- /.section-work-with-us -->

    <section class="social-networks">

        <div class="container-fluid">

            <div class="row">

                <a class="white-text black-bg twitter-bg" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a class="white-text gray-bg facebook-bg" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a class="white-text black-bg google-plus-bg" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a class="white-text gray-bg message-bg" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>

            </div>
            
        </div>
        
    </section><!-- /.social-networks -->

</main><!-- /.site-main -->



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset("js/app.js")}}"></script>
    
@endforeach