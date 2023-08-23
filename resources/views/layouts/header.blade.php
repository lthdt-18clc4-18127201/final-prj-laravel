<script>
    function logoutAndRedirect() {
        document.cookie = '19CLC_Project_Token=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        window.location.href = '/';
    }
</script>

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
                <button class="acc-menu-btn" type="button" value="Show account menu div" onclick="toggleAccMenu()" />
            </li>
        </ul>
    </nav>

    <style>
        .box-button {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 10px 20px;
            margin: 5px 0;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .box-button a {
            text-decoration: none;
            color: inherit;
        }

        .box-button:hover {
            background-color: #3498db;
            color: white;
        }

        #collapse-account-menu-div {
            background-color: #e74c3c;
            color: white;
            padding: 10px 20px;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        #collapse-account-menu-div:hover {
            background-color: #c0392b;
        }
    </style>



    <!-- toggle search box -->
    <div id="search-div" style="display:none;">
        <div class="search-box">
            <div class="search-btn"></div>
            <form action="{{ route('users.search') }}" method="GET">
                <input name="query" type="text" class="text search-input" placeholder="Type here to search..." />
            </form>
        </div>
        <div id="collapse-search-div"></div>
    </div>

    <!-- toggle account menu box -->
    <div id="acc-menu-div" style="display:none; position: absolute; top: 50px; right: 20px;">
        @if ($isLoggedin)
            <div class="box-button"><a href="/users/profile">Tài khoản</a></div>
            <div class="box-button"><a href="#" onclick="logoutAndRedirect()">Đăng xuất</a></div>
            <div class="box-button">Hỗ trợ khách hàng</div>
            <div class="box-button" id="collapse-account-menu-div">collapse menu account</div>
        @else
            <div class="box-button"><a href="{{ route ('log-in.form') }}">Đăng nhập</a></div>
            <div class="box-button"><a href="{{ route ('sign-up.form') }}">Đăng ký thành viên</a></div>
            <div class="box-button">Hỗ trợ khách hàng</div>
            <div class="box-button" id="collapse-account-menu-div">collapse menu account</div>
        @endif
    </div>
</header>

<!-- dummy box -->
<div style="height: 60px;"></div>
