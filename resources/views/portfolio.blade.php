<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arya | Portfolio Mahasiswa Sistem Informasi</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sora:wght@500;700&family=Source+Sans+3:wght@400;600&display=swap">
   @vite('resources/sass/app.scss')
</head>
<body>

    <nav class="navbar fixed-top navbar-expand-lg bg-brand" data-bs-theme="dark">
        <div class="container py-2 px-4">
            <a href="#hero" class="navbar-brand mb-0 h1 d-flex align-items-center">
                <img class="img-fluid" src="{{ Vite::asset('resources/images/fotoFormal.jpeg') }}" alt="foto Arya" style="width: 40px;">
                <span class="ms-2">I Nyoman Arya Purnadhi Djaya</span>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-label="Buka menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end bg-brand" id="offcanvasNavbar">
                <div class="offcanvas-header pb-0 px-4">
                    <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Tutup"></button>
                </div>
                <div class="offcanvas-body pt-0 px-4">
                    <hr class="d-lg-none text-white-50">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item"><a href="#about" class="nav-link">Tentang</a></li>
                        <li class="nav-item"><a href="#skills" class="nav-link">Keahlian</a></li>
                        <li class="nav-item"><a href="#projects" class="nav-link">Proyek</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <header class="bg-paper" id="hero">
        <div class="container py-5 px-4">
            <div class="row align-items-center">
                <div class="col-md-5 order-md-2 text-center text-md-end mb-4 mb-md-0">
                    <img class="img-fluid avatar" src="{{ Vite::asset('resources/images/fotoFormal.jpeg') }}" alt="foto arya">
                </div>
                <div class="col-md-7 order-md-1">
                    <h1 class="display-4 fw-bold">Haloo, perkenalkan nama saya Arya. Disini saya akan share beberapa project yang dimana saya merancang jaringan, database, dan antarmuka.</h1>
                    <p class="fs-5 mt-3 text-mute">Mahasiswa S1 Sistem Informasi di Telkom University Surabaya. Saya mengerjakan proyek kuliah dari konfigurasi server sampai desain UX, dan belajar paling cepat saat membangun sesuatu yang bisa dicoba.</p>
                    <div class="d-flex flex-column flex-md-row mt-4">
                        <a href="#projects" class="btn btn-sun btn-lg mb-3 me-md-3 px-4 py-3">Lihat proyek</a>
                        <a href="#contact" class="btn btn-outline-dark btn-lg mb-3 px-4 py-3">Hubungi saya</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>

        <section id="about">
            <div class="container py-5 px-4">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3"><i class="bi bi-person-fill fs-2 bg-warning py-2 px-3 rounded-3 text-dark"></i></div>
                        <h2 class="display-6">Tentang saya</h2>
                    </div>
                    <div class="col-lg-8">
                        <p class="fs-5">Saya kuliah di Program Studi S1 Sistem Informasi, Telkom University Surabaya, kelas IS-08-02. Mata kuliah saya mencakup jaringan komputer, basis data, analisis rantai pasok, desain UX, dan kewirausahaan.</p>
                        <p class="fs-5">Saya sering bekerja dalam kelompok tetap. Di sana saya belajar membagi tugas, menjaga tenggat, dan menjelaskan hasil kerja dengan bahasa yang jelas.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="bg-paper">
            <div class="container py-5 px-4">
                <div class="mb-3"><i class="bi bi-tools fs-2 bg-info py-2 px-3 rounded-3 text-white"></i></div>
                <h2 class="display-6 mb-4">Keahlian</h2>
                <div class="row">
                    <div class="col-md-4 skill-group mb-3">
                        <h3>Infrastruktur</h3>
                        <span class="skill-pill">Cisco Packet Tracer</span><span class="skill-pill">Rocky Linux</span><span class="skill-pill">Nginx</span><span class="skill-pill">BIND DNS</span><span class="skill-pill">Postfix</span>
                    </div>
                    <div class="col-md-4 skill-group mb-3">
                        <h3>Data dan web</h3>
                        <span class="skill-pill">MySQL</span><span class="skill-pill">HTML</span><span class="skill-pill">CSS</span><span class="skill-pill">Bootstrap 5</span>
                    </div>
                    <div class="col-md-4 skill-group mb-3">
                        <h3>Analisis dan desain</h3>
                        <span class="skill-pill">UML dan activity diagram</span><span class="skill-pill">Desain UX</span><span class="skill-pill">Value chain</span><span class="skill-pill">Pitch startup</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects">
            <div class="container py-5 px-4">
                <div class="mb-3"><i class="bi bi-folder-fill fs-2 bg-success py-2 px-3 rounded-3 text-white"></i></div>
                <h2 class="display-6 mb-4">Proyek</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card project-card h-100 bg-paper"><div class="card-body">
                            <div class="course">Jaringan Komputer</div>
                            <h3 class="h5 mt-1">Visualin Creative Studio</h3>
                            <p class="mb-0">Desain jaringan LAN untuk studio kreatif, disimulasikan di Cisco Packet Tracer sebagai proyek akhir.</p>
                        </div></div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card project-card h-100 bg-paper"><div class="card-body">
                            <div class="course">Basis Data</div>
                            <h3 class="h5 mt-1">LP Kerja</h3>
                            <p class="mb-0">Database MySQL untuk marketplace lowongan kerja, mencakup rancangan tabel dan relasinya.</p>
                        </div></div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card project-card h-100 bg-paper"><div class="card-body">
                            <div class="course">Kewirausahaan</div>
                            <h3 class="h5 mt-1">19JT</h3>
                            <p class="mb-0">Pitch startup marketplace pekerjaan, freelance, dan onsite untuk Indonesia, dikerjakan bersama tim YATIM.</p>
                        </div></div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card project-card h-100 bg-paper"><div class="card-body">
                            <div class="course">Desain UX</div>
                            <h3 class="h5 mt-1">E-commerce tanaman</h3>
                            <p class="mb-0">Fitur filter tingkat perawatan, widget pakar, dan pratinjau AR untuk toko tanaman online.</p>
                        </div></div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card project-card h-100 bg-paper"><div class="card-body">
                            <div class="course">Jaringan</div>
                            <h3 class="h5 mt-1">Web server dan DNS</h3>
                            <p class="mb-0">Web server Nginx dan DNS server BIND di Rocky Linux untuk domain lokal sendiri.</p>
                        </div></div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card project-card h-100 bg-paper"><div class="card-body">
                            <div class="course">Sistem Operasi</div>
                            <h3 class="h5 mt-1">Mail server dan firewall</h3>
                            <p class="mb-0">Postfix, Dovecot, dan firewalld di Rocky Linux, diuji dengan klien Thunderbird.</p>
                        </div></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="bg-paper">
            <div class="container py-5 px-4">
                <div class="mb-3"><i class="bi bi-envelope-fill fs-2 bg-danger py-2 px-3 rounded-3 text-white"></i></div>
                <h2 class="display-6 mb-3">Kontak</h2>
                <p class="fs-5">Kirim pesan jika Anda ingin berdiskusi atau bekerja sama.</p>

                <ul class="list-unstyled fs-5">
                    <li class="mb-2"><i class="bi bi-envelope me-2"></i><a href="mailto:purnadhiarya@gmail.com">purnadhiarya@gmail.com</a></li>
                    <li class="mb-2"><i class="bi bi-github me-2"></i><a href="https://github.com/purnadhiarya-hub">https://github.com/purnadhiarya-hub</a></li>
                    <li class="mb-2"><i class="bi bi-linkedin me-2"></i><a href="https://www.linkedin.com/in/arya-djaya-150abb449/">https://www.linkedin.com/in/arya-djaya-150abb449/</a></li>
                </ul>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="footer" class="bg-brand text-white py-4">
        <div class="container px-4 d-flex flex-column flex-md-row justify-content-between">
            <small>&copy; 2026 Arya, S1 Sistem Informasi, Telkom University Surabaya.</small>
            <small>Dibuat dengan <a href="https://getbootstrap.com">Bootstrap 5</a>.</small>
        </div>
    </footer>

  @vite('resources/js/app.js')
</body>
</html>
