<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script src="{{ asset('js/home/home.js') }}"></script>
    <title>Homepage</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid header-brand">
                <a class="navbar-brand" href="/">ITBlog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/blog">Blogs</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/trending">Treding</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/q&a">Q&A in Development</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/news">News</a></li>
                                <li><a class="dropdown-item" href="/developer">Developer</a></li>
                                <li><a class="dropdown-item" href="/tools">Tools</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <div class="personal-auth">
                        <a href="/login" class="btn btn-outline-success" role="button">Login</a>
                        <a href="/sign-up" class="btn btn-outline-success" role="button">Sign up</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- start slideshow -->
        <div class="silde-loader">
            <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{ asset('img/img-1.png') }}" class="d-block w-100" alt="IMG-1">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('img/img-2.png') }}" class="d-block w-100" alt="IMG-2">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('img/img-5.png') }}" class="d-block w-100" alt="IMG-2">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- end slideshow -->

        <!-- start features -->
        <div class="features">
            <div class="features-item">
                <div class="card feature-card">
                    <div class="card-body body">
                        <div class="row">
                            <div class="col-8 feature-content">
                                <h5 class="card-title">Accuracy</h5>
                                <p class="card-text">The information about IT trusted is here</p>
                            </div>
                            <div class="col-4 feature-image">
                                <img src="{{ asset('img/img-feature-2.jpeg') }}" alt="Image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="features-item">
                <div class="card feature-card">
                    <div class="card-body body">
                        <div class="row">
                            <div class="col-8 feature-content">
                                <h5 class="card-title">Fast</h5>
                                <p class="card-text">The information always update fastest</p>
                            </div>
                            <div class="col-4 feature-image">
                                <img src="{{ asset('img/img-feature-1.png') }}" alt="Image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="features-item">
                <div class="card feature-card">
                    <div class="card-body body">
                        <div class="row">
                            <div class="col-8 feature-content">
                                <h5 class="card-title">Community</h5>
                                <p class="card-text">With large community, you can leave your problem here to have the solution</p>
                            </div>
                            <div class="col-4 feature-image">
                                <img src="{{ asset('img/img-feature-3.gif') }}" alt="Image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end features -->
    </main>

    <footer>
        <div class="footer-title">
            <h1>Totally <span>FREE</span></h1>
        </div>
        <div class="footer-content">Go faster with ITBlog</div>
    </footer>
    <!-- start create account -->
    <div class="create-account">
            <a href="/sign-up" class="btn btn-create" tabindex="-1" role="button" aria-disabled="true">Start Create An Account</a>
        </div>
        <!-- end create account -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>
