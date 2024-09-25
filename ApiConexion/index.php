<?php 
require("ConexionDB.php");
header('Content-Type: application/json');

class ApiProductos 
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function obtenerTodos()
    {
        $stmt = $this->pdo->prepare(query: "SELECT * FROM productos");
        $stmt -> execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function agregar($nuevoIdProducto, $nombreProducto, $imagenProducto, $precioProducto, $condicionProducto, $stockProducto, $nombreEmpresa, $descripcionProducto, $categoriaProducto, $habilitacionProducto)
    {
        $stmt = $pdo->prepare("INSERT INTO producto (id_producto, titulo, imagen, precio_base, condicion, stock, nombre_empresa, descripcion, categoria, habilitacion_Producto) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // Ejecutar la consulta
        if ($stmt->execute([$nuevoIdProducto, $nombreProducto, $imagenProducto, $precioProducto, $condicionProducto, $stockProducto, $nombreEmpresa, $descripcionProducto, $categoriaProducto, $habilitacionProducto])) {
            echo json_encode(['message' => 'Producto creado exitosamente']);
        } else {
            echo json_encode(['message' => 'Error al crear producto']);
        }
    }
}


//Configuracion de la base de datos
$host = 'localhost';
$dbname = 'productos_bd';
$username = 'root';
$password = '';

$conexionDB = new ConexionDB($host, $dbname, $username, $password);
$pdo = $conexionDB -> getPdo();