<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


     <div>

          <h1 class=" btn btn-primary">  agregar datos</h1>
          <h1 class=" btn btn-primary">  agregar datos</h1>

         <form action="{{route('enviar')}}" class="container" method="POST">
            @csrf

             <input type="text" placeholder="nombre" name="nombre" id="" class="form-control mt-2">
             <input type="text" placeholder="descripcion" name="descripcion" id="" class="form-control mt-2">
             <input type="submit" value="enviar" class="btn-sm btn-block mt-2  btn btn-danger ">

         </form>

          <a href="{{route('leandro')}}">cli</a>

     </div>

      <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
                <th scope="col">descripcion</th>

              </tr>
            </thead>
            <tbody>
                @foreach($notas as $item)


              <tr>
                <th scope="row">1</th>
                <td>{{$item->nombre}}</td>
                <td>{{$item->descripcion}}</td>
                <td>@mdo</td>
                <td><form action="{{route('eliminar' ,$item)}}" method="POST">
                    @method('DELETE');
                    @csrf
                    <button class="btn-danger btn-sm">eliminar</button>
                    <a href="{{route('editar',$item)}}" class="btn btn-danger btn-sm1">update</a>


                </form><td>

              </tr>
              @endforeach

            </tbody>
          </table>
      </div>

</body>
</html>
