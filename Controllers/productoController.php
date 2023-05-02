<?php


class productoController{
    private $model;

    public function __construct()
    {
        require_once("c://xampp/htdocs/prueba_tecnica/Models/productoModel.php");
        $this->model = new productoModel();
    }

    public function guardar($nombre,$referencia,$precio,$peso,$categoria,$stock,$fecha){
        $id = $this->model->insertar($nombre,$referencia,$precio,$peso,$categoria,$stock,$fecha);
        return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");

    }
    public function show($id){
        return ($this->model->show($id) != false)  ? $this->model->show($id) : header("Location:index.php");

    }


    public function index(){
        return ($this->model->index() != false)  ? $this->model->index() : false;
    }

    public function update($id, $nombre,$referencia,$precio,$peso,$categoria,$stock,$fecha){
        return ($this->model->update($id, $nombre,$referencia,$precio,$peso,$categoria,$stock,$fecha) != false)  ? header("Location:show.php?id=".$id) : header("Location:index.php");
    }


    public function delete($id){
        return ($this->model->delete($id) != false)  ? header("Location:index.php") : header("Location:show.php?id=".$id);
    }

    public function stock($id, $cantidad ){
        return ($this->model->stock($id, $cantidad) != false)  ? header("Location:index.php") : header("Location:show.php?id=".$id);
    }

    public function guardar_venta($id,$nombre,$cantidad,$precio){
        $id = $this->model->insertar_venta($id,$nombre,$cantidad,$precio);
        return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
    }


    public function vender($idProducto,$cantidad){
        $producto = $this->model->buscar($idProducto);
        if ($producto != false) {
            $cantidadActual = $producto['Stock'];
            if ($cantidad <= $cantidadActual) {
                $this->model->stock($idProducto, $cantidad);
                $id = $this->model->insertar_venta($idProducto,$cantidad);
                echo "<script>alert('Venta realizada con éxito.');</script>";
                return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");

            } else {
                echo "<script>alert('La cantidad deseada no está disponible en el stock.');</script>";
                
            }
        } else {
            echo "<script>alert('El producto no existe en la base de datos.');</script>";
        }
    }
}

?>