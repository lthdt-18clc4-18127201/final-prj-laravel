@extends('layouts.app')

@section('title', 'Q&A')

@section('css-path')
    {{ asset('css/Q&A.css') }}
@endsection

@section('content')
    <div class="QnA-container row">
        <!-- start left-side -->
        <div class="left-side col-4">
            <div class="QnA-title">
                <h2>Q&A Lập trình viên</h2>
            </div>

            <a href="/qna/create-questions" class="btn btn-ask">Ask</a>

            <div class="category">
                <span class="category-title">Chủ đề</span>
                <ul class="category-list">
                    <li>
                        <div class="category-item-content">
                            <span class="icon">
                                <i class="fa-solid fa-bars" style="color: #94a3b8;"></i>
                            </span>
                            <span class="category-item-title active-title">Toàn bộ</span>
                        </div>
                    </li>
                    <li>
                        <div class="category-item-content">
                            <span class="icon">
                                <i class="fa-solid fa-code" style="color: #16a349;"></i>
                            </span>
                            <span class="category-item-title">Công nghệ</span>
                        </div>
                    </li>
                    <li>
                        <div class="category-item-content">
                            <span class="icon">
                                <i class="fa-solid fa-briefcase" style="color: #9333e9;"></i>
                            </span>
                            <span class="category-item-title">Nghề nghiệp</span>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="tags">
                <span class="tags-title">Tags phổ biến</span>
                <div class="filter-buttons">
                    <a href="#" class="filter-button" data-filter="all">
                        <svg class="item-icon" xmlns="http://www.w3.org/2000/svg" stroke-width="0" viewBox="0 0 24 24"
                            fill="current">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.2425 3.02985C11.7783 3.1638 12.1041 3.70673 11.9701 4.24253L11.0308 7.99999H14.9692L16.0299 3.75746C16.1638 3.22166 16.7067 2.8959 17.2425 3.02985C17.7783 3.1638 18.1041 3.70673 17.9701 4.24253L17.0308 7.99999H20C20.5523 7.99999 21 8.44771 21 8.99999C21 9.55228 20.5523 9.99999 20 9.99999H16.5308L15.5308 14H18C18.5523 14 19 14.4477 19 15C19 15.5523 18.5523 16 18 16H15.0308L13.9701 20.2425C13.8362 20.7783 13.2933 21.1041 12.7575 20.9701C12.2217 20.8362 11.8959 20.2933 12.0299 19.7575L12.9692 16H9.03078L7.97014 20.2425C7.83619 20.7783 7.29326 21.1041 6.75746 20.9701C6.22167 20.8362 5.89591 20.2933 6.02986 19.7575L6.96922 16H4C3.44772 16 3 15.5523 3 15C3 14.4477 3.44772 14 4 14H7.46922L8.46922 9.99999H6C5.44772 9.99999 5 9.55228 5 8.99999C5 8.44771 5.44772 7.99999 6 7.99999H8.96922L10.0299 3.75746C10.1638 3.22166 10.7067 2.8959 11.2425 3.02985ZM10.5308 9.99999L9.53078 14H13.4692L14.4692 9.99999H10.5308Z">
                            </path>
                        </svg>
                        html
                    </a>
                    <a href="#" class="filter-button" data-filter="all">
                        <svg class="item-icon" xmlns="http://www.w3.org/2000/svg" stroke-width="0" viewBox="0 0 24 24"
                            fill="current">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.2425 3.02985C11.7783 3.1638 12.1041 3.70673 11.9701 4.24253L11.0308 7.99999H14.9692L16.0299 3.75746C16.1638 3.22166 16.7067 2.8959 17.2425 3.02985C17.7783 3.1638 18.1041 3.70673 17.9701 4.24253L17.0308 7.99999H20C20.5523 7.99999 21 8.44771 21 8.99999C21 9.55228 20.5523 9.99999 20 9.99999H16.5308L15.5308 14H18C18.5523 14 19 14.4477 19 15C19 15.5523 18.5523 16 18 16H15.0308L13.9701 20.2425C13.8362 20.7783 13.2933 21.1041 12.7575 20.9701C12.2217 20.8362 11.8959 20.2933 12.0299 19.7575L12.9692 16H9.03078L7.97014 20.2425C7.83619 20.7783 7.29326 21.1041 6.75746 20.9701C6.22167 20.8362 5.89591 20.2933 6.02986 19.7575L6.96922 16H4C3.44772 16 3 15.5523 3 15C3 14.4477 3.44772 14 4 14H7.46922L8.46922 9.99999H6C5.44772 9.99999 5 9.55228 5 8.99999C5 8.44771 5.44772 7.99999 6 7.99999H8.96922L10.0299 3.75746C10.1638 3.22166 10.7067 2.8959 11.2425 3.02985ZM10.5308 9.99999L9.53078 14H13.4692L14.4692 9.99999H10.5308Z">
                            </path>
                        </svg>
                        javascript
                    </a>
                    <a href="#" class="filter-button" data-filter="all">
                        <svg class="item-icon" xmlns="http://www.w3.org/2000/svg" stroke-width="0" viewBox="0 0 24 24"
                            fill="current">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.2425 3.02985C11.7783 3.1638 12.1041 3.70673 11.9701 4.24253L11.0308 7.99999H14.9692L16.0299 3.75746C16.1638 3.22166 16.7067 2.8959 17.2425 3.02985C17.7783 3.1638 18.1041 3.70673 17.9701 4.24253L17.0308 7.99999H20C20.5523 7.99999 21 8.44771 21 8.99999C21 9.55228 20.5523 9.99999 20 9.99999H16.5308L15.5308 14H18C18.5523 14 19 14.4477 19 15C19 15.5523 18.5523 16 18 16H15.0308L13.9701 20.2425C13.8362 20.7783 13.2933 21.1041 12.7575 20.9701C12.2217 20.8362 11.8959 20.2933 12.0299 19.7575L12.9692 16H9.03078L7.97014 20.2425C7.83619 20.7783 7.29326 21.1041 6.75746 20.9701C6.22167 20.8362 5.89591 20.2933 6.02986 19.7575L6.96922 16H4C3.44772 16 3 15.5523 3 15C3 14.4477 3.44772 14 4 14H7.46922L8.46922 9.99999H6C5.44772 9.99999 5 9.55228 5 8.99999C5 8.44771 5.44772 7.99999 6 7.99999H8.96922L10.0299 3.75746C10.1638 3.22166 10.7067 2.8959 11.2425 3.02985ZM10.5308 9.99999L9.53078 14H13.4692L14.4692 9.99999H10.5308Z">
                            </path>
                        </svg>
                        react
                    </a>
                    <a href="#" class="filter-button" data-filter="all">
                        <svg class="item-icon" xmlns="http://www.w3.org/2000/svg" stroke-width="0" viewBox="0 0 24 24"
                            fill="current">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.2425 3.02985C11.7783 3.1638 12.1041 3.70673 11.9701 4.24253L11.0308 7.99999H14.9692L16.0299 3.75746C16.1638 3.22166 16.7067 2.8959 17.2425 3.02985C17.7783 3.1638 18.1041 3.70673 17.9701 4.24253L17.0308 7.99999H20C20.5523 7.99999 21 8.44771 21 8.99999C21 9.55228 20.5523 9.99999 20 9.99999H16.5308L15.5308 14H18C18.5523 14 19 14.4477 19 15C19 15.5523 18.5523 16 18 16H15.0308L13.9701 20.2425C13.8362 20.7783 13.2933 21.1041 12.7575 20.9701C12.2217 20.8362 11.8959 20.2933 12.0299 19.7575L12.9692 16H9.03078L7.97014 20.2425C7.83619 20.7783 7.29326 21.1041 6.75746 20.9701C6.22167 20.8362 5.89591 20.2933 6.02986 19.7575L6.96922 16H4C3.44772 16 3 15.5523 3 15C3 14.4477 3.44772 14 4 14H7.46922L8.46922 9.99999H6C5.44772 9.99999 5 9.55228 5 8.99999C5 8.44771 5.44772 7.99999 6 7.99999H8.96922L10.0299 3.75746C10.1638 3.22166 10.7067 2.8959 11.2425 3.02985ZM10.5308 9.99999L9.53078 14H13.4692L14.4692 9.99999H10.5308Z">
                            </path>
                        </svg>
                        python
                    </a>
                    <a href="#" class="filter-button" data-filter="all">
                        <svg class="item-icon" xmlns="http://www.w3.org/2000/svg" stroke-width="0" viewBox="0 0 24 24"
                            fill="current">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.2425 3.02985C11.7783 3.1638 12.1041 3.70673 11.9701 4.24253L11.0308 7.99999H14.9692L16.0299 3.75746C16.1638 3.22166 16.7067 2.8959 17.2425 3.02985C17.7783 3.1638 18.1041 3.70673 17.9701 4.24253L17.0308 7.99999H20C20.5523 7.99999 21 8.44771 21 8.99999C21 9.55228 20.5523 9.99999 20 9.99999H16.5308L15.5308 14H18C18.5523 14 19 14.4477 19 15C19 15.5523 18.5523 16 18 16H15.0308L13.9701 20.2425C13.8362 20.7783 13.2933 21.1041 12.7575 20.9701C12.2217 20.8362 11.8959 20.2933 12.0299 19.7575L12.9692 16H9.03078L7.97014 20.2425C7.83619 20.7783 7.29326 21.1041 6.75746 20.9701C6.22167 20.8362 5.89591 20.2933 6.02986 19.7575L6.96922 16H4C3.44772 16 3 15.5523 3 15C3 14.4477 3.44772 14 4 14H7.46922L8.46922 9.99999H6C5.44772 9.99999 5 9.55228 5 8.99999C5 8.44771 5.44772 7.99999 6 7.99999H8.96922L10.0299 3.75746C10.1638 3.22166 10.7067 2.8959 11.2425 3.02985ZM10.5308 9.99999L9.53078 14H13.4692L14.4692 9.99999H10.5308Z">
                            </path>
                        </svg>
                        typescript
                    </a>
                    <a href="#" class="filter-button" data-filter="all">
                        <svg class="item-icon" xmlns="http://www.w3.org/2000/svg" stroke-width="0" viewBox="0 0 24 24"
                            fill="current">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.2425 3.02985C11.7783 3.1638 12.1041 3.70673 11.9701 4.24253L11.0308 7.99999H14.9692L16.0299 3.75746C16.1638 3.22166 16.7067 2.8959 17.2425 3.02985C17.7783 3.1638 18.1041 3.70673 17.9701 4.24253L17.0308 7.99999H20C20.5523 7.99999 21 8.44771 21 8.99999C21 9.55228 20.5523 9.99999 20 9.99999H16.5308L15.5308 14H18C18.5523 14 19 14.4477 19 15C19 15.5523 18.5523 16 18 16H15.0308L13.9701 20.2425C13.8362 20.7783 13.2933 21.1041 12.7575 20.9701C12.2217 20.8362 11.8959 20.2933 12.0299 19.7575L12.9692 16H9.03078L7.97014 20.2425C7.83619 20.7783 7.29326 21.1041 6.75746 20.9701C6.22167 20.8362 5.89591 20.2933 6.02986 19.7575L6.96922 16H4C3.44772 16 3 15.5523 3 15C3 14.4477 3.44772 14 4 14H7.46922L8.46922 9.99999H6C5.44772 9.99999 5 9.55228 5 8.99999C5 8.44771 5.44772 7.99999 6 7.99999H8.96922L10.0299 3.75746C10.1638 3.22166 10.7067 2.8959 11.2425 3.02985ZM10.5308 9.99999L9.53078 14H13.4692L14.4692 9.99999H10.5308Z">
                            </path>
                        </svg>
                        next.js
                    </a>
                    <a href="#" class="filter-button" data-filter="all">
                        <svg class="item-icon" xmlns="http://www.w3.org/2000/svg" stroke-width="0" viewBox="0 0 24 24"
                            fill="current">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.2425 3.02985C11.7783 3.1638 12.1041 3.70673 11.9701 4.24253L11.0308 7.99999H14.9692L16.0299 3.75746C16.1638 3.22166 16.7067 2.8959 17.2425 3.02985C17.7783 3.1638 18.1041 3.70673 17.9701 4.24253L17.0308 7.99999H20C20.5523 7.99999 21 8.44771 21 8.99999C21 9.55228 20.5523 9.99999 20 9.99999H16.5308L15.5308 14H18C18.5523 14 19 14.4477 19 15C19 15.5523 18.5523 16 18 16H15.0308L13.9701 20.2425C13.8362 20.7783 13.2933 21.1041 12.7575 20.9701C12.2217 20.8362 11.8959 20.2933 12.0299 19.7575L12.9692 16H9.03078L7.97014 20.2425C7.83619 20.7783 7.29326 21.1041 6.75746 20.9701C6.22167 20.8362 5.89591 20.2933 6.02986 19.7575L6.96922 16H4C3.44772 16 3 15.5523 3 15C3 14.4477 3.44772 14 4 14H7.46922L8.46922 9.99999H6C5.44772 9.99999 5 9.55228 5 8.99999C5 8.44771 5.44772 7.99999 6 7.99999H8.96922L10.0299 3.75746C10.1638 3.22166 10.7067 2.8959 11.2425 3.02985ZM10.5308 9.99999L9.53078 14H13.4692L14.4692 9.99999H10.5308Z">
                            </path>
                        </svg>
                        react-native
                    </a>
                </div>
            </div>
        </div>
        <!-- end left-side -->

        <!-- right-side -->
        <!-- start new and suggestion posts -->
        <div class="right-side col-8">
            <p class="new-question">
                <span class="question-sight">NEW</span>
                <span class="question-separate">|</span>
                Xem các câu hỏi mới đang chờ câu trả lời của bạn ngay!
                <a href="/qna/open-questions" class="btn-goto-answer">Trả lời ngay<i class="fa-solid fa-arrow-right"
                        style="color: #ffffff"></i></a>
            </p>

            <div>
                <div class="suggestion">
                    <div class="suggestion-title">
                        <h3 class="suggestion-text">Câu hỏi đề xuất</h3>
                        <div class="suggestion-change-posts">
                            <button class="btn-change" disabled>
                                <i class="fa-solid fa-arrow-left"></i>
                            </button>
                            <button class="btn-change">
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <!-- suggestion -->
                    <div class="suggestion-posts">
                        <div class="suggestion-posts-items">
                            <div class="suggestion-posts-wrapper">
                                @foreach ($suggestPosts as $key => $value)
                                <div class="posts-item" style="width: 310px; margin-right: 20px;">
                                    <a href="/qna/post/{{ $value['_id'] }}" class="item-content">
                                        <div class="item-content-category">
                                            <div class="item-population">
                                                <p class="item-text">Nổi bật</p>
                                            </div>
                                            <div class="item-category">
                                                <svg width="12" height="12" stroke-width="0" viewBox="0 0 24 24"
                                                    fill="current" xmlns="http://www.w3.org/2000/svg"
                                                    class="tw-fill-purple-600">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.8787 1.87868C8.44131 1.31607 9.20437 1 10 1H14C14.7957 1 15.5587 1.31607 16.1213 1.87868C16.6839 2.44129 17 3.20435 17 4V5H19C19.7957 5 20.5587 5.31607 21.1213 5.87868C21.684 6.44129 22 7.20435 22 8V13.2317C22.0004 13.247 22.0004 13.2624 22 13.2776V18C22 18.7957 21.684 19.5587 21.1213 20.1213C20.5587 20.6839 19.7957 21 19 21H5.00002C4.20437 21 3.44131 20.6839 2.8787 20.1213C2.31609 19.5587 2.00002 18.7957 2.00002 18V13.2776C1.99967 13.2623 1.99967 13.247 2.00002 13.2317V8C2.00002 7.20435 2.31609 6.44129 2.8787 5.87868C3.44131 5.31607 4.20437 5 5.00002 5H7.00002V4C7.00002 3.20435 7.31609 2.44129 7.8787 1.87868ZM9.00002 5H15V4C15 3.73478 14.8947 3.48043 14.7071 3.29289C14.5196 3.10536 14.2652 3 14 3H10C9.7348 3 9.48045 3.10536 9.29291 3.29289C9.10538 3.48043 9.00002 3.73478 9.00002 4V5ZM5.00002 7C4.7348 7 4.48045 7.10536 4.29291 7.29289C4.10538 7.48043 4.00002 7.73478 4.00002 8V12.5703C6.49099 13.4944 9.18498 14 12 14L12.0012 14C14.7331 14.0033 17.4418 13.5185 20 12.5701V8C20 7.73478 19.8947 7.48043 19.7071 7.29289C19.5196 7.10536 19.2652 7 19 7H5.00002ZM20 14.6915C17.4255 15.5602 14.7231 16.0033 11.9994 16C9.20278 15.9999 6.51277 15.54 4.00002 14.6918V18C4.00002 18.2652 4.10538 18.5196 4.29291 18.7071C4.48045 18.8946 4.7348 19 5.00002 19H19C19.2652 19 19.5196 18.8946 19.7071 18.7071C19.8947 18.5196 20 18.2652 20 18V14.6915ZM11 12C11 11.4477 11.4477 11 12 11H12.01C12.5623 11 13.01 11.4477 13.01 12C13.01 12.5523 12.5623 13 12.01 13H12C11.4477 13 11 12.5523 11 12Z"
                                                        fill="inherit"></path>
                                                </svg>
                                                <p class="tw-font-bold tw-text-gray-600 tw-text-xs tw-leading-none">Nghề
                                                    nghiệp</p>
                                            </div>
                                        </div>
                                        <!-- <p class="item-content-title">Data type nào là tốt nhất để lưu URL?</p> -->
                                        <p class="item-content-title">{{ $value['Content'] }}</p>
                                        <div class="item-content-contact">
                                            <div class="item-response">
                                                <p class="item-response-text">
                                                    <span>Trả lời</span>
                                                    <span>{{ $value['Upvotes'] }}</span>
                                                </p>
                                            </div>
                                            <p class="item-content-seen">
                                                <span>Lượt xem</span>
                                                <span>{{ $value['View'] }}</span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end new and suggestion posts -->

            <!-- start newest posts -->
            <div class="newest-posts">
                <div class="newest-status">
                    <button class="newest-status-btn" type="button">
                        <svg width="6" height="6" stroke-width="0" viewBox="0 0 24 24" fill="#45ada6"
                            xmlns="http://www.w3.org/2000/svg" type="solid" class="tw-fill-teal-600">
                            <circle cx="12" cy="12" r="10" fill="inherit"></circle>
                        </svg>
                        <span class="newest-status-text">Mới nhất</span>
                    </button>
                    <button class="less-response-status-btn">
                        <svg width="6" height="6" stroke-width="0" viewBox="0 0 24 24" fill="current"
                            xmlns="http://www.w3.org/2000/svg" type="solid" class="tw-fill-gray-500">
                            <circle cx="12" cy="12" r="10" fill="inherit"></circle>
                        </svg>
                        <span class="less-response-status-text">Ít câu trả lời nhất</span>
                    </button>
                </div>
            </div>
            @foreach ($newestPosts as $key => $value)
            <a href="/qna/post/{{ $value['_id'] }}" class="newest-posts-item">
                <div class="newest-posts-container">
                    <div class="newest-posts-category">
                        <svg width="12" height="12" stroke-width="0" viewBox="0 0 24 24" fill="current"
                            xmlns="http://www.w3.org/2000/svg" class="tw-fill-purple-600">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.8787 1.87868C8.44131 1.31607 9.20437 1 10 1H14C14.7957 1 15.5587 1.31607 16.1213 1.87868C16.6839 2.44129 17 3.20435 17 4V5H19C19.7957 5 20.5587 5.31607 21.1213 5.87868C21.684 6.44129 22 7.20435 22 8V13.2317C22.0004 13.247 22.0004 13.2624 22 13.2776V18C22 18.7957 21.684 19.5587 21.1213 20.1213C20.5587 20.6839 19.7957 21 19 21H5.00002C4.20437 21 3.44131 20.6839 2.8787 20.1213C2.31609 19.5587 2.00002 18.7957 2.00002 18V13.2776C1.99967 13.2623 1.99967 13.247 2.00002 13.2317V8C2.00002 7.20435 2.31609 6.44129 2.8787 5.87868C3.44131 5.31607 4.20437 5 5.00002 5H7.00002V4C7.00002 3.20435 7.31609 2.44129 7.8787 1.87868ZM9.00002 5H15V4C15 3.73478 14.8947 3.48043 14.7071 3.29289C14.5196 3.10536 14.2652 3 14 3H10C9.7348 3 9.48045 3.10536 9.29291 3.29289C9.10538 3.48043 9.00002 3.73478 9.00002 4V5ZM5.00002 7C4.7348 7 4.48045 7.10536 4.29291 7.29289C4.10538 7.48043 4.00002 7.73478 4.00002 8V12.5703C6.49099 13.4944 9.18498 14 12 14L12.0012 14C14.7331 14.0033 17.4418 13.5185 20 12.5701V8C20 7.73478 19.8947 7.48043 19.7071 7.29289C19.5196 7.10536 19.2652 7 19 7H5.00002ZM20 14.6915C17.4255 15.5602 14.7231 16.0033 11.9994 16C9.20278 15.9999 6.51277 15.54 4.00002 14.6918V18C4.00002 18.2652 4.10538 18.5196 4.29291 18.7071C4.48045 18.8946 4.7348 19 5.00002 19H19C19.2652 19 19.5196 18.8946 19.7071 18.7071C19.8947 18.5196 20 18.2652 20 18V14.6915ZM11 12C11 11.4477 11.4477 11 12 11H12.01C12.5623 11 13.01 11.4477 13.01 12C13.01 12.5523 12.5623 13 12.01 13H12C11.4477 13 11 12.5523 11 12Z"
                                fill="inherit"></path>
                        </svg>
                        <p class="newest-posts-category-text">Nghề nghiệp</p>
                    </div>
                    <p class="newest-posts-title">
                        <span class="newest-posts-title-text">Approach Data</span></span>
                    </p>
                    <p class="newest-posts-content">
                        {{ $value['Content'] }}
                    </p>
                </div>
                <div class="newest-posts-tags">
                    <a href="#" class="filter-button" data-filter="all">
                        <svg class="item-icon" xmlns="http://www.w3.org/2000/svg" stroke-width="0" viewBox="0 0 24 24"
                            fill="current">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.2425 3.02985C11.7783 3.1638 12.1041 3.70673 11.9701 4.24253L11.0308 7.99999H14.9692L16.0299 3.75746C16.1638 3.22166 16.7067 2.8959 17.2425 3.02985C17.7783 3.1638 18.1041 3.70673 17.9701 4.24253L17.0308 7.99999H20C20.5523 7.99999 21 8.44771 21 8.99999C21 9.55228 20.5523 9.99999 20 9.99999H16.5308L15.5308 14H18C18.5523 14 19 14.4477 19 15C19 15.5523 18.5523 16 18 16H15.0308L13.9701 20.2425C13.8362 20.7783 13.2933 21.1041 12.7575 20.9701C12.2217 20.8362 11.8959 20.2933 12.0299 19.7575L12.9692 16H9.03078L7.97014 20.2425C7.83619 20.7783 7.29326 21.1041 6.75746 20.9701C6.22167 20.8362 5.89591 20.2933 6.02986 19.7575L6.96922 16H4C3.44772 16 3 15.5523 3 15C3 14.4477 3.44772 14 4 14H7.46922L8.46922 9.99999H6C5.44772 9.99999 5 9.55228 5 8.99999C5 8.44771 5.44772 7.99999 6 7.99999H8.96922L10.0299 3.75746C10.1638 3.22166 10.7067 2.8959 11.2425 3.02985ZM10.5308 9.99999L9.53078 14H13.4692L14.4692 9.99999H10.5308Z">
                            </path>
                        </svg>
                        flutter
                    </a>
                    <a href="#" class="filter-button" data-filter="all">
                        <svg class="item-icon" xmlns="http://www.w3.org/2000/svg" stroke-width="0" viewBox="0 0 24 24"
                            fill="current">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.2425 3.02985C11.7783 3.1638 12.1041 3.70673 11.9701 4.24253L11.0308 7.99999H14.9692L16.0299 3.75746C16.1638 3.22166 16.7067 2.8959 17.2425 3.02985C17.7783 3.1638 18.1041 3.70673 17.9701 4.24253L17.0308 7.99999H20C20.5523 7.99999 21 8.44771 21 8.99999C21 9.55228 20.5523 9.99999 20 9.99999H16.5308L15.5308 14H18C18.5523 14 19 14.4477 19 15C19 15.5523 18.5523 16 18 16H15.0308L13.9701 20.2425C13.8362 20.7783 13.2933 21.1041 12.7575 20.9701C12.2217 20.8362 11.8959 20.2933 12.0299 19.7575L12.9692 16H9.03078L7.97014 20.2425C7.83619 20.7783 7.29326 21.1041 6.75746 20.9701C6.22167 20.8362 5.89591 20.2933 6.02986 19.7575L6.96922 16H4C3.44772 16 3 15.5523 3 15C3 14.4477 3.44772 14 4 14H7.46922L8.46922 9.99999H6C5.44772 9.99999 5 9.55228 5 8.99999C5 8.44771 5.44772 7.99999 6 7.99999H8.96922L10.0299 3.75746C10.1638 3.22166 10.7067 2.8959 11.2425 3.02985ZM10.5308 9.99999L9.53078 14H13.4692L14.4692 9.99999H10.5308Z">
                            </path>
                        </svg>
                        mobile-web
                    </a>
                    <a href="#" class="filter-button" data-filter="all">
                        <svg class="item-icon" xmlns="http://www.w3.org/2000/svg" stroke-width="0" viewBox="0 0 24 24"
                            fill="current">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.2425 3.02985C11.7783 3.1638 12.1041 3.70673 11.9701 4.24253L11.0308 7.99999H14.9692L16.0299 3.75746C16.1638 3.22166 16.7067 2.8959 17.2425 3.02985C17.7783 3.1638 18.1041 3.70673 17.9701 4.24253L17.0308 7.99999H20C20.5523 7.99999 21 8.44771 21 8.99999C21 9.55228 20.5523 9.99999 20 9.99999H16.5308L15.5308 14H18C18.5523 14 19 14.4477 19 15C19 15.5523 18.5523 16 18 16H15.0308L13.9701 20.2425C13.8362 20.7783 13.2933 21.1041 12.7575 20.9701C12.2217 20.8362 11.8959 20.2933 12.0299 19.7575L12.9692 16H9.03078L7.97014 20.2425C7.83619 20.7783 7.29326 21.1041 6.75746 20.9701C6.22167 20.8362 5.89591 20.2933 6.02986 19.7575L6.96922 16H4C3.44772 16 3 15.5523 3 15C3 14.4477 3.44772 14 4 14H7.46922L8.46922 9.99999H6C5.44772 9.99999 5 9.55228 5 8.99999C5 8.44771 5.44772 7.99999 6 7.99999H8.96922L10.0299 3.75746C10.1638 3.22166 10.7067 2.8959 11.2425 3.02985ZM10.5308 9.99999L9.53078 14H13.4692L14.4692 9.99999H10.5308Z">
                            </path>
                        </svg>
                        interview
                    </a>
                </div>
                <div class="newest-posts-contact">
                    <p class="newest-posts-contact-number">
                        <span class="newest-posts-contact-text">Trả lời&nbsp;
                            <span>{{ $value['Upvotes'] }}</span></span>
                    </p>
                    <p class="newest-posts-contact-last-seen">
                        <span>4 ngày trước</span>
                        <span>&nbsp;•&nbsp;</span>
                        <span>Lượt xem&nbsp;
                            <span>{{ $value['View'] }}</span>
                        </span>
                    </p>
                </div>
            </a>
            @endforeach
            <!-- end newest posts -->
        </div>
    </div>
@endsection
