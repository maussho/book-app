<!DOCTYPE html>
<html lang="es">
<head>
    <title>Crear Libros</title>
</head>
<body>
    <h2>Crear Libros</h2>
    <h3>Aqui se crearán todos los libros</h3>

    <form action="{{route('books.store')}}" method="post">
        @csrf
        <label for="">Título</label>
        <input type="text" name="title">

        <label for="">Subtítulo</label>
        <input type="text" name="subtitle">

        <label for="">Páginas</label>
        <input type="text" name="numberPage">

        <label for="">Idioma</label>
        <input type="text" name="language">

        <label for="">Descripción</label>
        <input type="text" name="description">

        <label for="">Estado</label>
        <input type="text" name="status">

        <label for="">Precio</label>
        <input type="text" name="price">

        <label for="">Genero</label>
        <select name="gender_id" id="gender_id">
            @foreach ($genders as $gender)
                <option value="{{ $gender->id }}">{{$gender->name}}</option>
            @endforeach
        </select>

        <label for="">Editorial</label>
        <select name="editorial_id" id="editorial_id">
            @foreach ($editorials as $editorial)
                <option value="{{ $editorial->id }}">{{$editorial->name}}</option>
            @endforeach
        </select>
        <input type="submit" value="GUARDAR LIBRO">
    </form>
</body>
</html>

<style>
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
input[type="password"], select{
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
