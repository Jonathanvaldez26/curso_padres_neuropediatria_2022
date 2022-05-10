

<?php echo $header; ?>


<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-3 text-dark" href="javascript:;">
                            <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>shop </title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1716.000000, -439.000000)" fill="#252f40" fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(0.000000, 148.000000)">
                                                <path d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                                                <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/Home/">Inicio</a></li>
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;" disabled>Mis Datos Personales</a></li>
                </ol>
            </nav>

            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group"></div>
                </div>

                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="/Home/" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-home me-sm-0"></i>
                            <span class="d-sm-inline d-none">Inicio</span>
                        </a>
                    </li>
                </ul>
                <ul></ul>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="/Login/cerrarSession" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-power-off me-sm-1"></i>
                            <span class="d-sm-inline d-none">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">

        <div class="container">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <!-- Page Title -->
                    <h1>NotiAdium</h1>
                    <!-- Page Description -->
                    <p>Una seccion dedicada a lo mas nuevo en noticias Adium, enterate ya, aquí. </p>
                </div>
            </div>
        </div>

    <section class="section featured-article">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <article class="featured">
                        <!-- Image -->
                        <div class="image">
                            <a href="blog-single.html"><img class="img-fluid" src="../../assets_news/images/feature/Notiasofarma.png" alt="featured-article"></a>
                        </div>
                        <!-- written-content -->
                        <div class="content">
                            <!-- Post Title -->
                            <h2><a href="blog-single.html">NOTICIA O TEMA DE INTERÉS PRINCIPAL</a></h2>
                            <!-- Tags -->
                            <ul class="list-inline post-tag">
                                <li class="list-inline-item">
                                    <img class="img-fluid" src="../../assets_news/images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Autor del título</a>
                                </li>
                                <li class="list-inline-item">
                                    Febrero 11, 2022
                                </li>
                            </ul>
                            <!-- Post Body -->
                            <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed,convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat.Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis</p>
                            <a class="btn btn-main-sm" href="blog-single.html">Read more</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
        
    <section class="post-grid section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Post -->
                    <article class="post-sm">
                        <!-- Post Image -->
                        <div class="post-thumb">
                            <a href="blog-single.html"><img class="w-100" src="../../assets_news/images/blog/post-01.jpg" alt="Post-Image"></a>		
                        </div>
                        <!-- Post Title -->
                        <div class="post-title">
                            <h3><a href="blog-single.html">Innovation distinguishes between a leader and a follower.</a></h3>
                        </div>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <ul class="list-inline post-tag">
                                <li class="list-inline-item">
                                    <img src="../../assets_news/images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Thomas Johnson</a>
                                </li>
                                <li class="list-inline-item">
                                    August 8, 2017
                                </li>
                            </ul>
                        </div>
                        <!-- Post Details -->
                        <div class="post-details">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Post -->
                    <article class="post-sm">
                        <!-- Post Image -->
                        <div class="post-thumb">
                            <a href="blog-single.html"><img class="w-100" src="../../assets_news/images/blog/post-02.jpg" alt="Post-Image"></a>		
                        </div>
                        <!-- Post Title -->
                        <div class="post-title">
                            <h3><a href="blog-single.html">Design is not just what it looks like and feels like. Design is how it works.</a></h3>
                        </div>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <ul class="list-inline post-tag">
                                <li class="list-inline-item">
                                    <img src="../../assets_news/images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Thomas Johnson</a>
                                </li>
                                <li class="list-inline-item">
                                    August 8, 2017
                                </li>
                            </ul>
                        </div>
                        <!-- Post Details -->
                        <div class="post-details">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Post -->
                    <article class="post-sm">
                        <!-- Post Image -->
                        <div class="post-thumb">
                            <a href="blog-single.html"><img class="w-100" src="../../assets_news/images/blog/post-03.jpg" alt="Post-Image"></a>		
                        </div>
                        <!-- Post Title -->
                        <div class="post-title">
                            <h3><a href="blog-single.html">Design is not just what it looks like and feels like. Design is how it works.</a></h3>
                        </div>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <ul class="list-inline post-tag">
                                <li class="list-inline-item">
                                    <img src="../../assets_news/images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Thomas Johnson</a>
                                </li>
                                <li class="list-inline-item">
                                    August 8, 2017
                                </li>
                            </ul>
                        </div>
                        <!-- Post Details -->
                        <div class="post-details">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Post -->
                    <article class="post-sm">
                        <!-- Post Image -->
                        <div class="post-thumb">
                            <a href="blog-single.html"><img class="w-100" src="../../assets_news/images/blog/post-01.jpg" alt="Post-Image"></a>		
                        </div>
                        <!-- Post Title -->
                        <div class="post-title">
                            <h3><a href="blog-single.html">Innovation distinguishes between a leader and a follower.</a></h3>
                        </div>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <ul class="list-inline post-tag">
                                <li class="list-inline-item">
                                    <img src="../../assets_news/images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Thomas Johnson</a>
                                </li>
                                <li class="list-inline-item">
                                    August 8, 2017
                                </li>
                            </ul>
                        </div>
                        <!-- Post Details -->
                        <div class="post-details">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Post -->
                    <article class="post-sm">
                        <!-- Post Image -->
                        <div class="post-thumb">
                            <a href="blog-single.html"><img class="w-100" src="../../assets_news/images/blog/post-02.jpg" alt="Post-Image"></a>		
                        </div>
                        <!-- Post Title -->
                        <div class="post-title">
                            <h3><a href="blog-single.html">Design is not just what it looks like and feels like. Design is how it works.</a></h3>
                        </div>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <ul class="list-inline post-tag">
                                <li class="list-inline-item">
                                    <img src="../../assets_news/images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Thomas Johnson</a>
                                </li>
                                <li class="list-inline-item">
                                    August 8, 2017
                                </li>
                            </ul>
                        </div>
                        <!-- Post Details -->
                        <div class="post-details">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Post -->
                        <article class="post-sm">
                            <!-- Post Image -->
                            <div class="post-thumb">
                                <a href="blog-single.html"><img class="w-100" src="../../assets_news/images/blog/post-03.jpg" alt="Post-Image"></a>		
                            </div>
                            <!-- Post Title -->
                            <div class="post-title">
                                <h3><a href="blog-single.html">Design is not just what it looks like and feels like. Design is how it works.</a></h3>
                            </div>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <ul class="list-inline post-tag">
                                    <li class="list-inline-item">
                                        <img src="../../assets_news/images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Thomas Johnson</a>
                                    </li>
                                    <li class="list-inline-item">
                                        August 8, 2017
                                    </li>
                                </ul>
                            </div>
                            <!-- Post Details -->
                            <div class="post-details">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                            </div>
                        </article>
                </div>
                <div class="col-12">
                    <!-- Call to action Community -->
                    <div class="cta-community shadow">
                        <div class="row align-items-center">
                            <div class="col-lg-9 text-center text-lg-left">
                                <div class="content">
                                    <!-- Title -->
                                    <h2>Ready To Join Our Community?</h2>
                                    <!-- Description -->
                                    <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. </p>
                                </div>
                            </div>
                            <div class="col-lg-3 text-center text-lg-right mt-4 mt-lg-0">
                                <div class="action-button">
                                    <!-- Call Button -->
                                    <a href="contact.html" class="btn btn-main-sm">Join now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Post -->
                    <article class="post-sm">
                        <!-- Post Image -->
                        <div class="post-thumb">
                            <a href="blog-single.html"><img class="w-100" src="../../assets_news/images/blog/post-01.jpg" alt="Post-Image"></a>		
                        </div>
                        <!-- Post Title -->
                        <div class="post-title">
                            <h3><a href="blog-single.html">Innovation distinguishes between a leader and a follower.</a></h3>
                        </div>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <ul class="list-inline post-tag">
                                <li class="list-inline-item">
                                    <img src="../../assets_news/images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Thomas Johnson</a>
                                </li>
                                <li class="list-inline-item">
                                    August 8, 2017
                                </li>
                            </ul>
                        </div>
                        <!-- Post Details -->
                        <div class="post-details">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Post -->
                    <article class="post-sm">
                        <!-- Post Image -->
                        <div class="post-thumb">
                            <a href="blog-single.html"><img class="w-100" src="../../assets_news/images/blog/post-02.jpg" alt="Post-Image"></a>		
                        </div>
                        <!-- Post Title -->
                        <div class="post-title">
                            <h3><a href="blog-single.html">Design is not just what it looks like and feels like. Design is how it works.</a></h3>
                        </div>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <ul class="list-inline post-tag">
                                <li class="list-inline-item">
                                    <img src="../../assets_news/images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Thomas Johnson</a>
                                </li>
                                <li class="list-inline-item">
                                    August 8, 2017
                                </li>
                            </ul>
                        </div>
                        <!-- Post Details -->
                        <div class="post-details">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Post -->
                    <article class="post-sm">
                        <!-- Post Image -->
                        <div class="post-thumb">
                            <a href="blog-single.html"><img class="w-100" src="../../assets_news/images/blog/post-03.jpg" alt="Post-Image"></a>		
                        </div>
                        <!-- Post Title -->
                        <div class="post-title">
                            <h3><a href="blog-single.html">Design is not just what it looks like and feels like. Design is how it works.</a></h3>
                        </div>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <ul class="list-inline post-tag">
                                <li class="list-inline-item">
                                    <img src="../../assets_news/images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Thomas Johnson</a>
                                </li>
                                <li class="list-inline-item">
                                    August 8, 2017
                                </li>
                            </ul>
                        </div>
                        <!-- Post Details -->
                        <div class="post-details">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                        </div>
                    </article>
                </div>
                <div class="col-12">
                    <!-- Pagination -->
                    <nav class="pagination-nav">
                    <ul class="pagination">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="ti-angle-right"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </li>
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    </div>
    <?php echo $footer; ?>
</main>



