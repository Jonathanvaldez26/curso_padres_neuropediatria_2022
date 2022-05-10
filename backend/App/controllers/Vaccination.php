<?php
namespace App\controllers;

use \Core\View;
use \Core\Controller;
use \App\models\Vaccination AS VaccinationDao;

class Vaccination extends Controller{

    private $_contenedor;

    function __construct(){
        parent::__construct();
        $this->_contenedor = new Contenedor;
        View::set('header',$this->_contenedor->header());
        View::set('footer',$this->_contenedor->footer());
    }

    public function getUsuario(){
        return $this->__usuario;
    }

    public function index() {
        $extraHeader =<<<html
html;
        $extraFooter =<<<html
    <footer class="footer pt-0">
              <div class="container-fluid">
                  <div class="row align-items-center justify-content-lg-between">
                      <div class="col-lg-6 mb-lg-0 mb-4">
                          <div class="copyright text-center text-sm text-muted text-lg-start">
                              © <script>
                                  document.write(new Date().getFullYear())
                              </script>,
                              made with <i class="fa fa-heart"></i> by
                              <a href="https://www.creative-tim.com" class="font-weight-bold" target="www.grupolahe.com">Creative GRUPO LAHE</a>.
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                              <li class="nav-item">
                                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">privacy policies</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </footer>
          <!-- jQuery -->
            <script src="/js/jquery.min.js"></script>
            <!--   Core JS Files   -->
            <script src="/assets/js/core/popper.min.js"></script>
            <script src="/assets/js/core/bootstrap.min.js"></script>
            <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
            <script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
            <!-- Kanban scripts -->
            <script src="/assets/js/plugins/dragula/dragula.min.js"></script>
            <script src="/assets/js/plugins/jkanban/jkanban.js"></script>
            <script src="/assets/js/plugins/chartjs.min.js"></script>
            <script src="/assets/js/plugins/threejs.js"></script>
            <script src="/assets/js/plugins/orbit-controls.js"></script>
            
          <!-- Github buttons -->
            <script async defer src="https://buttons.github.io/buttons.js"></script>
          <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
            <script src="/assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>

          <!-- VIEJO INICIO -->
            <script src="/js/jquery.min.js"></script>
          
            <script src="/js/custom.min.js"></script>

            <script src="/js/validate/jquery.validate.js"></script>
            <script src="/js/alertify/alertify.min.js"></script>
            <script src="/js/login.js"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
          <!-- VIEJO FIN -->
   <script>
    $( document ).ready(function() {

          $("#form_vacunacion").on("submit",function(event){
              event.preventDefault();
              
                  var formData = new FormData(document.getElementById("form_vacunacion"));
                  for (var value of formData.values()) 
                  {
                     console.log(value);
                  }
                  $.ajax({
                      url:"/Vaccination/uploadComprobante",
                      type: "POST",
                      data: formData,
                      cache: false,
                      contentType: false,
                      processData: false,
                      beforeSend: function(){
                      console.log("Procesando....");
                  },
                  success: function(respuesta){
                      if(respuesta == 'success'){
                         // $('#modal_payment_ticket').modal('toggle');
                         
                          swal("¡Se ha guardado tu prueba correctamente!", "", "success").
                          then((value) => {
                              window.location.replace("/Vaccination/");
                          });
                      }
                      console.log(respuesta);
                  },
                  error:function (respuesta)
                  {
                      console.log(respuesta);
                  }
              });
          });

      });
</script>

html;

        $vacuna = VaccinationDao::getCount($_SESSION['utilerias_asistentes_id']);
        var_dump($_SESSION['usuario']);
        $tabla= '';
        $iframe_doc = '';
        $fechaActual = date('d-m-Y');

        foreach ($vacuna as $key => $value) {
            if($value['count'] >= 1){
                $vacunas = VaccinationDao::getByIdUser($_SESSION['utilerias_asistentes_id']);
                foreach ($vacunas as $key => $value) {

                    $tabla .=<<<html
                    <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="../../../assets/img/comprobante1.jpeg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <p class="text-gradient text-dark mb-2 text-sm text-center">Comprobante de Vacunación Cargado el {$value['fecha_carga_documento']}. Registró {$value['numero_dosis']} Dosis para su comprobante.</p>
                                    
html;
                    if ($value['validado'] == 1) {
                        $tabla .= <<<html
                        <h6 class="text-center">
                            Se ha Validado Correctamente su Comprobante de Vacunación.
                        </h6>
html;
                    } else  if ($value['validado'] == 0) {
                        $tabla .= <<<html
                        <h6 class="text-center">
                            Un Ejecutivo Está Validando su Comprobante de Vacunación.
                        </h6>
html;
                    
                    } 
                    
                    // if ($value['status'] == 0) {
                    //     $tabla .=<<<html
                    //     <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
                    //     <div class="card card-blog card-plain">
                    //         <div class="position-relative">
                    //             <a class="d-block shadow-xl border-radius-xl">
                    //                 <img src="../../../assets/img/comprobante1.jpeg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                    //             </a>
                    //         </div>
                    //         <div class="card-body px-1 pb-0">
                    //             <p class="text-gradient text-dark mb-2 text-sm text-center">Carga tu Comprobante de Vacunación lo Antes Posible</p>
                    //             <div class="text-center">
                    //                 <button type="button" class="btn btn-outline-success btn-sm mb-0 text-center" data-toggle="modal" data-target="#Modal_Vacunacion">Subir Comprobante de Vacunación</button>
                    //             </div>
    
                    //         </div>
                    //     </div>
//                     // </div>
// html;
//                     }

                    $tabla .= <<<html
                                   
                                    
                                </div>
                                <br>
                                <div class="text-center">
                                    <div class="d-flex flex-column justify-content-center" style="text-transform: capitalize;">
                                    <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#ver-documento-{$prueba['id_prueba_covid']}">
                                        Ver documento
                                    </button>
                                    </div>
                                </div>
                            </div>
                        </div>
html;

            $iframe_doc .= <<<html
                <div class="modal fade" id="ver-documento-{$value['id_prueba_covid']}" tabindex="-1" role="dialog" aria-labelledby="ver-documento-{$prueba['id_prueba_covid']}" aria-hidden="true">
                    <div class="modal-dialog" role="document" style="max-width: 590px;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Documento Comprobante de Vacunación</h5>
                                <span type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                                    X
                                </span>
                            </div>
                            <div class="modal-body">
                            <iframe src="/comprobante_vacunacion/{$value['documento']}" style="width:100%; height:700px;" frameborder="0" >
                            </iframe>
                        </div>
                        </div>
                    </div>
                </div>
html;
            }

        }else{
                $tabla =<<<html
                <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
                    <div class="card card-blog card-plain">
                        <div class="position-relative">
                            <a class="d-block shadow-xl border-radius-xl">
                                <img src="../../../assets/img/comprobante1.jpeg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                            </a>
                        </div>
                        <div class="card-body px-1 pb-0">
                            <p class="text-gradient text-dark mb-2 text-sm text-center">Cargue su comprobante de vacunación lo antes posible</p>
                            <div class="text-center">
                                <button type="button" class="btn btn-outline-success btn-sm mb-0 text-center" data-toggle="modal" data-target="#Modal_Vacunacion">Subir Comprobante de Vacunación</button>
                            </div>

                        </div>
                    </div>
                </div>
html;
            }
        }

        
        $boton_doc ='';

        $boton_doc .= <<<html

          
html;

        View::set('iframe_doc',$iframe_doc);
        View::set('tabla',$tabla);
        View::set('boton_doc',$boton_doc);
        View::set('fechaActual',$fechaActual);
        View::set('header',$this->_contenedor->header($extraHeader));
        View::set('footer',$extraFooter);
        View::render("proof_vacination_all");
    }

    public function uploadComprobante(){

        $documento = new \stdClass();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $marca_ = '';
            $usuario = $_POST["user_"];
            $numero_dosis = $_POST['numero_dosis'];
            foreach($_POST['checkbox_marcas'] as $selected){
                $marca_ = $selected."/ ";
            }
            $marca = $marca_;
            $file = $_FILES["file_"];

            $pdf = $this->generateRandomString();

            move_uploaded_file($file["tmp_name"], "comprobante_vacunacion/".$pdf.'.pdf');

            $documento->_url = $pdf.'.pdf';
            $documento->_user = $usuario;
            $documento->_numero_dosis = $numero_dosis;
            $documento->_marca_dosis = $marca;

            $id = VaccinationDao::insert($documento);

            if ($id) {
                echo 'success';

            } else {
                echo 'fail';
            }
        } else {
            echo 'fail REQUEST';
        }
    }

    function generateRandomString($length = 10) {
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }

}