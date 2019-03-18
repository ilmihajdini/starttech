<!doctype html>
<html lang="en">
@include('partials._head')
  <body>
    @include('partials._nav')
      <div class="container">     <!-- Start of Container -->

        @include('partials._messages')

        @yield('content')
        @include('partials._footer')
      </div> <!-- End of Container -->  
    @include('partials._javascripts')
    @yield('scripts')
  </body>
</html>  