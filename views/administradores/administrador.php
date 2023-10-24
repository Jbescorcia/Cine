<?php

class administrador
{
    private $link;
    function __construct($link)
    {
        $this->link = $link;
    }
    public function create($nombre, $username, $password, $correo)
    {
        $sqlCheck = "SELECT COUNT(*) FROM administrador WHERE username = '$username'";
        $resultValido = $this->link->query($sqlCheck);
        $count = $resultValido->fetch_row()[0];

        if ($count > 0) {
            echo "<script>alert('Ya existe un registro con el Username proporcionado.');</script>";
        } else {
            $sql = "INSERT INTO administrador (nombre, username, password, correo) " .
            "VALUES ('$nombre', '$username', '$password', '$correo')";
            $result = $this->link->query($sql);

            if ($result) {
                echo "<script>alert('Registro insertado con éxito.');</script>";
            } else {
                echo "<script>alert('Error al insertar el registro: " . $this->link->error . "');</script>";
            }
        }
    }
    public function listar()
    {
        $sql = 'SELECT * FROM administrador';
        $result = $this->link->query($sql);
        $arr = array();
        while ($fil = $result->fetch_assoc()) $arr[] = $fil;
        return ($arr);
    }

    public function delete($correo)
    {
        $sql = "DELETE FROM administrador WHERE correo = '$correo'";
        $result = $this->link->query($sql);
    }
}
