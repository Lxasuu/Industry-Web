<!-- Karya Mahasiswa Section -->
<style>
    .karya-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        overflow: hidden;
        border-radius: 1rem;
    }

    .karya-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.1);
    }

    .karya-img-wrapper {
        position: relative;
        overflow: hidden;
        aspect-ratio: 16/10;
    }

    .karya-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .karya-card:hover .karya-img {
        transform: scale(1.1);
    }

    .karya-badge {
        position: absolute;
        top: 1rem;
        left: 1rem;
        z-index: 2;
        padding: 0.5rem 1rem;
        border-radius: 50rem;
        font-weight: 600;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .karya-date {
        font-size: 0.85rem;
        color: #6c757d;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 0.75rem;
    }

    .btn-read-more {
        font-weight: 600;
        color: var(--bs-primary);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: gap 0.3s ease;
    }

    .btn-read-more:hover {
        gap: 0.75rem;
        color: var(--bs-primary);
    }

    .hero-karya {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 100px 0;
        margin-bottom: 60px;
        position: relative;
        overflow: hidden;
    }

    .hero-karya::before {
        content: '';
        position: absolute;
        top: -50px;
        right: -50px;
        width: 200px;
        height: 200px;
        background: rgba(9, 200, 44, 0.05);
        border-radius: 50%;
    }
</style>

<section class="hero-karya">
    <div class="container text-center">
        <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill mb-3">Portfolio Mahasiswa</span>
        <h1 class="display-4 fw-bold mb-3">Karya & Inovasi Mahasiswa</h1>
        <p class="lead text-muted mx-auto" style="max-width: 700px;">
            Menampilkan hasil riset, proyek kreatif, dan solusi inovatif dari mahasiswa Teknik Industri yang siap memberikan kontribusi nyata bagi industri dan masyarakat.
        </p>
    </div>
</section>

<section class="pb-10">
    <div class="container">
        <!-- Optional Filter -->
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-10">
            <button class="btn btn-primary rounded-pill px-4">Semua</button>
            <button class="btn btn-outline-secondary rounded-pill px-4">Otomasi</button>
            <button class="btn btn-outline-secondary rounded-pill px-4">Logistik</button>
            <button class="btn btn-outline-secondary rounded-pill px-4">Ergonomi</button>
            <button class="btn btn-outline-secondary rounded-pill px-4">IoT</button>
        </div>

        <div class="row g-7">
            <!-- Item 1: Otomasi -->
            <div class="col-lg-4 col-md-6">
                <article class="card h-100 karya-card shadow-sm">
                    <div class="karya-img-wrapper">
                        <span class="badge bg-success karya-badge">Otomasi</span>
                        <img src="./assets/images/karya/automation.png" class="karya-img" alt="Robot Antar Barang">
                    </div>
                    <div class="card-body p-5">
                        <div class="karya-date">
                            <i class="bi bi-calendar-event"></i>
                            12 April 2024
                        </div>
                        <h3 class="h4 fw-bold mb-3">Prototipe Robot AGV untuk Efisiensi Line Produksi</h3>
                        <p class="text-muted mb-4">
                            Inovasi robot pengantar barang otomatis (AGV) yang dirancang untuk mempercepat perpindahan material antar stasiun kerja di pabrik perakitan.
                        </p>
                        <a href="#" class="btn-read-more">
                            Baca Selengkapnya
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>

            <!-- Item 2: Logistik -->
            <div class="col-lg-4 col-md-6">
                <article class="card h-100 karya-card shadow-sm">
                    <div class="karya-img-wrapper">
                        <span class="badge bg-info karya-badge">Logistik</span>
                        <img src="./assets/images/karya/logistics.png" class="karya-img" alt="Smart Logistics Dashboard">
                    </div>
                    <div class="card-body p-5">
                        <div class="karya-date">
                            <i class="bi bi-calendar-event"></i>
                            05 April 2024
                        </div>
                        <h3 class="h4 fw-bold mb-3">Sistem Monitoring Inventori Warehouse Berbasis Cloud</h3>
                        <p class="text-muted mb-4">
                            Dashboard cerdas yang mampu memantau stok barang secara real-time dan memberikan prediksi kebutuhan stok menggunakan algoritma data science.
                        </p>
                        <a href="#" class="btn-read-more">
                            Baca Selengkapnya
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>

            <!-- Item 3: Ergonomi -->
            <div class="col-lg-4 col-md-6">
                <article class="card h-100 karya-card shadow-sm">
                    <div class="karya-img-wrapper">
                        <span class="badge bg-warning text-dark karya-badge">Ergonomi</span>
                        <img src="./assets/images/karya/ergonomics.png" class="karya-img" alt="Ergonomic Chair Prototype">
                    </div>
                    <div class="card-body p-5">
                        <div class="karya-date">
                            <i class="bi bi-calendar-event"></i>
                            28 Maret 2024
                        </div>
                        <h3 class="h4 fw-bold mb-3">Redesain Stasiun Kerja Berbasis Antropometri Pekerja</h3>
                        <p class="text-muted mb-4">
                            Penelitian tentang optimalisasi desain kursi dan meja kerja untuk mengurangi risiko Musculoskeletal Disorders (MSDs) bagi operator industri.
                        </p>
                        <a href="#" class="btn-read-more">
                            Baca Selengkapnya
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>

            <!-- Item 4: IoT -->
            <div class="col-lg-4 col-md-6">
                <article class="card h-100 karya-card shadow-sm">
                    <div class="karya-img-wrapper">
                        <span class="badge bg-danger karya-badge">IoT</span>
                        <img src="./assets/images/karya/iot.png" class="karya-img" alt="Smart Energy IoT">
                    </div>
                    <div class="card-body p-5">
                        <div class="karya-date">
                            <i class="bi bi-calendar-event"></i>
                            15 Maret 2024
                        </div>
                        <h3 class="h4 fw-bold mb-3">Implementasi Sensor IoT untuk Penghematan Energi</h3>
                        <p class="text-muted mb-4">
                            Perangkat keras dan lunak yang terintegrasi untuk mematikan mesin industri secara otomatis saat tidak digunakan guna menekan biaya listrik.
                        </p>
                        <a href="#" class="btn-read-more">
                            Baca Selengkapnya
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>
            
            <!-- Item 5: Manufaktur (Reuse one image for variety in layout) -->
            <div class="col-lg-4 col-md-6">
                <article class="card h-100 karya-card shadow-sm">
                    <div class="karya-img-wrapper">
                        <span class="badge bg-primary karya-badge">Manufaktur</span>
                        <img src="./assets/images/karya/automation.png" class="karya-img" alt="Optimasi Lini Produksi">
                    </div>
                    <div class="card-body p-5">
                        <div class="karya-date">
                            <i class="bi bi-calendar-event"></i>
                            02 Maret 2024
                        </div>
                        <h3 class="h4 fw-bold mb-3">Simulasi Optimasi Tata Letak Pabrik (Facility Layout)</h3>
                        <p class="text-muted mb-4">
                            Penerapan Lean Manufacturing untuk mengurangi pemborosan waktu perpindahan material dengan mengubah tata letak mesin produksi.
                        </p>
                        <a href="#" class="btn-read-more">
                            Baca Selengkapnya
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>

            <!-- Item 6: Bisnis -->
            <div class="col-lg-4 col-md-6">
                <article class="card h-100 karya-card shadow-sm">
                    <div class="karya-img-wrapper">
                        <span class="badge bg-secondary karya-badge">Sistem Informasi</span>
                        <img src="./assets/images/karya/logistics.png" class="karya-img" alt="ERP Solution">
                    </div>
                    <div class="card-body p-5">
                        <div class="karya-date">
                            <i class="bi bi-calendar-event"></i>
                            20 Februari 2024
                        </div>
                        <h3 class="h4 fw-bold mb-3">Pengembangan Aplikasi ERP Sederhana untuk UMKM</h3>
                        <p class="text-muted mb-4">
                            Membantu pelaku usaha mikro dalam mengelola pesanan, stok, dan laporan keuangan secara terintegrasi melalui satu aplikasi mobile.
                        </p>
                        <a href="#" class="btn-read-more">
                            Baca Selengkapnya
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>
        </div>

        <!-- Pagination -->
        <nav class="mt-10">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link rounded-circle mx-1" href="#" tabindex="-1" aria-disabled="true">
                        <i class="bi bi-chevron-left"></i>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link rounded-circle mx-1" href="#">1</a></li>
                <li class="page-item"><a class="page-link rounded-circle mx-1" href="#">2</a></li>
                <li class="page-item"><a class="page-link rounded-circle mx-1" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link rounded-circle mx-1" href="#">
                        <i class="bi bi-chevron-right"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</section>
