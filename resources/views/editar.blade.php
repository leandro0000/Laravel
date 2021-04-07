<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


     <form action="{{route('modificar' ,$editar->id)}}" method="POST">
         @method('put');
         @csrf
         <input type="text" placeholder="nombre" name="nombre" value="{{$editar->nombre}}" class="btn-block">
         <input type="text" placeholder="nombre" name="descripcion" value="{{$editar->descripcion}}" class="btn-block">
         <input type="submit" class="btn-danger">

     </form>



</body>
</html>
