<?php

class pelicula
{
    private $link;
    function __construct($link)
    {
        $this->link = $link;
    }
    public function create($nombre, $codigo, $clasificacion)
    {
        $sqlCheck = "SELECT COUNT(*) FROM pelicula WHERE codigo = '$codigo'";
        $resultValido = $this->link->query($sqlCheck);
        $count = $resultValido->fetch_row()[0];

        if ($count > 0) {
            echo "<script>alert('Ya existe un registro con el código proporcionado.');</script>";
        } else {
            $sql = "INSERT INTO pelicula (nombre, codigo, clasificacion) " .
                "VALUES ('$nombre', '$codigo', '$clasificacion')";
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
        $sql = 'SELECT * FROM pelicula';
        $result = $this->link->query($sql);
        $arr = array();
        while ($fil = $result->fetch_assoc()) $arr[] = $fil;
        return ($arr);
    }

    public function delete($clasificacion, $codigoPelicula)
    {
        $sqlFuncion = "SELECT COUNT(*) FROM funcion WHERE codigoPelicula = '$codigoPelicula'";
        $resultFuncion = $this->link->query($sqlFuncion);
        $countFuncion = $resultFuncion ? $resultFuncion->fetch_row()[0] : 0;

        if ($countFuncion > 0) {
            echo "<script>alert('No puedes eliminar esta pelicula hasta que elimines las funciones relacionadas a ella.');</script>";
        } else {
            $sql = "DELETE FROM pelicula WHERE clasificacion = '$clasificacion' AND codigo = '$codigoPelicula'";
            $result = $this->link->query($sql);

            if ($result) {
                echo "<script>alert('La pelicula ha sido eliminada con éxito.');</script>";
            } else {
                echo "<script>alert('Error al eliminar la sala: " . $this->link->error . "');</script>";
            }
        }
    }
}
