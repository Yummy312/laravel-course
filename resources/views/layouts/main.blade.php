<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <nav>
            <ul>
                <li>
                    <a href="{{ route( 'post.index')}}">posts</a>
                </li>
                <li>
                    <a href="{{ route('about.index')}}">about</a>
                </li>
                  <li>
                    <a href="{{ route('contact.index')}}">contacts</a>
                </li>
            </ul>
        </nav>
    </div>

    @yield('content')

</body>
</html>