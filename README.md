<h1>INTEGRANTES</h1>
<ul>
  <li>Jesus Barrios</li>
  <li>Albeiro Álvarez</li>
  <li>Andres Torres</li>
  <li>Carlos Lopez</li>
</ul>

<h1>Enunciado del Proyecto</h1>
<p>Se requiere el desarrollo de un aplicativo para el manejo de las salas de cine de un almacén departamental. Para esto se deben crear los siguientes componentes:</p>

<h2>Administradores</h2>
<p>Debe existir un administrador precargado en la base de datos para realizar el primer ingreso.</p>
<ul>
  <li>Crear administrador con los siguientes campos:</li>
  <ul>
    <li>Nombre: texto.</li>
    <li>Username: debe ser único.</li>
    <li>Password: debe ser alfanumérico.</li>
    <li>Correo: con la convención de cualquier correo.</li>
  </ul>
  <li>Listar administradores.</li>
  <li>Login del sistema.</li>
</ul>

<h2>Sala</h2>
<p>Se debe crear con los siguientes campos:</p>
<ul>
  <li>Nombre: alfanumérico.</li>
  <li>Código: debe ser único y alfanumérico.</li>
  <li>Capacidad: numérico.</li>
</ul>

<h2>Película</h2>
<p>Se debe crear con los siguientes campos:</p>
<ul>
  <li>Nombre: alfanumérico.</li>
  <li>Código: alfa numérico.</li>
  <li>Clasificación: se deben seleccionar las siguientes clasificaciones:</li>
  <ul>
    <li>TP</li>
    <li>7</li>
    <li>12</li>
    <li>15</li>
    <li>18</li>
  </ul>
</ul>

<h2>Función</h2>
<p>Aquí se deben relacionar películas existentes con salas existentes:</p>
<ul>
  <li>Código de función.</li>
  <li>Fecha y hora.</li>
  <li>Código de película.</li>
  <li>Código de sala.</li>
</ul>

<h2>Módulos de Salas, Películas y Funciones</h2>
<p>Para esta entrega, solo deben tener las funcionalidades de creación y eliminación. Se deben seguir los siguientes requerimientos:</p>
<ul>
  <li>No se pueden eliminar salas y películas que tengan funciones asociadas.</li>
  <li>No se pueden crear funciones con salas o películas que no existan.</li>
</ul>

<p>Se debe entregar el código completo de la aplicación, los scripts de creación de la base de datos y las credenciales para poder revisar y poner en marcha el portal web. Si no se entrega alguno de estos elementos, la nota será de 1.0.</p>