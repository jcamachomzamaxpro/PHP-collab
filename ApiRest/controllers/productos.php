<?php
require_once("../config/Conectar.php");
require_once("../models/Productos.php");

header('Content-Type: application/json');



$productos = new Productos();

$body = json_decode(file_get_contents("php://input"),true);

switch ($_GET['op']) {
    case 'GetAll':
        $datos=$productos->get_producto();
        echo json_encode($datos);
        break;
    case 'GetId':
        $datos = $productos->get_producto_id($body['id']);
        echo json_encode($datos);
        break;
    case 'insert':
        $datos = $productos->insert_producto($body['nombre'], $body['stock'], $body['precio']);
        echo json_encode("Insertado correctamente");
        break;
    case 'delete':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            
            // Se verifica que el cliente exista en la database
            $existingProducto = $productos->get_producto_id($id);
            if ($existingProducto) {
                $productos->delete_producto($id);
                echo json_encode(array("message" => "El producto fue eliminado exitosamente"));
                header("location: http://localhost/PHP-collab/AlquilaArtemis/productos");
            } else {
                echo json_encode(array("error" => "El producto no existe"));
            }
        };
        break;
    default:
        break;
}

?>