<?php echo $header; ?>
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
                    <li class="breadcrumb-item text-sm">Comprobante de Vacunación</li>
                </ol>
            </nav>

            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group"></div>
                </div>

                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="/Home/" class="nav-link text-body font-weight-bold mx-lg-4 mx-0 px-0">
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
    <div class="container-fluid py-">
        <div class="row mt-2">
            <div class="col-lg-2">
            </div>
            <div class="card col-lg-8 mt-lg-5 mt-1" >
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-1">Mi comprobante de vacunación</h6>
                    <p class="text-sm">Registre su comprobante de vacunación antes del 25/04/2022</p>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-xl-4 col-md-3 mb-xl-0 mb-4"></div>
                        <?php echo $tabla ?>
                        <div class="col-xl-4 col-md-0 mb-xl-0 mb-4"></div>
                    </div>
                    <div class="row">
                        <div class="button-row d-flex mt-4 col-12">
                            <a class="btn bg-gradient-light mb-0 js-btn-prev" href="/Home/" title="Prev">Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>

    <br>
    <br>


    <div class="modal fade" id="Modal_Vacunacion" tabindex="-1" role="dialog" aria-labelledby="Modal_Vacunacion" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Agregue su Comprobante de Vacunación

                    </h5>
                    <span type="button" class="btn btn-dark" data-dismiss="modal" aria-label="Close">
                        X
                    </span>
                </div>
                <div class="modal-header">
                    <h6>
                        <label id="fecha_actual">Fecha máxima de validación: <?php echo $fechaActual; ?></label>
                        <br>
                        Por favor a continuación ingrese la información solicitada.
                    </h6>
                </div>

                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data" id="form_vacunacion">
                        <div class="form-group row">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group col-md-12">
                                        <label class="control-label col-md-12 col-sm-3 col-xs-12" for="numero_dosis">Seleccione el número de Dosis con el que Cuentas <span class="required">*</span></label>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <!-- <input type="date" name="fecha_" id="fecha_" class="form-control col-md-7 col-xs-12"> -->
                                            <select class="form-control" name="numero_dosis" id="numero_dosis" required>
                                                <option selected>Seleccione una Opción</option>
                                                <option value="2">2 Dosis</option>
                                                <option value="3">3 Dosis</option>
                                            </select>
                                        </div>
                                        <span id="availability_"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label col-md-12 col-sm-3 col-xs-12" for="marca">Seleccione las Marcas de sus Dosis <span class="required">*</span></label>
                                    <div class="col-md-12 col-sm-12 col-xs-12 checkbox-group required">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Pfizer-BioNTech" name="checkbox_marcas[]">
                                            <label class="form-check-label">Pfizer-BioNTech</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Cansino" name="checkbox_marcas[]">
                                            <label class="form-check-label" for="flexCheckDefault">Cansino</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="COVAX" name="checkbox_marcas[]">
                                            <label class="form-check-label" for="flexCheckDefault">COVAX</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="AstraZeneca" name="checkbox_marcas[]">
                                            <label class="form-check-label" for="flexCheckDefault">AstraZeneca</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Sputnik V" name="checkbox_marcas[]">
                                            <label class="form-check-label" for="flexCheckDefault">Sputnik V</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Sinovac" name="checkbox_marcas[]">
                                            <label class="form-check-label" for="flexCheckDefault">Sinovac</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Janssen" name="checkbox_marcas[]">
                                            <label class="form-check-label" for="flexCheckDefault">Janssen</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Moderna" name="checkbox_marcas[]">
                                            <label class="form-check-label" for="flexCheckDefault">Moderna</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label col-md-12 col-sm-12 col-xs-12" for="file_">Comprobante de Vacuna: <span class="required">*</span></label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="file" accept="application/pdf" class="form-control" id="file_" name="file_" required>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" id="user_" name="user_" value="<?=$_SESSION["utilerias_asistentes_id"]?>">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" id="btn_upload" name="btn_upload">Aceptar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <?php echo $iframe_doc; ?>

    <div class="fixed-bottom navbar-dark">
        <!-- <a class="navbar-brand" href="#!">Footer</a> -->
        <?php echo $footer; ?>
    </div>

</main>



