<?php

class funcion
{
    private $link;
    function __construct($link)
    {
        $this->link = $link;
    }
    public function create($codigo, $fecha, $codigoPelicula, $codigoSala)
    {
        $sql = "INSERT INTO funcion (codigo, fecha, codigoPelicula, codigoSala) " .
            "VALUES ('$codigo', '$fecha', '$codigoPelicula','$codigoSala')";
        $result = $this->link->query($sql);
    }
    public function listar()
    {
        $sql = 'SELECT * FROM funcion';
        $result = $this->link->query($sql);
        $arr = array();
        while ($fil = $result->fetch_assoc()) $arr[] = $fil;
        return ($arr);
    }
    public function listarCodigoPelicula()
    {
        $sql = 'SELECT codigo FROM pelicula';
        $result = $this->link->query($sql);
        $arr = array();
        while ($fil = $result->fetch_assoc()) $arr[] = $fil;
        return ($arr);
    }

    public function listarCodigoSala()
    {
        $sql = 'SELECT codigo FROM sala';
        $result = $this->link->query($sql);
        $arr = array();
        while ($fil = $result->fetch_assoc()) $arr[] = $fil;
        return ($arr);
    }

    public function delete($codigo)
    {
        $sql = "DELETE FROM funcion WHERE codigo = '$codigo'";
        $result = $this->link->query($sql);
    }
}
