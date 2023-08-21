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
                <button class="acc-menu-btn" type="button" value="Show account menu div" onclick="toggleAccMenu()" />
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
