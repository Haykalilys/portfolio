<!-- HEADER -->
<?php include "layout/header.html" ?>
<title>Contact - hykmlys.</title>
<!-- HEADER END -->


<main id="main">

  <div class="site-section site-portfolio">
    <div class="container">

      <div class="row mb-5 align-items-end">
        <div class="col-md-6" data-aos="fade-up">
          <h2>Contact</h2>
          <p class="mb-0">Don’t hesitate to get in touch with me if you require any support or assistance. I’m here to help with whatever you might need.
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">

          <form action="forms/contactdata.php" method="post" role="form" class="php-email-form">

            <div class="row">
              <div class="col-md-6 form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <label for="name">Email</label>
                <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <div class="col-md-12 form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="col-md-12 form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" cols="30" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>


              <div class="col-md-12 mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <!-- <div class="sent-message">Your message has been sent. Thank you!</div> -->
              </div>

              <div class="col-md-6 form-group">
                <input type="submit" class="readmore d-block w-100" value="Send Message">
              </div>
            </div>

          </form>
        </div>

        <div class="col-md-4 ml-auto order-2" data-aos="fade-up">
          <ul class="list-unstyled">
            <?php
            // Koneksi ke database
            include "database/koneksi.php";

            // Query untuk mengambil data kontak
            $query = "SELECT * FROM contacts LIMIT 1"; // Ambil satu kontak
            $result = mysqli_query($conn, $query);

            // Menampilkan data kontak
            if (mysqli_num_rows($result) > 0) {
              $contact = mysqli_fetch_assoc($result);
              echo '<li class="mb-3">';
              echo '<strong class="d-block mb-1">Address</strong>';
              echo '<span>' . htmlspecialchars($contact['address']) . '</span>';
              echo '</li>';
              echo '<li class="mb-3">';
              echo '<strong class="d-block mb-1">Phone</strong>';
              echo '<span>' . htmlspecialchars($contact['phone']) . '</span>';
              echo '</li>';
              echo '<li class="mb-3">';
              echo '<strong class="d-block mb-1">Email</strong>';
              echo '<span>' . htmlspecialchars($contact['email']) . '</span>';
              echo '</li>';
            } else {
              echo '<li class="mb-3">Kontak tidak ditemukan.</li>';
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- FOOTER -->
<?php include "layout/footer.html" ?>
<!-- FOOTER END -->