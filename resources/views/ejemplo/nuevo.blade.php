@extends('layouts/contentNavbarLayout')

@section('title', '')

@section('content')

<div class="card col-6">
   <div class="card-header">
      Ejemplo
   </div>
   <div class="card-body">
      <form action="{{url('ejemplo/registrar')}}" method="POST">
         @csrf
         <div class="mb-4">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" />
         </div>
         <div class="mb-4">
            <label for="exampleFormControlReadOnlyInput1" class="form-label">Otro dato</label>
            <input class="form-control" type="text" name="otro" id="exampleFormControlReadOnlyInput1" />
         </div>

         <button class="btn btn-primary d-grid w-100" type="submit">Registrar</button>
      </form>

      @if($errors->isNotEmpty())
         <div class="alert alert-danger mt-3" role="alert">
            {{$errors->first()}}
         </div>
      @endif

   </div>
</div>

@endsection