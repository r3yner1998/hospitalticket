@extends('layouts/contentNavbarLayout')

@section('title', '')

@section('content')

<div class="card">
   <div class="card-body">
      <a href="ejemplo/nuevo" type="button" class="btn btn-primary my-3">
         <span class="icon-base bx bx-plus me-1"></span>
         Nuevo
      </a>

      <div class="table-responsive">
         <table class="table mb-0 table-bordered">
            <thead class="">
               <tr>
                  <th>id</th>
                  <th>descripcion</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($data as $row)
                  <tr>
                     <td>{{$row->id_departamento}}</td>
                     <td>{{$row->descripcion}}</td>
                  </tr>
               @endforeach
            </tbody>
         </table>
      </div>
      
   </div>

</div>

@endsection