<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\MasterDom;
use \App\controllers\Contenedor;
use \Core\Controller;

class News extends Controller{

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

     <!-- Basic Page Needs
     ================================================== -->
     <meta charset="utf-8">
   
     <!-- Mobile Specific Metas
     ================================================== -->
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="description" content="Bootstrap App Landing Template">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
     <meta name="author" content="Themefisher">
     <meta name="generator" content="Themefisher Small Apps Template v1.0">
   
     <!-- Favicon -->
     <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
     
     <!-- PLUGINS CSS STYLE -->
     <link rel="stylesheet" href="../../assets_news/plugins/bootstrap/bootstrap.min.css">
     <link rel="stylesheet" href="../../assets_news/plugins/themify-icons/themify-icons.css">
     <link rel="stylesheet" href="../../assets_news/plugins/slick/slick.css">
     <link rel="stylesheet" href="../../assets_news/plugins/slick/slick-theme.css">
     <link rel="stylesheet" href="../../assets_news/plugins/fancybox/jquery.fancybox.min.css">
     <link rel="stylesheet" href="../../assets_news/plugins/aos/aos.css">
   
     <!-- CUSTOM CSS -->
     <link href="../../assets_news/css/style.css" rel="stylesheet">
html;
     $extraFooter =<<<html
     <!-- JAVASCRIPTS -->
     <script src="../../assets_news/plugins/jquery/jquery.min.js"></script>
     <script src="../../assets_news/plugins/bootstrap/bootstrap.min.js"></script>
     <script src="../../assets_news/plugins/slick/slick.min.js"></script>
     <script src="../../assets_news/plugins/fancybox/jquery.fancybox.min.js"></script>
     <script src="../../assets_news/plugins/syotimer/jquery.syotimer.min.js"></script>
     <script src="../../assets_news/plugins/aos/aos.js"></script>
     <!-- google map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
     <script src="../../assets_news/plugins/google-map/gmap.js"></script>
     
     <script src="js/script.js"></script>
html;
      View::set('header',$this->_contenedor->header($extraHeader));
      View::set('footer',$this->_contenedor->footer($extraFooter));
      View::render("work");
    }

}
