<?php
session_start();
$title = "Aplikasi Data Siswa | LOGIN ";
include "./temp/header.php";

?>

<section class="container pt-5">
  <div class="card pt-5">
    <h1>HALAMAN LOGIN</h1>
    <?php if (isset($_SESSION["LOGIN SUCCESS"])) : ?>
        <div class="alert alert-success" role="alert">
          <?= $_SESSION["LOGIN SUCCESS"] ?>
        </div>
<?php session_unset();
endif ?>
    <?php if (isset($_SESSION["VALIDATION_LOGIN"])) : ?>
        <div class="alert alert-danger" role="alert">
          <?= $_SESSION["VALIDATION_LOGIN"] ?>
        </div>
<?php session_unset();
endif ?>
    <?php if (isset($_SESSION["VALIDATION_INPUT"])) : ?>
        <div class="alert alert-danger" role="alert">
          <?= $_SESSION["VALIDATION_INPUT"] ?>
        </div>
<?php session_unset();
endif ?>

      <form action="db/login.php" method="POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type
          type="email"
          name="email"
          class="form-control"
          placeholder="Please put your email here"
          id="exampleInputEmail1"
          aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type
          type="password"
          name="password"
          placeholder="*******"
          class="form-control"
          id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <p>
        Doesn't have an account?
        <a href="http://localhost/aplikasi_daftar_part2/register.php">Register</a>
      </p>
    </form>
  </div>
</section>

<?php include "./temp/footer.php";
