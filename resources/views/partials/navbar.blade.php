<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            ♡ KursusKu
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu"
            aria-controls="navbarMenu"
            aria-expanded="false"
            aria-label="Buka menu navigasi"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <div class="navbar-nav ms-auto align-items-lg-center">
                <a class="nav-link" href="{{ route('home') }}">
                    Beranda
                </a>

                <a class="nav-link" href="{{ route('enrollments.create') }}">
                    Pendaftaran
                </a>

                <a
                    class="btn btn-pink ms-lg-3 mt-2 mt-lg-0"
                    href="{{ route('enrollments.create') }}"
                >
                    Daftar Sekarang ♡
                </a>
            </div>
        </div>
    </div>
</nav>