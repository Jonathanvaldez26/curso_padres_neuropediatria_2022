<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\Controller;
use \App\models\TrabajosLibres AS TrabajosLibresDao;

class TrabajosLibres extends Controller{

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
      <link id="pagestyle" href="/assets/css/style.css" rel="stylesheet" />
      <title>
            Home - AMETD
      </title>
html;

        $trabajos_libres = '';
        $card_trabajos_libres = '';
        
        $trabajos_libres =  TrabajosLibresDao::getTableTrabajosLibres($_SESSION['id_trabajo_libre']);

        foreach ($trabajos_libres as $key => $value) {
            

            $card_trabajos_libres .= <<<html
            
            
            <div class="col-12 col-md-3 text-center">
                <div class="card card-body card-course p-0 border-radius-15">
                <img class="caratula-img border-radius-15" src="/caratulas/{$value['caratula']}">
                        <div class="mt-2 color-vine font-16 text-bold"><p><b>{$value['nombre']}</b></p></div>
                        <div class="color-vine font-14"><p>{$value['descripcion']}</p></div>
                        <div class="color-vine font-12"><p>{$value['nombre_participante']}</p></div>
                        <span id="video_{$value['clave']}" data-clave="{$value['clave']}" class="fas fa-heart heart-like p-2"></span>
                </div>
            </div>
html;
        }

        


        View::set('header',$this->_contenedor->header($extraHeader));
        //View::set('permisos_mexico',$permisos_mexico);
        //View::set('tabla',$tabla);
         View::set('card_trabajos_libres',$card_trabajos_libres);
        View::render("trabajoslibres");
    }

}
