<!DOCTYPE html>
<html lang="es" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title> @yield('page_title') </title>
  <!-- Styles -->
  @include('Layouts.Frontend.styles')
 </head>
 <body class="@yield('body_class')">
  @yield('content')
  @include('Layouts.Frontend.scripts')
  @yield('page_scripts')
 </body>
</html>
