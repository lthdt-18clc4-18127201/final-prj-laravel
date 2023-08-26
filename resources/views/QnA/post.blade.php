@extends('layouts.app')

@section('title', 'Post')

@section('css-path')
    {{ asset('css/post.css') }}
@endsection

@section('content')
    <div class="container m-auto">
        <div class="row">
            <div class="col-md-8">
                <div class="article">
                    <div class="article-header bg-light p-3 d-flex justify-content-between align-items-center">
                        <div class="article-tag bg-light rounded-pill px-2 py-1 d-flex justify-content-start">
                            <svg width="12" height="12" stroke-width="0" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.2425 3.02985C14.7783 3.1638 15.1041 3.70673 14.9701 4.24253L10.9701 20.2425C10.8362 20.7783 10.2933 21.1041 9.75746 20.9701C9.22167 20.8362 8.89591 20.2933 9.02986 19.7575L13.0299 3.75746C13.1638 3.22166 13.7067 2.8959 14.2425 3.02985ZM6.70711 7.29289C7.09763 7.68341 7.09763 8.31658 6.70711 8.7071L3.41421 12L6.70711 15.2929C7.09763 15.6834 7.09763 16.3166 6.70711 16.7071C6.31658 17.0976 5.68342 17.0976 5.29289 16.7071L1.29289 12.7071C0.902369 12.3166 0.902369 11.6834 1.29289 11.2929L5.29289 7.29289C5.68342 6.90236 6.31658 6.90236 6.70711 7.29289ZM17.2929 7.29289C17.6834 6.90236 18.3166 6.90236 18.7071 7.29289L22.7071 11.2929C23.0976 11.6834 23.0976 12.3166 22.7071 12.7071L18.7071 16.7071C18.3166 17.0976 17.6834 17.0976 17.2929 16.7071C16.9024 16.3166 16.9024 15.6834 17.2929 15.2929L20.5858 12L17.2929 8.7071C16.9024 8.31658 16.9024 7.68341 17.2929 7.29289Z"
                                    fill="green"></path>
                            </svg>
                            <p class="fw-bold ms-1 m-0">Công nghệ</p>
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
                    <!-- Article Title -->
                    <div class="question fw-normal p-3">
                        Bài viết số: {{ $post['ID'] }}
                    </div>
                    <!-- Views Count -->
                    <div class="views-count p-3 text-muted">{{ $post['View'] }} lượt xem</div>
                    <!-- Article Author Info -->
                    <div class="article-author d-flex align-items-center p-3">
                        <div class="avatar me-3">
                            <img src="{{ asset('https://careerly.vn/_next/static/images/img_profile-anonymous-542b218b8ad9880b2bdf6cc122c0d224.png') }}"
                                alt="Profile Picture" class="img-fluid rounded-circle">
                        </div>
                        <div class="author-info">
                            <div class="author-name fw-bold">{{ $post['Email'] }}</div>
                            <div class="date-post text-muted">Ngày 31 Tháng 05</div>
                        </div>
                    </div>
                    <!-- Article Content -->
                    <div class="article-content p-3">
                        <p class="fs-5">
                            {{ $post['Content'] }}
                        </p>
                    </div>
                    <!-- Article Hashtags -->
                    <div class="article-hashtags p-3">
                        <a href="#" class="hash-tag bg-light rounded-pill px-2 py-1 text-muted">#đa-ngôn-ngữ</a>
                        <a href="#" class="hash-tag bg-light rounded-pill px-2 py-1 text-muted">#i18n</a>
                    </div>
                    <!-- Up Down Vote Section -->
                    <div class="up-down-vote d-flex justify-content-center p-3">
                        <button class="up-vote btn btn-light btn-sm me-2 d-flex justify-content-center">
                            <span class="d-flex flex-row align-items-center">
                                <svg width="16" height="16" stroke-width="0" viewBox="0 0 24 24" fill="current"
                                    xmlns="http://www.w3.org/2000/svg" class="mb-1">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M19.7071 10.7071C19.3166 11.0976 18.6834 11.0976 18.2929 10.7071L13 5.41423L13 21C13 21.5523 12.5523 22 12 22C11.4478 22 11 21.5523 11 21L11.0001 5.4142L5.7071 10.7071C5.31658 11.0976 4.68341 11.0976 4.29289 10.7071C3.90237 10.3166 3.90237 9.68341 4.2929 9.29289L11.2929 2.29289C11.4805 2.10535 11.7348 2 12.0001 2C12.2653 2 12.5196 2.10536 12.7072 2.2929L19.7071 9.2929C20.0976 9.68342 20.0976 10.3166 19.7071 10.7071Z"
                                        fill="inherit"></path>
                                </svg>
                                <span class="text-muted fw-bold">{{ $post['Upvotes'] }}</span>
                            </span>
                        </button>
                        <button class="down-vote btn btn-light btn-sm d-flex justify-content-center">
                            <span class="d-flex flex-row align-items-center">
                                <svg width="16" height="16" stroke-width="0" viewBox="0 0 24 24" fill="current"
                                    xmlns="http://www.w3.org/2000/svg" class="mb-1 tw-fill-gray-500 false">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.2929 13.2929C4.68342 12.9024 5.31659 12.9024 5.70711 13.2929L10.9999 18.5858L10.9999 3C10.9999 2.44772 11.4477 2 11.9999 2C12.5522 2 12.9999 2.44772 12.9999 3L12.9999 18.5858L18.2929 13.2929C18.6834 12.9024 19.3166 12.9024 19.7071 13.2929C20.0976 13.6834 20.0976 14.3166 19.7071 14.7071L12.7071 21.7071C12.5195 21.8946 12.2652 22 11.9999 22C11.7347 22 11.4804 21.8946 11.2928 21.7071L4.29289 14.7071C3.90237 14.3166 3.90237 13.6834 4.2929 13.2929Z">
                                    </path>
                                </svg>
                                <span class="text-muted fw-bold">0</span>
                            </span>
                        </button>
                    </div>
                    <!-- Vote Guide -->
                    <div class="vote-guide bg-light p-3">
                        <div class="guide-title fw-bold">Đánh giá câu hỏi ngay!</div>
                        <p>
                            Hãy ấn <span class="fw-bold">↑Up Vote</span> với những câu hỏi cụ thể và chi tiết
                        </p>
                        <p>
                            Hãy ấn <span class="fw-bold">↓Down Vote</span> với những câu hỏi chưa rõ ràng Careerly sẽ nhắc
                            người hỏi chỉnh sửa lại.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2>Các câu hỏi cùng chủ đề công nghệ</h2>
                <ul>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
