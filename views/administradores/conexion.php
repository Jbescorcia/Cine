<?php
class conexion{
	private $link;
	
	public function conectar(){
		$this->link = new mysqli('dbcine-do-user-14505311-0.c.db.ondigitalocean.com:25060', 'doadmin', 'AVNS_JXiAmIgJkPoF5o8wprM', 'cine');
		if ($this->link->connect_errno) {
			echo "Falló la conexión a MySQL: (" . $this->link->connect_errno . ") " . $this->link->connect_error;
		}
		return $this->link;
	}

	public function desconectar(){
		mysqli_close($this->link);
	}
	
}
	


?>
