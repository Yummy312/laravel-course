<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="row">

            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                   
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="{{ route( 'post.index')}}">Posts</a>
                        <a class="nav-link" href="{{ route('about.index')}}">About</a>
                        <a class="nav-link" href="{{ route('contact.index')}}">Contacts</a>
                        
                    </div>
                    </div>
                </div>
            </nav>
           
        </div>

        

        @yield('content')
    </div>

</body>
</html>