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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - 19CLC</title>

    <!-- Include CSS and other head elements -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    {{-- CSS file --}}
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href=" @yield('css-path')">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    {{-- Logo icon --}}
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    {{-- The Awesome Icons --}}
    <script src="https://kit.fontawesome.com/40b6c50ca9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    {{-- header --}}
    @include('layouts.header')
    {{-- header --}}

    {{-- content --}}
    <div class="content" style="min-height: calc(100vh - 200px)">
        @yield('content')
    </div>
    {{-- content --}}

    {{-- footer --}}
    @include('layouts.footer')
    {{-- footer --}}

    <!-- start create account -->
    @if (!$isLoggedin)
        <div class="create-account">
            <a href="/sign-up" class="btn btn-create" tabindex="-1" role="button" aria-disabled="true">Start Create
                An Account</a>
        </div>
    @endif
    <!-- end create account -->

    <!-- Include JavaScript at the bottom of the body -->
    {{-- SEARCH BOX SCRIPT (NAVBAR) --}}
    <script>
        // toggling function
        function toggleSearch() {
            var x = document.getElementById("search-div");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        // toggling account menu
        function toggleAccMenu() {
            var x = document.getElementById("acc-menu-div");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        document.addEventListener("click", function handleClickOutsideBox(event) {
            // search
            const box1 = document.getElementById("collapse-search-div");
            if (box1.contains(event.target)) {
                document.getElementById("search-div").style.display = "none";
            }
            // account
            const box2 = document.getElementById("collapse-account-menu-div");
            if (box2.contains(event.target)) {
                document.getElementById("acc-menu-div").style.display = "none";
            }
        });
    </script>
    <script src="{{ asset('js/QnA.js') }}"></script>
    <script src="{{ asset('js/home/home.js') }}"></script>
    <script>
        // Get the current URL
        var currentUrl = window.location.pathname;
        console.log("Current URL:", currentUrl);

        // Get all navigation links
        var navLinks = document.querySelectorAll('.nav-link');

        // Loop through each navigation link
        for (var i = 0; i < navLinks.length; i++) {
            // Get the target URL from the href attribute
            var targetUrl = navLinks[i].getAttribute('href');

            // Print target URL for debugging
            console.log("Target URL:", targetUrl);

            // Check if the current URL matches the target URL
            if (currentUrl === targetUrl) {
                // Add the active class to the matching link
                navLinks[i].classList.add('active');
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
</body>

</html>
