<!-- HEADER -->
<?php include "layout/header.html" ?>
<title>About - hykmlys.</title>
<!-- HEADER END -->

<main id="main">
  <div class="site-section site-portfolio">
    <div class="container">
      <div class="row mb-5 align-items-end">
        <div class="col-md-6" data-aos="fade-up">
          <h2>About Me</h2>
          <p class="mb-0">
            My name is Haykal Kamal Ilyasa. a junior informatics & UI/UX
            design based in Indonesia with more than 2 years of experience.
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 ml-auto order-2" data-aos="fade-up">
          <h3 class="h3 mb-4">Skills</h3>
          <ul class="list-unstyled">
            <li class="mb-3">
              <div class="d-flex mb-1">
                <strong>WordPress</strong>
                <span class="ml-auto">85%</span>
              </div>
              <div class="progress custom-progress">
                <div
                  class="progress-bar"
                  role="progressbar"
                  style="width: 85%"
                  aria-valuenow="80"
                  aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
            </li>
            <li class="mb-3">
              <div class="d-flex mb-1">
                <strong>Photoshop</strong>
                <span class="ml-auto">96%</span>
              </div>
              <div class="progress custom-progress">
                <div
                  class="progress-bar"
                  role="progressbar"
                  style="width: 96%"
                  aria-valuenow="96"
                  aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
            </li>
            <li class="mb-3">
              <div class="d-flex mb-1">
                <strong>HTML5/CSS3</strong>
                <span class="ml-auto">90%</span>
              </div>
              <div class="progress custom-progress">
                <div
                  class="progress-bar"
                  role="progressbar"
                  style="width: 90%"
                  aria-valuenow="90"
                  aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
            </li>
            <li class="mb-3">
              <div class="d-flex mb-1">
                <strong>PHP</strong>
                <span class="ml-auto">80%</span>
              </div>
              <div class="progress custom-progress">
                <div
                  class="progress-bar"
                  role="progressbar"
                  style="width: 80%"
                  aria-valuenow="80"
                  aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
            </li>
            <li class="mb-3">
              <div class="d-flex mb-1">
                <strong>Figma</strong>
                <span class="ml-auto">100%</span>
              </div>
              <div class="progress custom-progress">
                <div
                  class="progress-bar"
                  role="progressbar"
                  style="width: 100%"
                  aria-valuenow="100"
                  aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
            </li>
            <li class="mb-3">
              <div class="d-flex mb-1">
                <strong>React</strong>
                <span class="ml-auto">88%</span>
              </div>
              <div class="progress custom-progress">
                <div
                  class="progress-bar"
                  role="progressbar"
                  style="width: 88%"
                  aria-valuenow="88"
                  aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
            </li>
          </ul>
        </div>

        <div class="col-md-7 mb-5 mb-md-0" data-aos="fade-up">
          <?php
          //koneksi
          include "database/koneksi.php";

          // Query untuk mengambil data profil
          $query = "SELECT * FROM profiles LIMIT 1"; // Ambil satu profil
          $result = mysqli_query($conn, $query);

          // Menampilkan data profil
          if (mysqli_num_rows($result) > 0) {
            $profile = mysqli_fetch_assoc($result);
            echo '<p><img src="' . htmlspecialchars($profile['image']) . '" alt="Image" class="img-fluid" /></p>';
            echo '<p>' . htmlspecialchars($profile['description']) . '</p>';
            echo '<p>' . htmlspecialchars($profile['additional_info']) . '</p>';
            echo '<p><a href="' . htmlspecialchars($profile['cv_link']) . '" target="_blank" class="readmore">Download my CV</a></p>';
          } else {
            echo '<p>Profil tidak ditemukan.</p>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- FOOTER -->
<?php include "layout/footer.html" ?>
<!-- FOOTER END -->