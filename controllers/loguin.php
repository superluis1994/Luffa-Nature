<?php

 class loguin extends Controller{

    function __construct(){ 
        parent::__construct();
        $this->view->render("loguin/index");
    }
    // function registrarAlumno() {
    //     echo " Alumno creado";
    //     $this->model->insert();
    // }
 }

?>