<!-- HEADER -->
<?php include "layout/header.html" ?>
<title>Services - hykmlys.</title>
<!-- HEADER END -->


<main id="main">

  <!-- SERVICES -->
  <div class="site-section">
    <div class="container">
      <div class="row mb-4 align-items-center">
        <div class="col-md-6" data-aos="fade-up">
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
            echo '<div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-5">';
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