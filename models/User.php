<?php

include 'Connection.php';

class User extends Connection{
    // Definimos los atributos del Usuario
    public $id;
    public $name;
    public $age;
    public $email;
    public $password;
    public $created_at;
    public $updated_at;

    // Registro de un nuevo usuario
    public function create(){
        $this->connect();
        $stmt = mysqli_prepare(
            $this->connection,
            "INSERT INTO users (name, age, email, password) VALUES (?, ?, ?, ?)"
        );
        $stmt->bind_param("siss", $this->name, $this->age, $this->email, $this->password);
        $stmt->execute();
        $stmt->close();
    }

    // Obtener todos los usuarios
    public function getAll(){
        $this->connect();
        $stmt = mysqli_prepare($this->connection, "SELECT * FROM users");
        $stmt->execute();
        $result = $stmt->get_result();
        // Lista de usuarios
        $users = array();

        // Recorremos el resultado y lo guardamos en un array
        while ($row = $result->fetch_assoc()) {
            array_push($users, $row);
        }
        return $users;
    }

    // Obtener un usuario por su id
    public function getFirst($id){
        $this->connect();
        $stmt = mysqli_prepare($this->connection, "SELECT * FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    // Actualizar un usuario
    public function update($id){
        $this->connect();
        $stmt = mysqli_prepare(
            $this->connection,
            "UPDATE users SET name = ?, age = ?, email = ?, password = ? WHERE id = ?"
        );
        $stmt->bind_param("sissi", $this->name, $this->age, $this->email, $this->password, $id);
        $stmt->execute();
        $stmt->close();
    }

    // Eliminar los posts asociados al usuario
public function deletePosts($userId){
    $this->connect(); 
    $stmt = mysqli_prepare($this->connection, "DELETE FROM posts WHERE user_id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $stmt->close();
}

// Eliminar el usuario
public function delete($id){
    // Primero, eliminar los posts asociados
    $this->deletePosts($id);
    
    // Luego, eliminar el usuario
    $this->connect();
    $stmt = mysqli_prepare($this->connection, "DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}
    }    


