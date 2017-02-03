<!DOCTYPE html>
<html lang="en">
    <head>

        @include('partials._head')

    </head>

    <body>

        @include('partials._nav')
    
        @yield('content')

        @include('partials._footer')

        @yield('stylesheets')
        @yield('scripts')

    </body>
</html>
