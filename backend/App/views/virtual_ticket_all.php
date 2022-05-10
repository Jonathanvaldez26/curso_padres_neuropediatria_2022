<?php echo $header; ?>
<link id="pagestyle" href="/assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-2">
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
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;" disabled>Tickets Virtuales</a></li>
                </ol>
            </nav>

            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group"></div>
                </div>

                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="/Home/" class="nav-link text-body font-weight-bold mx-lg-4 mx-0  px-0">
                            <i class="fa fa-home me-sm-0"></i>
                            <span class="d-sm-inline d-none">Inicio</span>
                        </a>
                    </li>
                </ul>
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
    <style>
        @media (max-width: 576px) {
            #ticket-titulo{
                display: none;
            }

            #ticket-img{
                transform: rotateZ(-90deg);
                width: 135%;
                margin: 0px !important;
                position: relative;
                right: 40%;
                top: 10%;
                width: 180%;
            }
        }
    </style>
    <div class="container-fluid py-0 mt-5">
        <div class="row">
            <div id="ticket-titulo" class="col-lg-2">
            </div>
            <div  class="col-lg-8 mt-lg-0 mt-7">
                <!-- Card Profile -->
                <div id="ticket-titulo" class="card card-body" id="profile">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-sm-auto col-4">
                            <div class="avatar avatar-xl position-relative">
                                <img src="../../assets/img/icons/iCONOS-05.png" alt="bruce" class="w-100 border-radius-lg shadow-sm">
                            </div>
                        </div>
                        <div class="col-sm-auto col-8 my-auto">
                            <div class="h-100">
                                <h5 class="mb-1 font-weight-bolder">
                                    Tu Ticket Virtual
                                </h5>
                                <p class="mb-0 font-weight-bold text-sm">
                                    Accede a las ponencias con el, registra tu asistencia, tu identidad a un click.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
                            <label class="form-check-label mb-0">
                            </label>
                        </div>
                    </div>
                </div>

                
                <!-- Card Basic Info -->
                <div id="ticket-img" class="card mt-4" id="basic-info">
                    <div id="ticket-titulo" class="card-header">
                        <h5>Información Básica</h5>
                    </div>
                    <div class="card-body">
                        <!-- Estamos generando tu ticket -->
                        <!--<img src="../../assets/assets/img/boleto_musa.jpeg" alt="bruce" class="w-100 border-radius-lg shadow-sm"> -->
                        <img src="https://admin.foromusa.com/qrs/<?php echo $qr; ?>.png" style="display: none;" alt="" hidden>
                        <input id="codigo-qr" type="text" value="https://admin.foromusa.com/qrs/<?php echo $qr; ?>.png" style="display: none;" hidden readonly>
                        <input id="nombre-canvas" type="text" value="<?php echo $nombre; ?>" style="display: none;" hidden readonly>
                        <input id="apellidos-canvas" type="text" value="<?php echo $apellidos; ?>" style="display: none;" hidden readonly>
                        <!-- <br><br> -->
                        <div class="col-md-12 col-12 text-center">
                            <div id="main_ticket" hidden>
                                <canvas id="canvas_ticket" width="1220" height="457" name="ticket-<?php echo $clave_user; ?>" alt="ticket-<?php echo $clave_user; ?>" style="background: white; width: -webkit-fill-available;">
                                    <img src="/assets/img/boleto_musa.jpeg" alt="">
                                </canvas> <!--  background-image: url('/img/ticket.jpg'); -->
                            </div>
                        </div>
                        
                    </div>
                    
               </div>
               <div class="row">
                    <div class="button-row d-flex mt-4 col-12">
                        <a class="btn bg-gradient-light mb-4 mt-11 mt-md-0 js-btn-prev" href="/Home/" title="Prev">Regresar</a>
                    </div>
                </div>
           </div>
           <div class="col-lg-2">
           </div>
       </div>

   </div>

</main>

<script>
    $(document).ready(function() {
        // document.getElementById('main_ticket').removeAttribute('hidden');
        // app.loadPicture();

        var app = (function() {
            var canvas = document.getElementById('canvas_ticket');
            context = canvas.getContext('2d');

            var imgTicketFondo = new Image();
            imgTicketFondo.src = '/assets/img/boleto_musa.jpeg';

            imgTicketFondo.onload = function() {
                context.drawImage(imgTicketFondo, 0, 0);
            }

            // API
            public = {};

            // Public methods goes here...

            public.loadPicture = function() {

                var imgTicketFondo = new Image();
                imgTicketFondo.src = '/assets/img/boleto_musa.jpeg';

                imgTicketFondo.onload = function() {
                    context.drawImage(imgTicketFondo, 0, 0);
                }

                context = canvas.getContext('2d');

                var imgCodeQr = new Image();
                imgCodeQr.src = $('#codigo-qr').val();

                imgCodeQr.onload = function() {
                    context.drawImage(imgTicketFondo, 0, 0);
                    context.drawImage(imgCodeQr, 870, 90);
                

                    var centerX = canvas.width/2;
                    var centerY = canvas.height/2;

                    context = canvas.getContext('2d');

                    context.font="20pt Verdana";
                    context.fillStyle = "black";

                    context.fillText($('#nombre-canvas').val(),280, centerY+80);

                    context.font="20pt Verdana";
                    context.fillStyle = "black";

                    context.fillText($('#apellidos-canvas').val(),280, centerY+110);
                }

            };

            return public;
        }());

        function loadPicture() {

            context = canvas.getContext('2d');

            var imgCodeQr = new Image();
            imgCodeQr.src = $('#codigo-qr').val();

            imgCodeQr.onload = function() {
                context.drawImage(imgTicketFondo, 0, 0);
                context.drawImage(imgCodeQr, 870, 90);


                var centerX = canvas.width/2;
                var centerY = canvas.height/2;

                context = canvas.getContext('2d');

                context.font="20pt Verdana";
                context.fillStyle = "white";

                context.fillText($('#nombre-canvas').val(),430, centerY-50);

                context.font="20pt Verdana";
                context.fillStyle = "white";

                context.fillText($('#apellidos-canvas').val(),430, centerY);
            }

            };

        $('#show_ticket').on('click', function(event) {
            // alert('Mostrar Ticket');
            // console.log('asdasdasdas');
            document.getElementById('main_ticket').removeAttribute('hidden');
            app.loadPicture();
        });

        app;
        document.getElementById('main_ticket').removeAttribute('hidden');
        app.loadPicture();
        // loadPicture();
    });
</script>