<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\MasterDom;
use \App\controllers\Contenedor;
use App\models\General;
use \Core\Controller;

class Passes extends Controller{

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
    <script src="../../assets/js/core/popper.min.js"></script>
    <script src="../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <!-- Kanban scripts -->
    <script src="../../assets/js/plugins/dragula/dragula.min.js"></script>
    <script src="../../assets/js/plugins/jkanban/jkanban.js"></script>
    <script src="../../assets/js/plugins/chartjs.min.js"></script>
    <script src="../../assets/js/plugins/fullcalendar.min.js"></script>
    <script>
        var ctx1 = document.getElementById("chart-line-1").getContext("2d");
    
        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);
    
        gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.02)');
        gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors
    
        var ctx2 = document.getElementById("chart-line-2").getContext("2d");
    
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>
html;

        $pase_llegada = General::getPaseLlegada($_SESSION['utilerias_asistentes_id']);
        $pase_salida = General::getPaseSalida($_SESSION['utilerias_asistentes_id']);

        if ($pase_salida) {
            $modal = <<<html
            <span class="font-weight-bold text-xl" style="color: #01a31c"> Disponible para Descarga</span>
            <span class="text-xs">Asegurate de descargar tu boleto antes de abordar, ya esta disponible.</span>
html;
            
            $btn_salida = <<<html
            <div class="d-flex">
                <button class="btn btn-success btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto" data-toggle="modal" data-target="#ver-pase-salida"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
            </div>
html;
        } else {
            $modal = <<<html
            <span class="font-weight-bold text-xl" style="color: #940e0e">Aún NO Disponible para Descarga</span>
            <span class="text-xs">Asegurate de descargar tu boleto antes de abordar una vez que se encuentre disponible.</span>
html;
            $btn_salida = '';
        }

        $nombre_completo = General::getUserByUAId($_SESSION['utilerias_asistentes_id'])['nombre_completo'];
        
        View::set('pase_llegada',$pase_llegada);
        View::set('pase_salida',$pase_salida);
        View::set('modal',$modal);
        View::set('nombre_completo',$nombre_completo);
        View::set('btn_salida',$btn_salida);
        View::set('header',$this->_contenedor->header($extraHeader));
        View::set('footer',$this->_contenedor->footer($extraFooter));

        if ($pase_llegada) {
            View::render("passes_all");
        } else {
            View::render("passes_work");
        }
    }
}
