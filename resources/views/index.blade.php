<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
@include('partials.header') 
@include('partials.sidebar')
<main id="main" class="main">
   @yield('content')
</main>

@include('partials.footer')
@include('partials.scripts')
</body>
</html>
