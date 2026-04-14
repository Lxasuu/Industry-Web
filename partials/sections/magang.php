<!-- Magang Section -->
<style>
    .intern-benefit-card {
        border-radius: 1.5rem;
        transition: all 0.3s ease;
    }
    .intern-benefit-card:hover {
        background-color: var(--bs-primary-subtle);
        transform: translateY(-5px);
    }
    .intern-step-icon {
        width: 50px;
        height: 50px;
        background: var(--bs-primary);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        position: relative;
        z-index: 2;
    }
    .intern-step-line::after {
        content: '';
        position: absolute;
        left: 25px;
        top: 50px;
        bottom: -30px;
        width: 2px;
        background: #e9ecef;
        z-index: 1;
    }
    .intern-step:last-child .intern-step-line::after {
        display: none;
    }
</style>

<!-- Hero Section -->
<section class="py-10 bg-light">
    <div class="container pb-lg-10">
        <div class="row align-items-center g-8">
            <div class="col-lg-6">
                <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill mb-3 text-uppercase fw-bold">Professional Experience</span>
                <h1 class="display-3 fw-bold mb-4">Membangun Karir Lebih Dini dengan <span class="text-primary">Program Magang</span></h1>
                <p class="lead text-muted mb-5">
                    Teknik Industri Politeknik META Industri memfasilitasi mahasiswa untuk terjun langsung ke dunia kerja melalui program magang di berbagai perusahaan manufaktur terkemuka.
                </p>
                <div class="d-flex gap-3">
                    <a href="#prosedur" class="btn btn-primary btn-lg px-5 rounded-pill">Lihat Prosedur</a>
                    <a href="kontak.php" class="btn btn-outline-dark btn-lg px-5 rounded-pill">Konsultasi</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="./assets/images/magang/factory.png" alt="Students in Factory" class="img-fluid rounded-5 shadow-lg">
                    <div class="position-absolute bottom-0 start-0 translate-middle-x ms-8 mb-n5 d-none d-lg-block">
                        <div class="bg-white p-4 shadow rounded-4 border">
                            <h5 class="fw-bold mb-1">42+ Mitra</h5>
                            <p class="small text-muted mb-0">Perusahaan Industri Aktif</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-13">
    <div class="container">
        <div class="row mb-10 text-center">
            <div class="col-lg-8 mx-auto">
                <h2 class="fw-bold h1 mb-4">Mengapa Magang di Teknik Industri META?</h2>
                <p class="text-muted">Kami menjamin kualitas pengalaman kerja mahasiswa melalui kurikulum yang terintegrasi dengan kebutuhan nyata industri.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border p-5 intern-benefit-card text-center">
                    <div class="icon-shape icon-lg bg-primary-subtle text-primary rounded-circle mx-auto mb-4">
                        <i class="bi bi-briefcase-fill fs-3"></i>
                    </div>
                    <h4 class="fw-bold">Penempatan Langsung</h4>
                    <p class="text-muted">Mahasiswa tidak perlu mencari tempat magang sendiri, kami yang menyalurkan ke mitra industri kami.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border p-5 intern-benefit-card text-center">
                    <div class="icon-shape icon-lg bg-info-subtle text-info rounded-circle mx-auto mb-4">
                        <i class="bi bi-gear-wide-connected fs-3"></i>
                    </div>
                    <h4 class="fw-bold">Skill Teknis Nyata</h4>
                    <p class="text-muted">Mempelajari pengoperasian mesin, sistem produksi, dan manajemen industri secara langsung di lapangan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border p-5 intern-benefit-card text-center">
                    <div class="icon-shape icon-lg bg-warning-subtle text-warning rounded-circle mx-auto mb-4">
                        <i class="bi bi-person-check-fill fs-3"></i>
                    </div>
                    <h4 class="fw-bold">Peluang Kerja</h4>
                    <p class="text-muted">Banyak mahasiswa kami yang langsung direkrut menjadi karyawan tetap setelah menyelesaikan program magang.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-13 bg-light" id="prosedur">
    <div class="container">
        <div class="row align-items-center g-8">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="ps-lg-8">
                    <h2 class="fw-bold h1 mb-10">Tahapan Program Magang</h2>
                    
                    <div class="intern-step mb-8">
                        <div class="d-flex">
                            <div class="intern-step-line position-relative">
                                <div class="intern-step-icon">1</div>
                            </div>
                            <div class="ms-5">
                                <h4 class="fw-bold">Persiapan & Pembekalan</h4>
                                <p class="text-muted">Pelatihan soft skill dan pemantapan teknis sesuai standar perusahaan mitra sebelum terjun ke lapangan.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="intern-step mb-8">
                        <div class="d-flex">
                            <div class="intern-step-line position-relative">
                                <div class="intern-step-icon">2</div>
                            </div>
                            <div class="ms-5">
                                <h4 class="fw-bold">Penempatan di Industri</h4>
                                <p class="text-muted">Mahasiswa ditempatkan di posisi strategis sesuai minat dan bakat selama 3-6 bulan masa praktik.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="intern-step mb-8">
                        <div class="d-flex">
                            <div class="intern-step-line position-relative">
                                <div class="intern-step-icon">3</div>
                            </div>
                            <div class="ms-5">
                                <h4 class="fw-bold">Monitoring & Mentoring</h4>
                                <p class="text-muted">Dosen pembimbing dan mentor industri melakukan evaluasi berkala untuk memastikan target belajar tercapai.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="intern-step">
                        <div class="d-flex">
                            <div class="intern-step-line position-relative">
                                <div class="intern-step-icon">4</div>
                            </div>
                            <div class="ms-5">
                                <h4 class="fw-bold">Pelaporan & Konversi Nilai</h4>
                                <p class="text-muted">Penyusunan laporan akhir dan presentasi hasil magang yang akan dikonversi menjadi nilai akademik.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="./assets/images/magang/office.png" alt="Internship Collaboration" class="img-fluid rounded-5 shadow">
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-13">
    <div class="container">
        <div class="card bg-primary text-white p-10 rounded-5 border-0 shadow-lg text-center overflow-hidden position-relative">
            <div class="position-relative z-2">
                <h2 class="display-5 fw-bold mb-4">Siap Memulai Pengalaman Industrimu?</h2>
                <p class="lead mb-8 mx-auto" style="max-width: 600px;">Jangan lewatkan kesempatan untuk belajar langsung dari para profesional di kawasan industri terbesar se-Asia Tenggara.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="https://pmb-mip.politeknikmeta.ac.id/" class="btn btn-light btn-lg px-5 rounded-pill fw-bold text-primary">Daftar Sekarang</a>
                    <a href="kontak.php" class="btn btn-outline-light btn-lg px-5 rounded-pill fw-bold">Hubungi Kami</a>
                </div>
            </div>
            <!-- Decorative circle -->
            <div class="position-absolute top-0 start-0 translate-middle bg-white opacity-10" style="width: 300px; height: 300px; border-radius: 50%;"></div>
        </div>
    </div>
</section>
