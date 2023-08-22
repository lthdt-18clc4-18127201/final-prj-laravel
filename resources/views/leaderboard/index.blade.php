<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <title>Leaderboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .logo {
            margin-right: 10px;
        }

        h1 {
            margin: 0;
            font-size: 24px;
            text-align: center;
            /* Center align the heading */
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <div class="header">
        <header>
            <nav id="navbar">
                <ul class="nav-links" style="margin-bottom: 0">
                    <!-- home -->
                    <li class="nav-item"><a class="nav-link" href="/">
                            <div class="logo"></div>
                        </a></li>
                    <!-- trends -->
                    <li class="nav-item"><a class="nav-link" href="#trends">Xu hướng tại Careerly</a></li>
                    <!-- Q&A -->
                    <li class="nav-item"><a class="nav-link active" href="#q&a">Q&A lập trình viên</a></li>
                </ul>

                <ul class="nav-links" style="margin-bottom: 0">
                    <!-- search -->
                    <li class="nav-item">
                        <button class="search-btn" type="button" value="Show search div" onclick="toggleSearch()" />
                    </li>

                    <!-- account -->
                    <li class="nav-item">
                        <button class="acc-menu-btn" type="button" value="Show account menu div"
                            onclick="toggleAccMenu()" />
                    </li>
                </ul>
            </nav>

            <!-- toggle search box -->
            <div id="search-div" style="display:none;">
                <div class="search-box">
                    <div class="search-btn"></div>
                    <form action="{{ route('users.search') }}" method="GET">
                        <input name="query" type="text" class="text search-input"
                            placeholder="Type here to search..." />
                    </form>
                </div>
                <div id="collapse-search-div"></div>
            </div>

            <!-- toggle account menu box -->
            <div id="acc-menu-div" style="display:none;">
                {{-- @if ($isLoggedin)
                    <div class="box"><a href="{{ route('log-in.form') }}">Đăng nhập</a></div>
                    <div class="box"><a href="{{ route('sign-up.form') }}">Đăng ký thành viên</a></div>
                    <div class="box">Hỗ trợ khách hàng</div>
                    <div id="collapse-account-menu-div">collapse menu account</div>
                @else
                    <div class="box"><a href="#">Tài khoản</a></div>
                    <div class="box"><a href="#" onclick="logoutAndRedirect()">Đăng xuất</a></div>
                    <div class="box">Hỗ trợ khách hàng</div>
                    <div id="collapse-account-menu-div">collapse menu account</div>
                @endif --}}
            </div>
        </header>

        <!-- dummy box -->
        <div style="height: 60px;"></div>

    </div>

    <h1>Leaderboard</h1>

    <div></div> <!-- Add an empty div for spacing on the right -->
    </div>
    <table>
        <thead>
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Follower</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $user)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user['Nickname'] }}</td>
                    <td>{{ $user['Follower'] }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>

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
</body>

</html>
