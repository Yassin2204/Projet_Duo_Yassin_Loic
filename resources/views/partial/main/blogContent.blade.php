@foreach ($DataBlogs as $DataBlog )
<main id="main" class="site-main">

    <section class="site-section-small section-blog">

        <div class="container">

            <div class="text-center">

                <h1 class="section-title-big">{{$DataBlog->titre}}</h1>
                <p class="section-text">{{$DataBlog->p1}}</p>
            
            </div>

            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Blog</li>
            </ol><!-- /.breadcrumb -->

            <div class="row">

                <div class="col-md-9">

                    <div class="blog-post">
                        @foreach ( $dynamiqueDataBlog as $dynamiqueDataBlog )
                            

                        <a href="blog-post.html"><img class="img-carousel post-img" src="{{asset("assets/img/".$dynamiqueDataBlog->photo)}}" alt=""></a>

                        <div class="post-content">

                            <h3><a class="post-title" href="blog-post.html">{{$dynamiqueDataBlog->sous_titre}}</a></h3>

                                    
                            <p class="section-text">{{$dynamiqueDataBlog->p1}}</p>
                            
                        </div><!-- /.post-content -->

                        @endforeach

                    </div><!-- /.blog-post -->

                </div>
            </div>
        </div>
        
    </section><!-- /.section-blog -->

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

<footer id="colophon" class="site-footer">

    <div class="container">

        <div class="email">
            <a href="mailto:hello@businessperfect.com">hello@businessperfect.com</a>
        </div><!-- /.email -->

        <div class="row">

            <div class="col-md-3 col-xs-6">

                <div class="mb-xs-20">
                    <a href="index.html" class="site-title yellow-text">Business<span>Perfect</span></a>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                </div>
                
            </div>

            <div class="col-md-3 col-xs-6">

                <div class="mb-xs-20">
                    <h4 class="small-title">Get in touch</h4>
                    <ul class="list-unstyled">
                        <li>Phone: <a href="tel:+15417543010">+1-541-754-3010</a></li>
                        <li>Email: <a href="mailto:hello@businessperfect.com">hello@businessperfect.com</a></li>
                        <li>Fax: <a href="tel:+15417543010">+1-541-754-3010</a></li>
                    </ul>   
                </div>
                
            </div>
          
            <div class="col-md-3 col-xs-6">

                <div class="mb-xs-20">
                    <h4 class="small-title">Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                
            </div>

            <div class="col-md-3 col-xs-6">

                <div class="mb-xs-20">
                    <h4 class="small-title">Location</h4>
                    <ul class="list-unstyled">
                        <li>BusinessPerfect</li>
                        <li>848 My Street,</li>
                        <li>CA 94544</li>
                    </ul>
                </div>

            </div>

        </div>
        
    </div>

    <div class="copyright">
        <p>&copy; 2017 BusinessPerfect | Made by <a href="http://milansavov.com/" class="yellow-text">Milan Savov</a></p>
    </div><!-- /.copyright -->    


@endforeach