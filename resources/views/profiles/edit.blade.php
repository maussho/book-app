<!DOCTYPE html>
<html lang="es">
<head>
    <title>Perfiles</title>
</head>
<body>
    <h2>Perfiles</h2>
    <h3>Aqui se editaran los perfiles de autor</h3>
    <form action="{{route('profiles.update', $profile->id)}}" method="post">
        
        @csrf
        {{ method_field('PUT') }}
        <label for="">Biografía</label>
        <input type="text" name="biography" value="{{$profile->biography}}">

        <label for="">Sitio Web</label>
        <input type="text" name="website" value="{{$profile->website}}">

        <input type="submit" value="Guardar Perfil">

    </form>
</body>
</html>
<style>
    h2 {
  color: #333; /* Color del texto */
  font-size: 24px; /* Tamaño de fuente */
}

/* Estilos para encabezados H3 */
h3 {
  color: #666; /* Color del texto */
  font-size: 20px; /* Tamaño de fuente */
}
form{
    margin: 0 auto;
    width: 300px;
    justify-content: center;
    display: block;
}
/* Estilo para el contenedor del formulario */
.form-container {
  width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f9f9f9;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);

}

/* Estilo para los campos del formulario */
.form-group {
  margin-bottom: 20px;
}

/* Estilo para las etiquetas de los campos */
label {
  display: block;
  font-weight: bold;
  padding: 10px;
}

/* Estilo para los campos de entrada de texto */
input[type="text"],
input[type="email"],
input[type="password"] {
  width: calc(100% - 20px);
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

/* Estilo para el botón de enviar */
input[type="submit"] {
    width: 300px;
  padding: 10px;
  margin-top: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #0056b3;
  margin-top: 10px;
}

</style>