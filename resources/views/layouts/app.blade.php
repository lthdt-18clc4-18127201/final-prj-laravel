<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>@yield('title') - Your App Name</title> --}}

    <!-- Include your CSS and other head elements here -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script src="{{ asset('js/home/home.js') }}"></script>
    <title>Homepage</title>
</head>

<body>
    {{-- header --}}
    @include('layouts.header')
    {{-- header --}}

    {{-- content --}}
    <div class="">
        @yield('content')
    </div>
    {{-- content --}}

    {{-- footer --}}
    @include('layouts.footer')
    {{-- footer --}}

    <!-- start create account -->
    <div class="create-account">
        <a href="/sign-up" class="btn btn-create" tabindex="-1" role="button" aria-disabled="true">Start Create
            An Account</a>
    </div>
    <!-- end create account -->

    <!-- Include your JavaScript at the bottom of the body -->
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
</body>

</html>
