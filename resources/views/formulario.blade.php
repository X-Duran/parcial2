<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FORMULARIO</title>
  </head>
  <body>
    <h2>RELLENAR LOS SIGUIENTE CAMPOS</h2>
    <form method="post" action= "{{ route('formulario') }}">
      @csrf
      <input type="text"  name="nombre" required><br>
      <br>
      <input type="text"  name="apellido"><br>
      <br>
      <input type="number"  name="cedula" required><br>
      <br>
      <input type="date"  name="fechaNacimiento">
      <br>
      <input type="password"   name="contraseña" required>
      <br>
      <button >Enviar </button>
    </form>

  </body>
</html>
