<style>
    header {
        background-color: rgb(139, 153, 193);
    }

        a {
        font-family: "Rubik", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
    }
</style>
<header class="p-3 shadow sticky-top">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="beranda" class="nav-link px-2 text-white">BERANDA</a></li>
                <li><a href="fasilitas" class="nav-link px-2 text-white">FASILITAS</a></li>
                <li><a href="jurusan" class="nav-link px-2 text-white">JURUSAN</a></li>
                <li><a href="industri" class="nav-link px-2 text-white">INDSUTRI</a></li>
                <li><a href="eskul" class="nav-link px-2 text-white">EKSKUL</a></li>
                <li><a href="artikel" class="nav-link px-2 text-white">ARTIKEL</a></li>
            </ul>

            <div class="text-end">
                @guest
                <li style="list-style: none"><a class="btn btn-outline-light" href="{{url('login')}}" class="text-white">Login</a>
                    <a class="btn btn-outline-light" href="{{url('register')}}" class="text-white">Register</a>
                </li>
                @else
                {{-- <h4 class="text-white" style="color: white;">{{Auth::user()->name}}</h4> --}}
                <li><a class="btn btn-outline-light" href="{{url('logout')}}" class="text-white"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </li>
                {{-- form untuk logout --}}
                <form action="{{route('logout')}}" method="POST" id="logout-form">
                    @csrf
                </form>
                @endguest
            </div>
        </div>
    </div>
</header>
