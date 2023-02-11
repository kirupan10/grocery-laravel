<body>

    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
                    data-toggle="collapse" href="#navbar-vertical"
                    style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
                    id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Dresses <i
                                    class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Men's Dresses</a>
                                <a href="" class="dropdown-item">Women's Dresses</a>
                                <a href="" class="dropdown-item">Baby's Dresses</a>
                            </div>
                        </div>
                        <a href="/mobile" class="nav-item nav-link">Mobile Phones</a>
                        <a href="/jewels" class="nav-item nav-link">Jewels</a>
                        <a href="/shoes" class="nav-item nav-link">Shoes</a>
                        <a href="/bags" class="nav-item nav-link">Bags</a>
                        <a href="/accerssories" class="nav-item nav-link">Accerssories</a>
                        <a href="/dress" class="nav-item nav-link">Dresses</a>
                        <a href="" class="nav-item nav-link">Blazers</a>
                        <a href="/jackets" class="nav-item nav-link">Jackets</a>
                        <a href="/shoes" class="nav-item nav-link">Shoes</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="/login" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold">Grocery</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="/" class="nav-item nav-link">Home</a>
                            <a href="/shop" class="nav-item nav-link ">Shop</a>
                            <a href="/contact" class="nav-item nav-link">Contact</a>
                            <a href="/blogs" class="nav-item nav-link">Blogs</a>
                        </div>
                        @auth
                            <a href="/profile" class="nav-item nav-link">Profile</a>
                            <a href="/logout" class="nav-item nav-link">Logout</a>
                        @else
                            <a href="/login" class="nav-item nav-link">Login</a>
                            <a href="/register" class="nav-item nav-link">Register</a>
                        @endauth
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
