<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* root */
        :root {
            --grey: #94a3b8;
        }

        /* Reset css */
        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        /* HTML5 display-role reset for older browsers */
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        body {
            line-height: 1;
        }

        ol,
        ul {
            list-style: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: "";
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        /* Styles */
        html,
        body {
            font-family: "Open Sans", -apple-system, BlinkMacSystemFont, system-ui, Roboto,
                "Helvetica Neue", "Segoe UI", "Apple SD Gothic Neo", "Noto Sans KR",
                "Malgun Gothic", sans-serif;
            font-size: 12px;
        }

        .logo {
            background: url('../img/logo.svg') no-repeat center;
            height: 24px;
            width: 94px;
        }

        nav>ul>* {
            display: inline-block;
        }

        nav {
            height: 55px;
        }

        .nav-links {
            display: flex;
            list-style: none;
            justify-content: baseline;
        }

        .nav-item {
            padding: 0 8px;
            align-self: center;
        }

        #navbar {
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: space-around;
            border-bottom: 1px solid lightgray;
        }

        .nav-link {
            font-weight: 500;
            text-decoration: none;
            padding: 16px 0;
            color: black;
        }

        .active {
            font-weight: 500;
            text-decoration: none;
            border-bottom: 3px solid orange;
            bottom: 0;
        }

        .nav-link:visited {
            font-weight: 500;
            color: grey;
            text-decoration: none;
        }

        .nav-link:hover {
            font-weight: 500;
            color: black;
            text-decoration: none;
        }

        .search-btn {
            background: url("./img/search-icon.svg") no-repeat center;
            height: 24px;
            width: 24px;
            border: none;
            cursor: pointer;
        }

        .acc-menu-btn {
            background: url("https://careerly.vn/_next/image?url=%2F_next%2Fstatic%2Fimages%2Fimg_profile-dummy-f39ccb87481ab4a70525a9d2d461307d.png&w=48&q=75") no-repeat center;
            background-size: contain;
            height: 36px;
            width: 36px;
            border: 1px solid lightgray;
            cursor: pointer;
            border-radius: 100%;
        }

        #search-div {
            background-color: white;
        }

        .search-box {
            padding: auto;
            height: 125px;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 1024px;
            margin: auto;
        }

        .search-box .search-input {
            font-size: x-large;
            line-height: 1.5;
            width: 600px;
            border: none;
        }

        input[type="text"]:focus-visible {
            outline: none;
        }

        #collapse-search-div {
            display: block;
            width: 100%;
            border-top: 1px solid lightgray;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.2);
        }

        header {
            z-index: 99;
            position: fixed;
            background: #fff;
        }

        body {
            height: 1000px;
        }

        #content {
            display: block;
            height: 100vh;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        main {
            flex: 1;
            box-sizing: border-box;
            padding: 20px;
            max-width: 800px;
        }

        .sidebar {
            flex-basis: 300px;
            background-color: #f8f9fa;
            padding: 20px;
        }

        .fw-600 {
            font-weight: 600;
        }

        .bold {
            font-weight: bold;
        }

        .article-header {
            display: flex;
        }

        .flex-1 {
            flex: 1;
        }

        .d-flex {
            display: flex;
        }

        .justify-content-start {
            justify-content: start;
        }

        .justify-content-end {
            justify-content: end;
        }

        .justify-content-center {
            justify-content: center;
        }

        .article-tag,
        .article-options,
        .hash-tag {
            align-items: center;
        }

        .article-tag {
            border-radius: 4px;
            padding: 8px;
            background: rgb(241, 245, 249);
        }

        .p-1 {
            padding: 1rem;
        }

        .h-1 {
            font-size: 2em;
            font-weight: bold;
        }

        .grey-text {
            color: var(--grey);
        }

        .article-author {
            align-items: center;
        }

        .avatar img {
            box-sizing: border-box;
            width: 32px;
            height: 32px;
            border: 1px var(--grey) solid;
            border-radius: 100%;
            object-fit: contain;
        }

        .author-name {
            line-height: 1.5rem;
        }

        .date-post {
            font-weight: 200;
            line-height: 1.5rem;
        }

        .h-100 {
            height: 100%;
        }

        .author-info {
            box-sizing: border-box;
            margin-left: 0.75rem;
        }

        .article-content>p {
            line-height: 30px;
        }

        .article-hashtags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .article-hashtags a:visited {
            text-decoration: none;
            color: black;
        }

        .hash-tag {
            border-radius: 12px;
            border: 1px solid rgb(226 232 240);
            padding: 0.5rem;
            text-decoration: none;
        }

        .hash-tag svg,
        .up-down-vote svg {
            fill: var(--grey);
        }

        .hash-tag:hover {
            background: rgb(241, 245, 249);
            text-decoration: none;
        }

        .hash-tag:visited {
            text-decoration: none;
        }

        .up-down-vote {
            align-items: center;
        }

        .up-down-vote button {
            padding: 1rem;
            width: 8rem;
            background-color: #fff;
            border: var(--grey) 1px solid;
        }

        .up-down-vote span {
            line-height: 2rem;
            font-size: 1.5rem;
        }

        .up-vote {
            border-radius: 2rem 0 0 2rem;
        }

        .down-vote {
            border-radius: 0 2rem 2rem 0;
        }

        .up-vote,
        .down-vote {
            justify-content: space-evenly;
            height: 4rem;
        }

        .font-thin {
            font-weight: 400;
        }

        .vote-guide {
            background: #f1f5f9;
        }

        .vote-guide p {
            margin-top: 0.5rem;
            font-size: 14px;
            line-height: 2rem;
        }

        .guide-title {
            font-size: 16px;
            margin-bottom: 1rem;
            line-height: 2rem;
        }
    </style>
</head>

<body class="antialiased">
    <!-- header -->
    <header>
        <nav id="navbar">
            <ul class="nav-links">
                <!-- home -->
                <li class="nav-item"><a class="nav-link" href="#home">
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
                <form action="">
                    <input type="text" class="text search-input" placeholder="Type here to search..." />
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

    <!-- main -->
    <div id="content">
        <main>
            <div class="article">
                <div class="article-header p-1">
                    <div class="article-tag d-flex justify-content-start">
                        <svg width="12" height="12" stroke-width="0" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.2425 3.02985C14.7783 3.1638 15.1041 3.70673 14.9701 4.24253L10.9701 20.2425C10.8362 20.7783 10.2933 21.1041 9.75746 20.9701C9.22167 20.8362 8.89591 20.2933 9.02986 19.7575L13.0299 3.75746C13.1638 3.22166 13.7067 2.8959 14.2425 3.02985ZM6.70711 7.29289C7.09763 7.68341 7.09763 8.31658 6.70711 8.7071L3.41421 12L6.70711 15.2929C7.09763 15.6834 7.09763 16.3166 6.70711 16.7071C6.31658 17.0976 5.68342 17.0976 5.29289 16.7071L1.29289 12.7071C0.902369 12.3166 0.902369 11.6834 1.29289 11.2929L5.29289 7.29289C5.68342 6.90236 6.31658 6.90236 6.70711 7.29289ZM17.2929 7.29289C17.6834 6.90236 18.3166 6.90236 18.7071 7.29289L22.7071 11.2929C23.0976 11.6834 23.0976 12.3166 22.7071 12.7071L18.7071 16.7071C18.3166 17.0976 17.6834 17.0976 17.2929 16.7071C16.9024 16.3166 16.9024 15.6834 17.2929 15.2929L20.5858 12L17.2929 8.7071C16.9024 8.31658 16.9024 7.68341 17.2929 7.29289Z"
                                fill="green"></path>
                        </svg>
                        <p class="fw-600 grey-text" style="margin-left: 4px;">Công nghệ</p>
                    </div>

                    <div class="article-options flex-1 d-flex justify-content-end">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-dots-circle-horizontal" width="20" height="20"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                            <path d="M8 12l0 .01"></path>
                            <path d="M12 12l0 .01"></path>
                            <path d="M16 12l0 .01"></path>
                        </svg>
                    </div>
                </div>

                <div class="question p-1 h-1 font-thin">Mọi người thường làm website đa ngôn ngữ như thế nào?</div>

                <div class="views-count p-1 grey-text">52 lượt xem</div>

                <div class="article-author p-1 d-flex justify-content-start">
                    <div class="avatar">
                        <img src="https://careerly.vn/_next/static/images/img_profile-anonymous-542b218b8ad9880b2bdf6cc122c0d224.png"
                            alt="profile picture" title="profile picture">
                    </div>
                    <div class="h-100 author-info">
                        <div class="author-name bold">
                            <p>Ẩn danh</p>
                        </div>
                        <div class="date-post grey-text">
                            <p>Ngày 31 Tháng 05</p>
                        </div>
                    </div>
                </div>

                <!-- advertisements -->
                <div class="ad"></div>

                <div class="article-content p-1">
                    <p style="font-size: 16px;">
                        Mình đang muốn tham khảo một số cách develop và quản lý website theo hướng đa ngôn ngữ để chọn
                        ra cách tốt nhất cho dự án mình sắp làm. Mọi người thường hay làm theo cách nào thế ạ?
                    </p>
                </div>

                <div class="article-hashtags p-1">
                    <a class="hash-tag d-flex justify-content-start"
                        href="https://careerly.vn/qnas/tagged/đa-ngôn-ngữ?from=qna"><svg width="12" height="12"
                            stroke-width="0" viewBox="0 0 24 24" fill="current" xmlns="http://www.w3.org/2000/svg"
                            class="tw-fill-gray-600 tw-shrink-0">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.2425 3.02985C11.7783 3.1638 12.1041 3.70673 11.9701 4.24253L11.0308 7.99999H14.9692L16.0299 3.75746C16.1638 3.22166 16.7067 2.8959 17.2425 3.02985C17.7783 3.1638 18.1041 3.70673 17.9701 4.24253L17.0308 7.99999H20C20.5523 7.99999 21 8.44771 21 8.99999C21 9.55228 20.5523 9.99999 20 9.99999H16.5308L15.5308 14H18C18.5523 14 19 14.4477 19 15C19 15.5523 18.5523 16 18 16H15.0308L13.9701 20.2425C13.8362 20.7783 13.2933 21.1041 12.7575 20.9701C12.2217 20.8362 11.8959 20.2933 12.0299 19.7575L12.9692 16H9.03078L7.97014 20.2425C7.83619 20.7783 7.29326 21.1041 6.75746 20.9701C6.22167 20.8362 5.89591 20.2933 6.02986 19.7575L6.96922 16H4C3.44772 16 3 15.5523 3 15C3 14.4477 3.44772 14 4 14H7.46922L8.46922 9.99999H6C5.44772 9.99999 5 9.55228 5 8.99999C5 8.44771 5.44772 7.99999 6 7.99999H8.96922L10.0299 3.75746C10.1638 3.22166 10.7067 2.8959 11.2425 3.02985ZM10.5308 9.99999L9.53078 14H13.4692L14.4692 9.99999H10.5308Z">
                            </path>
                        </svg>
                        <p style="margin-left: 4px;">đa-ngôn-ngữ</p>
                    </a>

                    <a class="hash-tag d-flex justify-content-start"
                        href="https://careerly.vn/qnas/tagged/i18n?from=qna"><svg width="12" height="12"
                            stroke-width="0" viewBox="0 0 24 24" fill="current" xmlns="http://www.w3.org/2000/svg"
                            class="tw-fill-gray-600 tw-shrink-0">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.2425 3.02985C11.7783 3.1638 12.1041 3.70673 11.9701 4.24253L11.0308 7.99999H14.9692L16.0299 3.75746C16.1638 3.22166 16.7067 2.8959 17.2425 3.02985C17.7783 3.1638 18.1041 3.70673 17.9701 4.24253L17.0308 7.99999H20C20.5523 7.99999 21 8.44771 21 8.99999C21 9.55228 20.5523 9.99999 20 9.99999H16.5308L15.5308 14H18C18.5523 14 19 14.4477 19 15C19 15.5523 18.5523 16 18 16H15.0308L13.9701 20.2425C13.8362 20.7783 13.2933 21.1041 12.7575 20.9701C12.2217 20.8362 11.8959 20.2933 12.0299 19.7575L12.9692 16H9.03078L7.97014 20.2425C7.83619 20.7783 7.29326 21.1041 6.75746 20.9701C6.22167 20.8362 5.89591 20.2933 6.02986 19.7575L6.96922 16H4C3.44772 16 3 15.5523 3 15C3 14.4477 3.44772 14 4 14H7.46922L8.46922 9.99999H6C5.44772 9.99999 5 9.55228 5 8.99999C5 8.44771 5.44772 7.99999 6 7.99999H8.96922L10.0299 3.75746C10.1638 3.22166 10.7067 2.8959 11.2425 3.02985ZM10.5308 9.99999L9.53078 14H13.4692L14.4692 9.99999H10.5308Z">
                            </path>
                        </svg>
                        <p style="margin-left: 4px;">i18n</p>
                    </a>
                </div>

                <div class="up-down-vote p-1 d-flex justify-content-center">
                    <button class="up-vote d-flex">
                        <svg width="20" height="20" stroke-width="0" viewBox="0 0 24 24" fill="current"
                            xmlns="http://www.w3.org/2000/svg" class="">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M19.7071 10.7071C19.3166 11.0976 18.6834 11.0976 18.2929 10.7071L13 5.41423L13 21C13 21.5523 12.5523 22 12 22C11.4478 22 11 21.5523 11 21L11.0001 5.4142L5.7071 10.7071C5.31658 11.0976 4.68341 11.0976 4.29289 10.7071C3.90237 10.3166 3.90237 9.68341 4.29289 9.29289L11.2929 2.29289C11.4805 2.10535 11.7348 2 12.0001 2C12.2653 2 12.5196 2.10536 12.7072 2.2929L19.7071 9.2929C20.0976 9.68342 20.0976 10.3166 19.7071 10.7071Z"
                                fill="inherit"></path>
                        </svg>
                        <span class="grey-text fw-600">0</span>
                    </button>
                    <button class="down-vote d-flex">
                        <svg width="20" height="20" stroke-width="0" viewBox="0 0 24 24" fill="current"
                            xmlns="http://www.w3.org/2000/svg" class="tw-fill-gray-500 false">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M4.2929 13.2929C4.68342 12.9024 5.31659 12.9024 5.70711 13.2929L10.9999 18.5858L10.9999 3C10.9999 2.44772 11.4477 2 11.9999 2C12.5522 2 12.9999 2.44772 12.9999 3L12.9999 18.5858L18.2929 13.2929C18.6834 12.9024 19.3166 12.9024 19.7071 13.2929C20.0976 13.6834 20.0976 14.3166 19.7071 14.7071L12.7071 21.7071C12.5195 21.8946 12.2652 22 11.9999 22C11.7347 22 11.4804 21.8946 11.2928 21.7071L4.29289 14.7071C3.90237 14.3166 3.90237 13.6834 4.2929 13.2929Z">
                            </path>
                        </svg>
                        <span class="grey-text fw-600">0</span>
                    </button>
                </div>

                <div class="vote-guide p-1">
                    <div class="guide-title bold">Đánh giá câu hỏi ngay!</div>
                    <p>Hãy ấn <span class="bold">↑Up Vote</span> với những câu hỏi cụ thể và chi tiết</p>
                    <p>Hãy ấn <span class="bold">↓Down Vote</span> với những câu hỏi chưa rõ ràng Careerly sẽ nhắc
                        người hỏi chỉnh sửa lại.</p>
                </div>
            </div>

            <div class="answer">
                <div class="answer-header">
                    <div class="answer-count"></div>
                </div>

                <div class="answer-post">
                    <div class="answer-rank"></div>

                    <div class="answer-author"></div>

                    <div class="answer-content"></div>

                    <div class="answer-likes"></div>
                </div>
            </div>

            <div class="register-form">
                <div class="form-title"></div>

                <div class="form-subtitle"></div>

                <div class="form"></div>
            </div>
        </main>

        <div class="sidebar">
            <h2>Sidebar</h2>
            <p>This is the sidebar. You can add additional content, links, or widgets here.</p>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <!-- Add more links or other elements as needed -->
            </ul>
        </div>
    </div>

    <!-- footer -->
    <footer></footer>

    <!-- script -->
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
