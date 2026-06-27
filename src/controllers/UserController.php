<?php
require_once __DIR__ . '/../models/UserModel.php';

class UserController {
    private $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    // Acción para listar usuarios
    public function index() {
        $users = $this->model->getAll();
        // Cargar la vista y pasarle los datos
        require_once __DIR__ . '/../views/users/index.php';
    }

    // Acción para mostrar formulario o guardar
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $this->model->create($nombre, $email);
            header('Location: index.php?action=index&success=1');
            exit;
        } else {
            // Mostrar formulario de creación
            require_once __DIR__ . '/../views/users/create.php';
        }
    }

    public function edit() {
        if (isset($_GET['id'])) {
            $user = $this->model->getById($_GET['id']);
            var_dump($user);
        } else {
            echo "ID no proporcionado";
        }
    }
    
    // RETO: Acción para eliminar
    public function delete() {
        if (isset($_GET['id'])) {
            $this->model->delete($_GET['id']);
            header('Location: index.php?action=index');
            exit;
        }
    }
}
?>