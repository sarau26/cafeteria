<?php

class categoriaController{
    private $model;

    public function __construct()
    {
        require_once("c://xampp/htdocs/prueba_tecnica/Models/categoriaModel.php");
        $this->model = new categoriaModel();
    }


    public function guardar($nombre){
        $existe = $this->model->buscar_categoria($nombre);
        if ($existe) {
            echo "<script>alert('Esta categoria ya existe');</script>";
            exit;
        }
        $id = $this->model->insertar($nombre);
        return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create_categorias.php");
    }

    public function show($id){
        return ($this->model->buscar_categoria($id) != false)  ? $this->model->buscar_categoria($id) : header("Location:index.php");

    }

    public function index_categoria(){
        return ($this->model->index() != false)  ? $this->model->index() : false;
    }

    public function productos($nombre){
        return ($this->model->buscar_categoria2($nombre) != false)  ? $this->model->buscar_categoria2($nombre) : false;
    }






}

?>