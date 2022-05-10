<?php
namespace App\controllers;

use App\models\General;
use \Core\View;
use \Core\Controller;
use \App\models\Transmision AS TransmisionDao;
use \App\models\Data AS DataDao;

class Transmission extends Controller{

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
    <!--footer class="footer pt-0">
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
          </footer--    >
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
                      url:"/Transmision/uploadComprobante",
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
                              window.location.replace("/Transmision/");
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
        $transmision_1 = TransmisionDao::getTransmisionById(1);
        $transmision_2 = TransmisionDao::getTransmisionById(2);

        $secs_t1 = TransmisionDao::getProgrsoTransmision($_SESSION['id_registrado'],$transmision_1['id_transmision']);
        $secs_t2 = TransmisionDao::getProgrsoTransmision($_SESSION['id_registrado'],$transmision_2['id_transmision']);

        if ($secs_t1) {
            $secs_t1 = TransmisionDao::getProgrsoTransmision($_SESSION['id_registrado'],$transmision_1['id_transmision']);
        } else {
            TransmisionDao::insertProgreso($_SESSION['id_registrado'],$transmision_1['id_transmision']);
            $secs_t1 = TransmisionDao::getProgrsoTransmision($_SESSION['id_registrado'],$transmision_1['id_transmision']);
        }

        if ($secs_t2) {
            $secs_t2 = TransmisionDao::getProgrsoTransmision($_SESSION['id_registrado'],$transmision_2['id_transmision']);
        } else {
            TransmisionDao::insertProgreso($_SESSION['id_registrado'],$transmision_2['id_transmision']);
            $secs_t2 = TransmisionDao::getProgrsoTransmision($_SESSION['id_registrado'],$transmision_2['id_transmision']);
        }

        $info_user = DataDao::getInfoUserById($_SESSION['id_registrado']);

        View::set('transmision_1',$transmision_1);
        View::set('transmision_2',$transmision_2);
        View::set('secs_t1',$secs_t1);
        View::set('secs_t2',$secs_t2);
        View::set('info_user',$info_user);
        View::set('header',$this->_contenedor->header($extraHeader));
        View::set('footer',$extraFooter);
        View::render("transmission");
    }

    public function updateProgress(){
        $progreso = $_POST['segundos'];
        $transmision = $_POST['transmision'];

        TransmisionDao::updateProgreso($transmision, $_SESSION['id_registrado'],$progreso);

        echo $progreso.' ID_Tr: '.$transmision;
    }

    public function updateProgressWithDate(){
        $progreso = $_POST['segundos'];
        $transmision = $_POST['transmision'];

        TransmisionDao::updateProgresoFecha($transmision, $_SESSION['id_registrado'],$progreso);

        echo $progreso.' ID_Tr: '.$transmision;
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

            $id = TransmisionDao::insert($documento);

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