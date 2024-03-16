<!DOCTYPE html>
<html lang="en">
<head>
    <title>GENEROS</title>
</head>
<body>
    <h2>GENEROS</h2>
    <h3>Aqui estan todos los generos de los libros</h3>
    <a href="/genders/create" class="button">Nuevo Género</a>

    <table>
        <tr class="titulo">
            <td>Nombre</td>
        </tr>
        
        @foreach ($genders as $gender )
        <tr>
            <td>{{$gender->name}}</td>
        </tr>
        @endforeach
    </table>
</body>
<style>
a.button {
  margin: 10px;
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  border: 2px solid #007bff;
  cursor: pointer;
  transition: background-color 0.3s ease, color 0.3s ease;
}

/* Estilo para el botón en estado 'hover' */
a.button:hover {
  background-color: #0056b3;
  border-color: #0056b3;
}
    /* Estilos para el body */
body {
  font-family: Arial, sans-serif; /* Tipo de fuente */
  margin: 0; /* Eliminar márgenes predeterminados */
  padding: 0; /* Eliminar espaciado interno predeterminado */
}

/* Estilos para las tablas */
table {
  width: 55%; /* Ancho de la tabla al 100% del contenedor */
  margin: auto;
  border-collapse: collapse; /* Colapso de bordes */
  background-color: #f888; /* Color de fondo de la tabla */
  filter: drop-shadow(8px 5px 10px purple);
}

/* Estilos para las filas de la tabla */
tr {
  background-color: #fff; /* Color de fondo de las filas */
}

.titulo{
    background-color: rgb(80, 126, 165);
    text-align: center;
    text-transform: uppercase;
    font-weight: bold;
}
/* Estilos para las celdas de encabezado de la tabla */
th {
  background-color: #333; /* Color de fondo de las celdas de encabezado */
  color: #fff; /* Color del texto */
  padding: 10px; /* Espaciado interno */
  border: 1px solid #ddd; /* Bordes */
}

/* Estilos para las celdas de datos de la tabla */
td {
  padding: 10px; /* Espaciado interno */
  border: 1px solid #ddd; /* Bordes */
}


/* Estilos para encabezados H2 */
h2 {
  color: #333; /* Color del texto */
  font-size: 24px; /* Tamaño de fuente */
}

/* Estilos para encabezados H3 */
h3 {
  color: #666; /* Color del texto */
  font-size: 20px; /* Tamaño de fuente */
}


</style>

</html>