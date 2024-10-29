<!-- HEADER -->
<?php include "layout/header.html" ?>
<title>hykmlys.</title>
<!-- HEADER END -->

<main id="main">
  <div class="site-section site-portfolio">
    <div class="container">
      <div class="row justify-content-between" data-aos="fade-down">
        <h1 class="subheader col-auto"><span class="text-info">HELLO!</span> I'M</h1>
        <h1 class="subheader col-auto">HAYKAL.</h1>
      </div>
      <div class="row justify-content-start" data-aos="fade-right">
        <h1 class="subheader col-auto">
          <span class="text-secondary">I DESIGN WEBSITES</span>
        </h1>
      </div>
      <div class="row justify-content-end" data-aos="fade-left">
        <h1 class="subheader col-auto">
          <span class="text-secondary">& APPS</span> THAT-
        </h1>
      </div>
      <div class="row justify-content-evenly mb-5" data-aos="fade-right">
        <h1 class="subheader col-auto">
          APPEAL <span class="text-info">VISUALLY.</span>
        </h1>
      </div>

      <!-- SELECT BANNER DATABASE  -->
      <div class="container">
        <div class="row">
          <?php
          include "database/koneksi.php";
          $sql = "SELECT * FROM uploadimg";
          $hasilgbr = mysqli_query(mysql: $conn, query: $sql);

          $gambar = mysqli_num_rows($hasilgbr);
          while ($data = mysqli_fetch_assoc($hasilgbr)) {
            echo '<div class="" data-aos="fade-up">';
            echo '<img class="img-fluid" src="img/' . htmlspecialchars($data['foto']) . '" />';
            echo '</div>';
          }
          ?>
        </div>
      </div>
      <!-- SELECT BANNER DATABASE END -->
    </div>
  </div>

  <!-- CONTENT -->
  <div class="site-section site-portfolio" id="porto">
    <div class="container">
      <div class="row mb-5 align-items-end">
        <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
          <h2>My works</h2>
          <p class="mb-0">Projects that I have worked on</p>
        </div>
        <div
          class="col-md-12 col-lg-6 text-left text-lg-right"
          data-aos="fade-up"
          data-aos-delay="100">
          <div id="filters" class="filters">
            <a href="#" data-filter="*" class="active">All</a>
            <a href="#" data-filter=".website">Website</a>
            <a href="#" data-filter=".application">Application</a>
            <a href="#" data-filter=".dashboard">Dashboard</a>
          </div>
        </div>
      </div>
      <div
        id="portfolio-grid"
        class="row no-gutter"
        data-aos="fade-up"
        data-aos-delay="200">

        <?php
        // Koneksi ke database
        include "database/koneksi.php";

        // Query untuk mengambil data gambar
        $query = "SELECT * FROM images";
        $result = mysqli_query(mysql: $conn, query: $query);

        // Menampilkan gambar
        if (mysqli_num_rows($result) > 0) {
          while ($data = mysqli_fetch_assoc($result)) {
            echo '<div class="item ' . htmlspecialchars($data['category']) . ' col-sm-6 col-md-4 col-lg-4 mb-4">';
            echo '<a href="work-single.php" class="item-wrap fancybox">';
            echo '<div class="work-info">';
            echo '<h3>' . htmlspecialchars($data['title']) . '</h3>';
            echo '<span>' . htmlspecialchars($data['category']) . '</span>';
            echo '</div>';
            echo '<img class="img-fluid" src="img/' . htmlspecialchars($data['filename']) . '" />';
            echo '</a>';
            echo '</div>';
          }
        } else {
          echo "<p>Tidak ada gambar yang tersedia.</p>";
        }
        ?>
      </div>
    </div>
  </div>
  <!-- CONTENT END -->


  <!-- SERVICES -->
  <div class="site-section">
    <div class="container">
      <div class="row justify-content-center text-center mb-4" data-aos="fade-up">
        <div class="col-4">
          <h3 class="h3 heading">My Services</h3>
          <p>
            Offering professional solutions to enhance your digital presence.
          </p>
        </div>
      </div>
      <div class="row" data-aos="fade-up">

        <?php
        // Koneksi ke database
        include "database/koneksi.php";

        // Query untuk mengambil data layanan
        $query = "SELECT * FROM services";
        $result = mysqli_query(mysql: $conn, query: $query);

        // Menampilkan layanan
        if (mysqli_num_rows($result) > 0) {
          while ($data = mysqli_fetch_assoc($result)) {
            echo '<div class="col-12 col-sm-6 col-md-6 col-lg-3">';
            echo '<span class="' . htmlspecialchars($data['icon']) . ' la-3x mb-4"></span>';
            echo '<h4 class="h4 mb-2">' . htmlspecialchars($data['title']) . '</h4>';
            echo '<p>' . htmlspecialchars($data['description']) . '</p>';
            echo '<ul class="list-unstyled list-line">';
            // Jika Anda ingin menambahkan fitur tambahan, Anda bisa menambahkan ul di sini
            echo '</ul>';
            echo '</div>';
          }
        } else {
          echo "<p>Tidak ada layanan yang tersedia.</p>";
        }
        ?>
      </div>
    </div>
  </div>
  <!-- SERVICES END -->


  <!-- TESTIMONIALS -->
  <div class="site-section pt-0">
    <div class="container">
      <div class="owl-carousel testimonial-carousel">

        <?php
        include "database/koneksi.php";
        $sql = "SELECT * FROM tetimonial";
        $hasil = mysqli_query(mysql: $conn, query: $sql);

        $jmlTestimonal = mysqli_num_rows($hasil);
        if ($jmlTestimonal > 0) {
          while ($row = mysqli_fetch_assoc($hasil)) {
        ?>
            <div class="testimonial-wrap">
              <div class="testimonial">
                <blockquote>
                  <p>
                    <?= $row["deskripsi"] ?>
                  </p>
                </blockquote>
                <p>
                  <?= $row["pengguna"] ?>
                </p>
              </div>
            </div>
        <?php
          }
        }
        ?>

      </div>
    </div>
  </div>
  <!-- TESTIMONIALS END -->
</main>


<!-- FOOTER -->
<?php include "layout/footer.html" ?>
<!-- FOOTER END -->