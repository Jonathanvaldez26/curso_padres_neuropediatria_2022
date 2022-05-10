<?php
namespace App\controllers;

use \Core\View;
use \Core\MasterDom;
use \App\controllers\Contenedor;
use \Core\Controller;
use \App\models\Covid AS CovidDao;

class Covid extends Controller{

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

          $("#form_prueba_covid").on("submit",function(event){
              event.preventDefault();
              
                  var formData = new FormData(document.getElementById("form_prueba_covid"));
                  console.log(formData);
                  $.ajax({
                      url:"/Covid/uploadPrueba",
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
                         
                          swal("¡Se ha guardado tu la prueba correctamente!", "", "success").
                          then((value) => {
                              window.location.replace("/Covid/");
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

    $pruebas = CovidDao::getByIdUser($_SESSION['utilerias_asistentes_id']);
    $tabla = '';
    $iframe_doc = '';
    $status = '';
    $fechaActual = date('d-m-Y');

    // $date = strtotime(date("Y-m-d"));

    $first = strtotime('-7 days');

    $fecha_7d = date('Y-m-d', $first);
    $fecha_hoy = date('Y-m-d');

    foreach ($pruebas as $key => $prueba) {
      if($prueba['status'] = 1){
        $status =<<<html
        <span class="badge badge-sm badge-secondary">En Espera de Validación</span>
        
html;
      }elseif ($prueba['status'] = 2)
      {
          $status =<<<html
          <span class="badge badge-sm badge-success">Se valido Correctamente</span>   
html;
      }

      $tabla.=<<<html
      <tr>
        <td>
          <div class="d-flex px-2 py-1">
            <div class="d-flex flex-column justify-content-center">
              <h6 class="mb-0 text-xs">Prueba SARS-CoV-2 Folio #{$prueba['id_prueba_covid']}</h6>
              <p class="text-xs text-secondary mb-0"> Cargada el día {$prueba['fecha_prueba_covid']}</p>
            </div>
          </div>
        </td>
        <td class="align-middle text-center text-sm">
          {$status}
        </td>
        <td>
          <div class="text-center">
            <div class="d-flex flex-column justify-content-center" style="text-transform: capitalize;"S>
              <h6 class="mb-0 text-xs">{$prueba['tipo_prueba']}</h6>
            </div>
          </div>
        </td>
        <td>
        <div class="text-center">
            <div class="d-flex flex-column justify-content-center" style="text-transform: capitalize;">
              <h6 class="mb-0 text-xs">{$prueba['resultado']}</h6>
            </div>
          </div>
        </td>
        <td>
          <div class="text-center">
            <div class="d-flex flex-column justify-content-center" style="text-transform: capitalize;">
              <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ver-documento-{$prueba['id_prueba_covid']}">
                Ver documento
              </button>
            </div>
          </div>
        </td>
      </tr>
html;


$iframe_doc .= <<<html
<div class="modal fade" id="ver-documento-{$prueba['id_prueba_covid']}" tabindex="-1" role="dialog" aria-labelledby="ver-documento-{$prueba['id_prueba_covid']}" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 590px;">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Documento Prueba SARS-CoV-2</h5>
              <span type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                  X
              </span>
          </div>
          <div class="modal-body">
          <iframe src="/pruebas_covid/{$prueba['documento']}" style="width:100%; height:700px;" frameborder="0" >
          </iframe>
       </div>
      </div>
  </div>
</div>
html;
    }

    View::set('iframe_doc',$iframe_doc);
    View::set('tabla',$tabla);
    View::set('fechaActual',$fechaActual);
    View::set('fecha_7d',$fecha_7d);
    View::set('fecha_hoy',$fecha_hoy);
    View::set('header',$this->_contenedor->header($extraHeader));
    View::set('footer',$extraFooter);
    View::render("covid_all");
  }

  public function uploadPrueba(){

      // $ticket = $_FILES["file_"];
    // $ticket_name = $_FILES["file_"]['name'];
    // $nota = $_POST['note_'];
    // echo $nota;
    // var_dump($ticket);
    // echo $ticket_name;

    $documento = new \stdClass();


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        $titulo = 'PruebaCovid';
        $fecha_prueba = $_POST['fecha_'];
        $tipo_prueba = $_POST['tipo_prueba_'];
        $resultado = $_POST['resultado_'];
        $file = $_FILES["file_"];
        $usuario = $_POST["user_"];
        $fecha = date("Y-m-d h:i:s");
        $pdf = $this->generateRandomString();
        $ruta = $usuario.$titulo.$fecha;



        // var_dump($fecha_prueba);
        // echo "<br>";
        // var_dump($tipo_prueba);
        // echo "<br>";
        // var_dump($resultado);
        // echo "<br>";
        // var_dump($file);
        // echo "<br>";
        // var_dump($usuario);
        // exit;

        move_uploaded_file($file["tmp_name"], "pruebas_covid/".$pdf.'.pdf');

        $documento->_url = $pdf.'.pdf';
        $documento->_user = $usuario;
        $documento->_fecha_prueba = $fecha_prueba;
        $documento->_tipo_prueba = $tipo_prueba;
        $documento->_resultado = $resultado;

        
        $id = CovidDao::insert($documento);

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