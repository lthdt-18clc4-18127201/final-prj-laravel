@php
    $token = isset($_COOKIE['19CLC_Project_Token']) ? $_COOKIE['19CLC_Project_Token'] : null;
    $isLoggedin = false;
    
    if ($token) {
        $tokenData = json_decode(base64_decode($token), true);
        if ($tokenData && isset($tokenData['exp']) && $tokenData['exp'] > time()) {
            $isLoggedin = true;
        }
    }
@endphp

<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            margin: 0;
        }

        header {
            background-color: #888;
            display: flex;
            justify-content: flex-end;
            padding: 10px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline-block;
            margin-left: 10px;
        }

        nav ul li:first-child {
            margin-left: 0;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                @if ($isLoggedin)
                    <li><a href="#">Account</a></li>
                @else
                    <li><a href="{{ route('log-in.form') }}">Log in</a></li>
                    <li><a href="{{ route('sign-up.form') }}">Sign up</a></li>
                @endif
            </ul>
        </nav>
    </header>
</body>

</html>
