@extends('layouts/blankLayout')

@section('title', 'Login Basic - Pages')

@section('page-style')
@vite([
'resources/assets/vendor/scss/pages/page-auth.scss'
])
@endsection

@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register -->
      <div class="card px-sm-6 px-0">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="{{ url('/') }}" class="app-brand-link gap-2">
              <img src="{{ asset('../../../../../assets\img/illustrations/Logo.png') }}" alt="Logo" style="height: 140px;">
              <span class="app-brand-text demo text-heading fw-bold">
              </span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-1">Bienvenido! 👋</h4>
          <p class="mb-6">Inicia sesión para comenzar.</p>

          <form id="formAuthentication" class="mb-6" action="{{url('/login')}}" method="POST">
            @csrf
            <div class="mb-6">
              <label for="email" class="form-label">Correo o Usuario</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese su Correo o Usuario" autofocus>
            </div>
            <div class="mb-6 form-password-toggle">
              <label class="form-label" for="password">Contraseña</label>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <div class="mb-8">
              <div class="d-flex justify-content-between mt-8">
                <div class="form-check mb-0 ms-2">
                  <input class="form-check-input" type="checkbox" id="remember-me">
                  <label class="form-check-label" for="remember-me">
                    Recuerdame
                  </label>
                </div>
                <a href="{{url('auth/forgot-password-basic')}}">
                  <span>¿Olvidaste Contraseña?</span>
                </a>
              </div>
            </div>
            <div class="mb-6">
              <button class="btn btn-primary d-grid w-100" type="submit">Iniciar Sesión</button>
            </div>
          </form>

          @if($errors->isNotEmpty())
              <div class="alert alert-danger mt-3" role="alert">
                  {{$errors->first()}}
              </div>
          @endif

          <p class="text-center">
            <span>¿No tienes cuenta?</span>
            <a href="{{url('auth/register-basic')}}">
              <span>Registrate</span>
            </a>
          </p>
        </div>
      </div>
    </div>
    <!-- /Register -->
  </div>
</div>
@endsection