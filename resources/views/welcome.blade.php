@extends ('layout')
@section('correo')  
    

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
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>jacob</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>

                            @isset($numero)
                            <tr>
                            <th scope="row">{{$numero}}</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            @endisset
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
                        </tbody>
                    </table>
                </div>
@endsection
