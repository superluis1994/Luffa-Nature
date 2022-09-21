<?php

 class inicio extends Controller{

    function __construct(){ 
        parent::__construct();
        $this->view->render("inicio/index");
    }
    // function registrarAlumno() {
    //     echo " Alumno creado";
    //     $this->model->insert();
    // }
 }

?>