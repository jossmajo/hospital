@extends('doctores.layout')

@section('content')
     <h1 class="text-center">LISTA DE DOCTORES</h1>
     <hr>
<div class="container">

    <a id="navbarDropdown" class="nav-link dropdown-toggle float-right" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <i class= "fas fa-user"></i> <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    
     <a class="btn btn-primary mb-3" href="{{ route('doctores.create') }}">Crear Doctor</a>
     <a class="btn btn-primary mb-3 float-right" href="{{ url('doctores.show') }}">Imprimir</a>
  @if ($message = Session::get('success'))
      <div class="alert alert-success">
      <p>{{ $message }}</p>
      </div>
  @endif


     <table class="table table-striped">
  <thead class="table-primary">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Especialidad</th>
      <th scope="col">Teléfono</th>
      <th class="text-center" colspan="2" scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($doctores as $doctor)
    <tr>
      <th scope="row">{{$doctor->id}}</th>
      <td>{{$doctor->nombre}}</td>
      <td>{{$doctor->especialidad}}</td>
      <td>{{$doctor->telefono}}</td> 
      
      <td><a class="btn btn-info" href="{{ route('doctores.edit',$doctor->id) }}"><i class="far fa-edit"></i></a></td>
      <td><a class="btn btn-danger" data-toggle="modal" data-target="#confirmarBorrar-{{ $doctor->id }}"><i class="fas fa-trash-alt"></i></a>
    </td>
    </tr>
    @include('doctores.confirmarBorrar')
    @endforeach
  </tbody>
  </table>
  {{$doctores->links()}}
</div>

@endsection