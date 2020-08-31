@extends ('layout')
@section('tablaF') 
                            <form method="GET"  action="/firebase">
                        <h1>Buscar registro</h1>
                        <div class="form-group">
                        <label for="find">Correo:</label>
                        <input type="text" name="id" class="form-control">
                        </div>
                        <button class="btn btn-primary" type="submit" value="enviar">Buscar</button>
                        
                    </form>
                    <hr>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                            <th scope="col">Correo</th>
                            <th scope="col">Contraseña</th>
                         

                            </tr>
                        </thead>
                        <tbody>
                        @foreach($all_subjects as $as)
                            <tr> 
                            <td> {{$as['correo']}}</td>
                            <td> {{$as['contraseña']}}</td>
                            <td>
                                 <a href="{{url('/firebase/'.$as['correo'].'/edit')}}">
                                <button class="btn btn-primary" type="submit">Editar</button>
                        
                            </form>
                            </td>
                            <td>
                               <form method="post"  action="{{url('/firebase/'.$as['correo'])}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                                <button class="btn btn-primary" type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>
                        
                            </form> 
                            </td>
                            </tr>
                    @endforeach
                                            
                        </tbody>
                    </table>
         
                     
                    <!-- Fin Búsqueda -->
@endsection