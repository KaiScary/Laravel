@extends ('layout')
@section('tablaF') 
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
                            </tr>
                    @endforeach
                                            
                        </tbody>
                    </table>
         
                     <form method="DELETE"  action="/delete">
                        
                        <button class="btn btn-primary" type="submit" value="enviar">Buscar</button>
                        
                    </form>
                    <!-- Fin Búsqueda -->
@endsection