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
            <li class="nav-item">
                <a class="nav-link" href="/" data-target="/">
                    <div class="logo"></div>
                </a>
            </li>
            <!-- trends -->
            <li class="nav-item">
                <a class="nav-link" href="/leaderboard" data-target="/leaderboard">Xếp hạng</a>
            </li>
            <!-- Q&A -->
            <li class="nav-item">
                <a class="nav-link" href="/qna" data-target="/qna">Q&A lập trình viên</a>
            </li>
        </ul>

        <ul class="nav-links" style="margin-bottom: 0">
            <!-- search -->
            <li class="nav-item">
                <button class="search-btn" type="button" value="Show search div" onclick="toggleSearch()">
                    <i class="fas fa-search fa-2x"></i>
                </button>
            </li>

            <!-- menu account -->
            <li class="nav-item">
                <button class="acc-menu-btn" type="button" value="Show account menu div" onclick="toggleAccMenu()">
                    <i class="fas fa-user-circle fa-2x"></i>
                </button>
                <!-- toggle account menu box -->
                <div id="acc-menu-div">
                    @if ($isLoggedin)
                        <div class="box-button"><a href="/users/my-profile">Tài khoản</a></div>
                        <div class="box-button" id="logout"><a href="#" onclick="logoutAndRedirect()">Đăng
                                xuất</a></div>
                        <div class="box-button" id="collapse-account-menu-div"><i class="fa-solid fa-angle-up"></i>
                        </div>
                    @else
                        <div class="box-button"><a href="{{ route('log-in.form') }}">Đăng nhập</a></div>
                        <div class="box-button"><a href="{{ route('sign-up.form') }}">Đăng ký thành viên</a></div>
                        <div class="box-button" id="collapse-account-menu-div"><i class="fa-solid fa-angle-up"></i>
                        </div>
                    @endif
                </div>
            </li>
        </ul>
    </nav>

    <!-- toggle search box -->
    <div id="search-div" style="display:none;">
        <div class="search-box">
            <div class="search-btn"></div>
            <form action="{{ route('users.search') }}" method="GET">
                <input name="query" type="text" class="text search-input" placeholder="Type here to search..." />
            </form>
        </div>
        <div id="collapse-search-div"><span>CLOSE</span></div>
    </div>
</header>

<!-- dummy box -->
<div style="height: 60px;"></div>
