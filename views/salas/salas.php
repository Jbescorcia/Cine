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
        $sqlCheck = "SELECT COUNT(*) FROM sala WHERE codigo = '$codigo'";
        $resultValido = $this->link->query($sqlCheck);
        $count = $resultValido->fetch_row()[0];

        if ($count > 0) {
            echo "<script>alert('Ya existe un registro con el código proporcionado.');</script>";
        } else {
            $sql = "INSERT INTO sala (nombre, codigo, capacidad) " .
                "VALUES ('$nombre', '$codigo', '$capacidad')";
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
        $countFuncion = $resultFuncion ? $resultFuncion->fetch_row()[0] : 0;

        if ($countFuncion > 0) {
            echo "<script>alert('No puedes eliminar esta sala hasta que elimines las funciones relacionadas a ella.');</script>";
        } else {
            $sql = "DELETE FROM sala WHERE capacidad = '$capacidad' AND codigo = '$codigoSala'";
            $result = $this->link->query($sql);

            if ($result) {
                echo "<script>alert('La Sala ha sido eliminada con éxito.');</script>";
            } else {
                echo "<script>alert('Error al eliminar la sala: " . $this->link->error . "');</script>";
            }
        }
    }
}
