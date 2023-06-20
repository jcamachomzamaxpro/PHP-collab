<?php


class Productos extends Conectar {
    private $id;
    private $nombre;
    private $stock;
    private $precio;

    public function __construct($id=0, $nombre='', $stock=0, $precio=0) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->stock = $stock;
        $this->precio = $precio;
    }

    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function getNombre() {
        return $this->nombre;
    }
    
    public function setStock($stock) {
        $this->stock = $stock;
    }
    public function getStock() {
        return $this->stock;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }
    public function getPrecio() {
        return $this->precio;
    }


    public function get_producto(){
        $conectar = parent::conexion();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM productos");
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function get_producto_id($id){
        $conectar = parent::conexion();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM productos WHERE id=?");
        $stm -> bindvalue(1,$id);
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function insert_producto($nombre, $stock, $precio){
        $conectar=parent::conexion();
        parent::set_name();
        $stm="INSERT INTO productos(nombre,stock,precio) VALUES(?,?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$nombre);
        $stm->bindValue(2,$stock);
        $stm->bindValue(3,$precio);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

    public function delete_producto($id){
        $conectar=parent::conexion();
        parent::set_name();
        $stm= $conectar -> prepare("DELETE FROM productos WHERE id = ?");
        $stm->bindValue(1,$id);
        return $stm->execute();

    }

}

?>