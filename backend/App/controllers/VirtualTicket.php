<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\MasterDom;
use \App\controllers\Contenedor;
use \Core\View;
use \Core\Controller;
use \App\models\Home AS HomeDao;
use \App\models\Covid AS CovidDao;

class VirtualTicket extends Controller{

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

      $qr = HomeDao::getQRById($_SESSION['utilerias_asistentes_id'])['ticket_virtual'];
      // var_dump($qr);
      $data = HomeDao::getQRById($_SESSION['utilerias_asistentes_id']);

      $nombre = $data['nombre'].' '.$data['segundo_nombre'];
      $apellidos = $data['apellido_paterno'].' '.$data['apellido_materno'];
      if ($qr == NULL || $qr == 'NULL') {
        $btn = 'Estamos generando tu ticket';
      } else {
        $btn =<<<html
        <button id="show_ticket" type="button" class="btn bg-gradient-info mb-0" title="Ver Ticket Virtual"><i class="fas fa-qrcode" style="font-size: xxx-large;"> </i> </button>    
html;
      }
      // var_dump($_SESSION['utilerias_asistentes_id']);
      // var_dump($qr);
      View::set('qr',$qr);
      View::set('nombre',$nombre);
      View::set('apellidos',$apellidos);
      View::set('btn',$btn);
      View::set('header',$this->_contenedor->header($extraHeader));
      View::set('footer',$this->_contenedor->footer($extraFooter));
      // 
      if ($qr == NULL || $qr == 'NULL' || $qr == '') {
        View::render("ticket_work");
		//View::render("virtual_ticket_all");
      } else {
        View::render("virtual_ticket_all");
      }
    }

}
