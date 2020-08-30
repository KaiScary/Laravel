<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyecto Laravel</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Laravel</h1>
                <p class="lead">Esta es una demostración del uso de Laravel implementando un formulario de Bootstrap.</p>
                <hr class="my-4">
                <div class="container">
                    <form>
=======
@extends ('layout')
@section('correo')  
                    <!-- Búsqueda -->
                    <form method="GET"  action="/firebase">
                        <h1>Buscar registro</h1>
                        <div class="form-group">
                        <label for="find">Email address</label>
                        <input type="text" name="id" value="2" id="find" class="form-control">
                        </div>
                        <button class="btn btn-primary" type="submit" value="enviar">Buscar</button>
                        
                    </form>
          
                    <hr class="my-4">
                    <!-- Controlador -->
                    <h1> Controlador </h1>
                    <form method="POST"  action="/inicio">
                        @csrf
>>>>>>> Stashed changes
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
<<<<<<< Updated upstream
=======
                    <!-- Fin Controlador -->
                    <hr class="my-4">
                    <h1> Firebase </h1>
                    <form method="POST"  action="/firebase">
                        @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="correo">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="contraseña">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <br>
                            <input type="submit" class="btn btn-success" value="Submit">
                            <button type="" class="btn btn-primary">Submit</button>
                    </form>
 
@endsection
@section('tabla')


                    <hr class="my-4">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Contraseña</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>jacob</td>
                            <td>Otto</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            </tr>
                            @isset($numero)
                            @isset($correo)
                            @isset($contraseña)
                            <tr>
                            <th scope="row">{{$numero}}</th>
                            <td>{{$correo}}</td>
                            <td>{{$contraseña}}</td>
                            <td>@twitter</td>
                            </tr>
                            @endisset
                            @endisset
                            @endisset
                        </tbody>
                    </table>
>>>>>>> Stashed changes
                </div>
            </div>
        </div>
        
            

        <!-- My scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
