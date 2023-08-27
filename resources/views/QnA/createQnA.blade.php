@extends('layouts.app')

@section('title', 'Create Q&A')

@section('css-path')
    {{ asset('css/createQnA.css') }}
@endsection


@section('content')
<div class="content-container">
    <nav class="navbar-create">
        <div class="nav-content">
            <a href="javascript:history.back()">
                <button type="button" class="btn-back">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
            </a>
            <div class="finished-question">
                <button class="finished-save">
                    <span class="finished-text">Lưu</span>
                </button>
            </div>
        </div>
    </nav>
    <div class="link-and-image">
        <button type="button" class="btn-link">
            <i class="fa-solid fa-link"></i>
        </button>
        <button type="button" class="btn-img">
            <i class="fa-solid fa-image"></i>
        </button>
    </div>
    <div class="content-qna">
        <div class="content-main">
            <div class="qna-sharing">
                <label class="content-sharing">
                    <input type="checkbox" class="input-sharing">
                    <p class="text-sharing">Chia sẻ bài viết</p>
                </label>
            </div>
            <div class="content-title">
                <div class="content-title-content" role="button">
                    <i class="fa-regular fa-square-plus" style="color: #cbd5ff"></i>
                    <p class="content-title-text">Thêm tiêu đề</p>
                </div>

                <div class="cancel-section hidden">
                    <!-- <button class="cancel-button">Huỷ</button> -->
                    <div class="btn-cancel" role="button">
                        <i class="fa-regular fa-square-plus" style="color: #cbd5ff"></i>
                        <p class="content-title-text">Huỷ</p>
                    </div>
                    <span class="char-counter">0</span>
                </div>
                <textarea
                    id="title-text" rows="2" cols="50"
                    class="title hidden"
                    name="title"
                    placeholder="Hãy thêm tiêu đề.">
                </textarea>
            </div>
            <div class="content-split"></div>
            <textarea
                id="description" rows="4" cols="50"
                class="content-description"
                name="description"
                placeholder="Viết điều bạn muốn chia sẻ.">
            </textarea>
            <div class="content-split"></div>
        </div>
    </div>
</div>
@endsection
