<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome to Movie Review App</title>
    </head>
    <body>
        <div>
            @yield('content')
        </div>
        
        <div>
            @section('advertisement')
                <p>
                    *** AD ***
                </p>
            @show
            
            {{-- @show equivalent of @endsection @yield('advertisement') --}}
            

        </div>
    </body>
</html>