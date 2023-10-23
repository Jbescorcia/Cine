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
        $sql = "INSERT INTO administrador (nombre, username, password, correo) " .
            "VALUES ('$nombre', '$username', '$password', '$correo')";
        $result = $this->link->query($sql);
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
