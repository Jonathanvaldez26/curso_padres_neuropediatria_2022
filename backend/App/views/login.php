<?php
echo $header;
?>

<body class="">
    
    <main class="main-content main-content-bg mt-0">
        <section>

            <nav class="navbar navbar-expand-lg  blur blur-rounded top-0  z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid">
                    <img src="/assets/img/neuro_negro.png" height="40" alt=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 ">
                        Sociedad Mexicana de Neurología Pediátrica
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-2">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover mx-auto">

                        </ul>
                        <ul class="navbar-nav d-lg-block d-none">
                            <li class="nav-item">
                                <button type="button" class="btn btn-sm bg-gradient-warning btn-round mb-0 me-1" data-toggle="modal" data-target="#doc_programa"><b style="color: #ffffff">Programa</b></button>
                            </li>
                        </ul>
                        <ul class="navbar-nav text-center mt-3 mb-2 d-block d-lg-none">
                            <li class="nav-item">
                                <button type="button" class="btn btn-sm bg-gradient-warning btn-round mb-0 me-1" data-toggle="modal" data-target="#doc_programa"><b style="color: #ffffff">Programa</b></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            

            <div class="page-header min-vh-75" style="height: 90%;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-7">
                                <div class="card-header pb-0 text-start">
                                    <h5 class="font-weight-bolder text-info text-dark text-center">Taller para padres de la Sociedad Mexicana de Neurología Pediátrica 2022</h5>
                                    <div id="counter" class="group text-center mt-4">
                                        <!-- <span><em>days</em></span> 
                                        <span><em>hours</em></span>
                                        <span><em>minutes</em></span>
                                        <span><em>seconds</em></span>  -->
                                        <div class="row mt-4">
                                            <!--<div class="col-3 text-lg"><h3><span id="days"></span></h3></div>
                                            <div class="col-3 text-lg"><h3><span id="hours"></span></h3></div>
                                            <div class="col-3 text-lg"><h3><span id="minutes"></span></h3></div>
                                            <div class="col-3 text-lg"><h3><span id="seconds"></span></h3></div>-->
                                            <br>
                                        </div>
                                        <div class="row">
                                            <!--<div class="col-3">Días</div>
                                            <div class="col-3">Horas</div>
                                            <div class="col-3">Minutos</div>
                                            <div class="col-3">Segundos</div>-->
                                        </div>
                                    </div>
                                    <p class="mb-0 mt-5">Introduzca el correo electrónico con el cual usted fue registrado para poder iniciar sesión</p>
                                    <br><br>
                                </div>
                                <!-- Button trigger modal -->                                
                                <div class="card-body">
                                    <form role="form" class="text-start" id="login" action="/Login/crearSession" method="POST" class="form-horizontal">
                                        <label style="font-weight:bold; font-size: 15px">Correo electrónico</label>
                                        <div class="mb-5">
                                            <input type="email" name="usuario" id="usuario" class="form-control" placeholder="usuario@grupolahe.com" aria-label="Email">
                                        </div>
                                        <!-- <label style="font-weight:bold; font-size: 15px">Contraseña</label> -->
                                        <!-- <div class="mb-3">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="•••••••••" aria-label="Password">
                                        </div> -->
                                        <!-- <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                                            <label class="form-check-label" for="rememberMe">Recordar contraseña</label>
                                        </div> -->

                                        <div class="text-center">
                                            <button  type="button" id="btnEntrar" class="btn bg-gradient-warning w-100 mt-1 mb-0"><b style="color: #FFFFFF">ENTRAR</b></button>
                                        </div>
                                    </form>
                                    <!-- <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                        <p class="mb-2 text-sm mx-auto">
                                            ¿Olvido su contraseña?
                                            <a href="/Register/" class="text-info text-dark font-weight-bold">De clic aquí.</a>
                                        </p>
                                        <p class="mb-1 text-sm mx-auto text-center">
                                            Para crear su cuenta de acceso proporcione su cuenta de correo electrónico y de clic en el siguiente botón.
                                        </p>
                                        <div class="text-center">
                                            <a href="/Register/" type="button" class="btn bg-gradient-warning w-100 mt-4 mb-0 font-weight-bold"><b style="color: white">¡QUIERO REGISTRARME!</b></a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n9">
                                
                                <!-- <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('/assets/img/curved-images/curved9.jpg')"></div>-->
                                <video autoplay muted loop>
                                    <source class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" src="/assets/img/curved-images/FONDOWEB-SMNP-PADRES.mp4" type="video/mp4">
                                </video>

                            </div>

                            <!--<div class="count-particles" hidden>
                                <span class="js-count-particles">--</span> particles
                            </div>
                            <div ></div>-->

                        </div>
                    </div>
                </div>

            </div>

        </section>

        <div class="fixed-bottom space-wa">
            <div class="m-5">
                <a href="https://api.whatsapp.com/send?phone=527293787668&text=Buen%20d%C3%ADa" target="_blank">
                    <span class="fa fa-whatsapp px-1 py-3-3 icon-wa bg-gradient-success"></span>
                </a>
            </div>
        </div>
    </main>
    <!-- Modal -->
        <div class="modal" id="doc_programa" role="dialog" aria-labelledby="doc_programaLabel" aria-hidden="true" >
            <div class="modal-dialog modal-size-2" role="document" style="max-width: 590px;">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title text-center" id="doc_programaLabel">Programa</h5>
                        <button type="button" class="btn bg-gradient-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe src="https://www.flipbookpdf.net/web/site/481d28c4f8e8bc288524792304e2adcdc0ccdfb2FBP19835591.pdf.html" frameborder="0" style="width: -webkit-fill-available;
    max-width: -webkit-fill-available; height:700px;"></iframe>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                </div>
            </div>
        </div>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <script>
        
        ////===========Funcion JS para el contador==========////
        //===
        // VARIABLES
        //===
        const DATE_TARGET = new Date('05/16/2022 7:00 AM');
        // DOM for render
        const SPAN_DAYS = document.querySelector('span#days');
        const SPAN_HOURS = document.querySelector('span#hours');
        const SPAN_MINUTES = document.querySelector('span#minutes');
        const SPAN_SECONDS = document.querySelector('span#seconds');
        // Milliseconds for the calculations
        const MILLISECONDS_OF_A_SECOND = 1000;
        const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
        const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
        const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24

        //===
        // FUNCTIONS
        //===

        /**
        * Method that updates the countdown and the sample
        */
        function updateCountdown() {
            // Calcs
            const NOW = new Date()
            const DURATION = DATE_TARGET - NOW;
            const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);
            const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);
            const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);
            const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);
            // Thanks Pablo Monteserín (https://pablomonteserin.com/cuenta-regresiva/)

            // Render
            SPAN_DAYS.textContent = REMAINING_DAYS;
            SPAN_HOURS.textContent = REMAINING_HOURS;
            SPAN_MINUTES.textContent = REMAINING_MINUTES;
            SPAN_SECONDS.textContent = REMAINING_SECONDS;
        }

        //===
        // INIT
        //===
        updateCountdown();
        // Refresh every second
        setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);




        /// -------- CODIGO PARTICULAS ----------///
        particlesJS("particles-js", {
            "particles": {
                "number": {
                "value": 109,
                "density": {
                    "enable": true,
                    "value_area": 710
                }
            },
                "color": {
                "value": "#ffffff"
                },
                "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
                },
                "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
                },
                "size": {
                "value": 31.6,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
                },
                "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
                },
                "move": {
                "enable": true,
                "speed": 6,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                "onhover": {
                    "enable": true,
                    "mode": "grab"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
                },
                "modes": {
                "grab": {
                    "distance": 140,
                    "line_linked": {
                    "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
                }
            },
            "retina_detect": true
            });


            /* ---- stats.js config ---- */

            var count_particles, stats, update;
            stats = new Stats;
            stats.setMode(0);
            stats.domElement.style.position = 'absolute';
            stats.domElement.style.display = 'none';
            stats.domElement.style.left = '0px';
            stats.domElement.style.top = '0px';
            document.body.appendChild(stats.domElement);
            count_particles = document.querySelector('.js-count-particles');
            update = function() {
            stats.begin();
            stats.end();
            if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
                count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
            }
            requestAnimationFrame(update);
            };
            requestAnimationFrame(update);
    </script>

</body>

<?php echo $footer; ?>