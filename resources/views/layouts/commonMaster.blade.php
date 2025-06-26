<!DOCTYPE html>

<html class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="{{ asset('/assets') . '/' }}" data-base-url="{{url('/')}}" data-framework="laravel" data-template="vertical-menu-laravel-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>@yield('title') </title>
  <meta name="description" content="{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />
  <meta name="keywords" content="{{ config('variables.templateKeyword') ? config('variables.templateKeyword') : '' }}">
  <!-- laravel CRUD token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Canonical SEO -->
  <link rel="canonical" href="{{ config('variables.productPage') ? config('variables.productPage') : '' }}">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />


  <!-- Include Styles -->
  @include('layouts/sections/styles')

  <!-- Include Scripts for customizer, helper, analytics, config -->
  @include('layouts/sections/scriptsIncludes')
</head>

<body>


  <!-- Layout Content -->
  @yield('layoutContent')
  <!--/ Layout Content -->
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

            <form id="formAuthentication" class="mb-6" action="{{url('/')}}" method="GET">
              <div class="mb-6">
                <label for="email" class="form-label">Correo o Usuario</label>
                <input type="text" class="form-control" id="email" name="email-username" placeholder="Ingrese su Correo o Usuario" autofocus>
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
                <button class="btn btn-primary d-grid w-100" type="submit">Inisiar Sesión</button>
              </div>
            </form>

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



  <!-- Include Scripts -->
  @include('layouts/sections/scripts')

</body>

</html>