@extends('layout')
@section('editar')
<form method="post"  action="{{url('/firebase/'.$datos['correo'])}}">
	{{csrf_field()}}
   {{method_field('PATCH')}}
                        @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="correo" value="{{$datos['correo']}}">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="contraseña" value="{{$datos['contraseña']}}">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <br>
                            <input type="submit" class="btn btn-success" value="Submit">
                       
                    </form>
@endsection