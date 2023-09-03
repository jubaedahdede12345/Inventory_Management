<!-- page header -->
<header id="home" class="header">
  <div class="overlay"></div>
  <div class="header-content container">
    <h1 class="header-title">
      <span class="up">Welcome,</span>
      <span class="down">
        <?= $this->session->userdata('name') ?>!
      </span>
    </h1>
    <p class="header-subtitle">Aplikasi Inventory Management</p>

    <button class="btn-rounded btn btn-outline-primary mt-4"><a href="<?= base_url('user/setting') ?>"><i aria-hidden="true"></i> Setting</a></button>
    <button class="btn-rounded btn btn-outline-primary mt-4"><a href="<?= base_url('user/signout') ?>"><i aria-hidden="true"></i> Sign Out</a></button>


  </div>
</header><!-- end of page header -->

<!-- about section -->
<section class="section pt-0" id="about">
  <!-- container -->
  <div class="container text-center">
    <!-- about wrapper -->
    <div class="about">
      <div class="about-img-holder">
        <img src="assets/upload/user/img/logo_itg.png" class="about-img"
          alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
      </div>
      <div class="about-caption">
        <p class="section-subtitle">Mengapa Manajemen Persediaan Penting?</p>
        <h2 class="section-title mb-3">Manajemen Persediaan Penting karena:</h2>
        <p>
          Operasional yang Dioptimalkan: Manajemen persediaan yang tepat memastikan bahwa produk yang tepat tersedia
          pada waktu yang tepat. Ini menghindari gangguan dalam produksi atau penjualan akibat kelangkaan atau
          keterlambatan persediaan.

          <br>
          Efisiensi Biaya: Mengelola tingkat persediaan membantu meminimalkan biaya yang terkait dengan kelebihan stok
          atau penyimpanan persediaan yang berlebihan. Ini juga mengurangi kebutuhan akan pesanan darurat, yang dapat
          mahal.

          <br>
          Kepuasan Pelanggan: Memiliki produk yang tepat dalam persediaan berarti Anda dapat memenuhi pesanan pelanggan
          dengan cepat, yang meningkatkan kepuasan dan loyalitas pelanggan.

          <br>
          Arus Kas: Persediaan yang berlebihan mengikat modal yang bisa digunakan di tempat lain. Manajemen persediaan
          yang efektif membantu menjaga arus kas yang sehat dengan mengoptimalkan perputaran persediaan.
        </p>
        <button class="btn-rounded btn btn-outline-primary mt-4"><a href="<?=base_url('user/tabel_barangmasuk');?>">Tabel Barang Masuk</a></button>
        <button class="btn-rounded btn btn-outline-primary mt-4"><a href="<?=base_url('user/tabel_barangkeluar');?>">Tabel Barang Keluar</a></button>
      </div>
    </div><!-- end of about wrapper -->
  </div><!-- end of container -->
</section> <!-- end of about section -->