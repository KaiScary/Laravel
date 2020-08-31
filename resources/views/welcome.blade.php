@extends ('layout')
@section('correo')  
                    <!-- Búsqueda -->
                

                    <h1> Controlador </h1>
                    <div>
                    <form method="POST"  action="/inicio">
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
                       
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                    <!-- Fin Controlador -->
                    <hr class="my-4">
                    <h1> Firebase </h1>
                    <div>
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
                            
                    </form>
                    </div>
 
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
                            </tr>
                            @endisset
                            @endisset
                            @endisset
                        </tbody>
                    </table>
@endsection
