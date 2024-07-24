<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" style="background-color: white">
    <div class="container-fluid">

        <a class="navbar-brand mx-md me-auto" href="/" height="80">
            <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/logo/orange.png?raw=true"
                alt="" height="60" style="margin-left: 5vh">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <div class="container col-7">
                <div class="row d-flex justify-content-center">
                    <form action='{{ route('search') }}' method='GET' class="d-flex" role="search">
                        {{-- @csrf --}}
                        <input name='search' class="form-control" type="search" style="border-radius: 8px"
                            placeholder="" aria-label="Search">
                        <span class="search-button" style="border-radius: 8px">
                            <a type='submit' href="">
                                <i class="fa fa-search"></i>
                            </a>
                        </span>
                    </form>

                </div>
                <div class="row">
                    <ul class="navbar-nav d-flex justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/mylearning">My Learning</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/course/menu">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/bootcamp">Bootcamp</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- <a href="#" class="login-btn" style="margin-right: 5vh">Login</a> --}}
        @guest
        <div class="row">
            <div class="col-5">
                <a href="/login" type="button" class="btn btn-outline btn-sm login-btn">Login</a>
            </div>
            <div class="col-5">
                <a href="/register" type="button" class="btn btn-outline btn-sm regist-btn">Register</a>
            </div>
        </div>
        @else
        {{-- Tampilan saat sudah login --}}
        <a href="{{ route('profile.edit') }}">
            <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/icon/user.png?raw=true" alt="Profile" height="30" class="rounded-circle">
        </a>
        @endguest


    </div>
</nav>
