<!-- HEADER -->
<?php include "layout/header.html" ?>
<title>Works - hykmlys.</title>
<!-- HEADER END -->

<main id="main">
  <div class="site-section site-portfolio">
    <div class="container">
      <div class="row mb-5 align-items-end">
        <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
          <h2>Works</h2>
          <p class="mb-0">
            The projects I have worked on cover various fields, web application development to user interface design.
          </p>
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






<!-- CADANGAN -->
<!-- <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
          <a href="work-single.php" class="item-wrap fancybox">
            <div class="work-info">
              <h3>Estate</h3>
              <span>website</span>
            </div>
            <img class="img-fluid" src="img/prop.png" />
          </a>
        </div>
        <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
          <a href="work-single.php" class="item-wrap fancybox">
            <div class="work-info">
              <h3>Cita Indo</h3>
              <span>website</span>
            </div>
            <img class="img-fluid" src="img/cita.png" />
          </a>
        </div>
        <div class="item app col-sm-6 col-md-4 col-lg-4 mb-4">
          <a href="work-single.php" class="item-wrap fancybox">
            <div class="work-info">
              <h3>Medicine</h3>
              <span>application</span>
            </div>
            <img class="img-fluid" src="img/sakit.jpg" />
          </a>
        </div>
        <div class="item app col-sm-6 col-md-4 col-lg-4 mb-4">
          <a href="work-single.php" class="item-wrap fancybox">
            <div class="work-info">
              <h3>BPOM Mobile</h3>
              <span>Application</span>
            </div>
            <img class="lazyload img-fluid" src="img/mockup.png" />
          </a>
        </div>
        <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
          <a href="work-single.php" class="item-wrap fancybox">
            <div class="work-info">
              <h3>Sign in Sportzy</h3>
              <span>website</span>
            </div>
            <img class="img-fluid" src="img/sportzy.png" />
          </a>
        </div>
        <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
          <a href="work-single.php" class="item-wrap fancybox">
            <div class="work-info">
              <h3>Alinea Fest 1</h3>
              <span>website</span>
            </div>
            <img class="img-fluid" src="img/ajf.jpg" />
          </a>
        </div>
        <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
          <a href="work-single.php" class="item-wrap fancybox">
            <div class="work-info">
              <h3>Alinea Fest</h3>
              <span>website</span>
            </div>
            <img class="img-fluid" src="img/ajff.jpg" />
          </a>
        </div>
        <div class="item dash col-sm-6 col-md-4 col-lg-4 mb-4">
          <a href="work-single.php" class="item-wrap fancybox">
            <div class="work-info">
              <h3>Cusmmors</h3>
              <span>dashboard</span>
            </div>
            <img class="img-fluid" src="img/dashbord.png" />
          </a>
        </div>
        <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
          <a href="work-single.php" class="item-wrap fancybox">
            <div class="work-info">
              <h3>Montesse Steak House</h3>
              <span>Website</span>
            </div>
            <img class="lazyload img-fluid" src="img/steaks.png" />
          </a>
        </div> -->