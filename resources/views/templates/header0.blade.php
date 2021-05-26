<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{asset('assets/images/logo.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#tentang">
                        <p>Tentang</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#caraKerja">
                        <p>Cara Kerja</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimoni">
                        <p>Testimonial</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">
                        <p>Kontak</p>
                    </a>
                </li>
                @auth
                <li class="nav-item">
                    <form action="{{route('user_dashboard')}}">
                        <button class="btn-dashboard">Dashboard</button>
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
</div>