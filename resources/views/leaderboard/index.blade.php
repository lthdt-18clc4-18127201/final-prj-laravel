<!DOCTYPE html>
<html>

<head>
    <title>Leaderboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* Add this to separate logo and text */
            padding: 20px;
            background-color: #f2f2f2;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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
                <ul class="nav-links">
                    <!-- home -->
                    <li class="nav-item"><a class="nav-link" href="/">
                            <div class="logo"></div>
                        </a></li>
                    <!-- trends -->
                    <li class="nav-item"><a class="nav-link" href="#trends">Xu hướng tại Careerly</a></li>
                    <!-- Q&A -->
                    <li class="nav-item"><a class="nav-link active" href="#q&a">Q&A lập trình viên</a></li>
                </ul>

                <ul class="nav-links">
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
                    {{-- <form action="{{ route('users.search') }}" method="GET">
                            <input name="query" type="text" class="text search-input" placeholder="Type here to search..." />
                        </form> --}}
                </div>
                <div id="collapse-search-div"></div>
            </div>

            <!-- toggle account menu box -->
            <div id="acc-menu-div" style="display:none;">
                <div class="box">Đăng nhập</div>
                <div class="box">Đăng ký thành viên</div>
                <div class="box">Hỗ trợ khách hàng</div>
                <div id="collapse-account-menu-div">collapse menu account</div>
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
</body>

</html>
