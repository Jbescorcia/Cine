<?php

class sala
{
    private $link;
    function __construct($link)
    {
        $this->link = $link;
    }
    public function create($nombre, $codigo, $capacidad)
    {
        $sql = "INSERT INTO sala (nombre, codigo, capacidad) " .
            "VALUES ('$nombre', '$codigo', '$capacidad')";
        $result = $this->link->query($sql);
    }
    public function listar()
    {
        $sql = 'SELECT * FROM sala';
        $result = $this->link->query($sql);
        $arr = array();
        while ($fil = $result->fetch_assoc()) $arr[] = $fil;
        return ($arr);
    }

    
    public function delete($capacidad, $codigoSala)
    {
        $sqlFuncion = "SELECT COUNT(*) FROM funcion WHERE codigoSala = '$codigoSala'";
        $resultFuncion = $this->link->query($sqlFuncion);

        if ($resultFuncion) {
            $count = $resultFuncion->fetch_row()[0];

            if ($count > 0) {
                echo "<script>alert('No puedes eliminar esta sala hasta que elimines las funciones relacionadas a ella.');</script>";
            } else {
                $sql = "DELETE FROM sala WHERE capacidad = '$capacidad'";
                $result = $this->link->query($sql);
                echo "<script>alert('La Sala ha sido eliminada con éxito.');</script>";
            }
        } else {
            echo "<script>alert('Error al verificar funciones relacionadas.');</script>";
        }

        
    }
}
