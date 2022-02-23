<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Agregar Tarea</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{{route('tareas.store')}}}" method="POST">

        @csrf

        <label for="tarea">Nombre de la Tarea:</label><br>
        <input type="text" name="tarea" id="tarea" value="{{old('tarea')}}"><br>
        @error('tarea')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <br>
        <label for="descripcion">Descripción de la tarea</label><br>
        <textarea name="descripcion" id="descripcion" cols="25" rows="10">{{old('descripcion')}}</textarea><br>
        <label for="tipo">Categoria</label><br>
        @error('tarea')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <br>
        <select name="tipo" id="tipo">
            <option value="escuela">Escuela</option><br>
            <option value="trabajo">Trabajo</option><br>
            <option value="personal">Personal</option><br>
        </select><br><br>
        <input type="submit" value="Enviar"><br>
    </form>
</body>
</html>