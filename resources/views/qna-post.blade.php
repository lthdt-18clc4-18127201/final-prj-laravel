@extends('layouts.app')

@section('title', 'QnA Post')
@section('css-path', 'css/qna-post.css')

@section('content')
    {{-- start search feature --}}
    @if (isset($users))
        @include('users.search_results') <!-- Include the search results -->
    @endif
    {{-- end search feature --}}

    <div class="wrapper">
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
                            <p class="fw-600 grey-text" style="margin-left: 4px; margin-bottom: 0;">Công nghệ</p>
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

    </div>

@endsection
