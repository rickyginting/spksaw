<!DOCTYPE html>
<html lang="en">
    <?php require "layout/head.php";?>

    <body>
        <div id="app">
            <?php require "layout/sidebar.php";?>
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>
                <div class="page-heading">
                    <h3>Dashboard</h3>
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Sistem Pendukung Keputusan Manajer IT Terbaik</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">
                                            Metode Simple Additive Weighting (SAW) sering juga dikenal istilah metode
                                            penjumlahan terbobot. Konsep dasar metode SAW adalah mencari penjumlahan
                                            terbobot dari rating kinerja pada setiap alternatif pada semua atribut
                                            (Fishburn 1967). SAW dapat dianggap sebagai cara yang paling mudah dan
                                            intuitif untuk menangani masalah Multiple Criteria Decision-Making MCDM,
                                            karena fungsi linear additive dapat mewakili preferensi pembuat keputusan
                                            (Decision-Making, DM). Hal tersebut dapat dibenarkan, namun, hanya ketika
                                            asumsi preference independence (Keeney & Raiffa 1976) atau preference
                                            separability (Gorman 1968) terpenuhi.
                                        </p>
                                        <hr>
                                        <p class="card-text">
                                            Langkah Penyelesaian Simple Additive Weighting (SAW) adalah sebagai berikut
                                            :
                                        </p>
                                        <ol type="1">
                                            <li>Menentukan kriteria-kriteria yang akan dijadikan acuan dalam pengambilan
                                                keputusan, yaitu Ci</i>
                                            <li>Menentukan rating kecocokan setiap alternatif pada setiap kriteria (X).
                                            </li>
                                            <li>Membuat matriks keputusan berdasarkan kriteria(Ci), kemudian melakukan
                                                normalisasi matriks berdasarkan persamaan yang disesuaikan dengan jenis
                                                atribut (atribut keuntungan ataupun atribut biaya) sehingga diperoleh
                                                matriks ternormalisasi R.</li>
                                            <li>Hasil akhir diperoleh dari proses perankingan yaitu penjumlahan dari
                                                perkalian matriks ternormalisasi R dengan vektor bobot sehingga
                                                diperoleh nilai terbesar yang dipilih sebagai alternatif terbaik
                                                (Ai)sebagai solusi</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <?php require "layout/footer.php";?>
            </div>
        </div>
        <?php require "layout/js.php";?>
    </body>

</html>