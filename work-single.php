<!-- HEADER -->
<?php include "layout/header.html" ?>
<title>Estate - hykmlys.</title>
<!-- HEADER END -->

<main id="main">
  <div class="site-section">
    <div class="container">
      <div class="row mb-4 align-items-center">
        <div class="col-md-6" data-aos="fade-up">
          <h2>Work Single Page</h2>
          <p>
            Take a look at my other projects and see the variety of
            solutions I've crafted, each tailored to meet unique client
            needs.
          </p>
        </div>
      </div>
    </div>

    <div class="site-section pb-0">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-md-8" data-aos="fade-up">
            <?php
            include "database/koneksi.php";
            $sql = "SELECT * FROM images WHERE id = 1";
            $hasilgbr = mysqli_query(mysql: $conn, query: $sql);

            $gambar = mysqli_num_rows($hasilgbr);
            while ($data = mysqli_fetch_assoc($hasilgbr)) {
              echo '<img class="img-fluid" src="img/' . htmlspecialchars($data['filename']) . '" />';
            }
            ?>
          </div>
          <div
            class="col-md-3 ml-auto"
            data-aos="fade-up"
            data-aos-delay="100">
            <div class="sticky-content">
              <h3 class="h3 fw-bold">Estate</h3>
              <p class="mb-4"><span class="text-muted">WEBSITE</span></p>

              <div class="mb-5">
                <p>
                  The website design you provided features a clean, modern,
                  and professional layout, ideal for a real estate service
                  platform. The homepage showcases a prominent search bar
                  for finding properties based on location, type, and price,
                  making it user-friendly.
                </p>
              </div>

              <h4 class="h4 mb-3">What I did</h4>
              <ul class="list-unstyled list-line mb-5">
                <li>Design</li>
                <li>HTML5/CSS3</li>
                <li>Figma</li>
                <li>Logo</li>
              </ul>

              <p><a href="https://www.rumah123.com/en/" class="readmore" target="_blank">Visit Website</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section pb-0">
      <div class="container">
        <div class="row justify-content-center text-center mb-4">
          <div class="col-5">
            <h3 class="h3 heading">More Works</h3>
            <p>
              Take a look at my other projects and see the variety of
              solutions I've crafted.
            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <?php
          // Koneksi ke database
          include "database/koneksi.php";

          // Query untuk mengambil data gambar
          $query = "SELECT * FROM images";
          $result = mysqli_query(mysql: $conn, query: $query);

          // Menampilkan gambar
          if (mysqli_num_rows($result) >= 1) {
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
  </div>

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