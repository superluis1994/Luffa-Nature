<?php

class fallo extends Controller{

    function __construct() {
        parent::__construct();
        $this->view->mensaje ="Error inesperado";
        $this->view->render('error/index');
        // echo "<p> Error al cargar recurso</p>";
    }
}

?>