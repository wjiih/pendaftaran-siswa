<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir Pendaftaran Siswa Siswa </title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
      }

      nav {
        height: 130px;
        background: linear-gradient(90deg, green, green);
      }

      form {
        display: inline-block;
      }

      input {
        box-shadow: 0px 0px 8px #ddd;
      }

      .hero {
  border-top: 3px solid black;
}
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand fs-2" href="#" style="padding: 10px"
          >Formulir Pendaftaran</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item fs-5">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="hero"></div>
    <form action="proses-pendaftran.php" method="POST" class="d-flex justify-content-center p-5 fs-4">
      <fieldset>
        <div class="mb-3">
          <label for="nama" class="form-label p-2">Nama Lengkap</label>
          <input
            type="text"
            name="nama"
            class="form-control"
            id="exampleFormControlInput1" required
          />
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label p-2"
            >Alamat</label
          >
          <textarea
          name="alamat"
            class="form-control"
            id="exampleFormControlTextarea1"
            rows="3" required
          ></textarea>
        </div>
        <div class="mb-3">
          <label for="jenis_kelamin" required>Jenis Kelamin</label>
          <label
            ><input
              type="radio"
              name="jenis_kelamin"
              value="laki-laki"
            /> Laki-laki</label
          >
          <label
            ><input
              type="radio"
              name="jenis_kelamin"
              value="perempuan"
            /> Perempuan</label
          >
        </div>
        <div class="mb-3">
        <label for="agama" class="p-2">Agama</label>
        <select class="form-select" name="agama" aria-label="Default select example" required>
          <option value="Islam">Islam</option>
        </select>
        </div>
        <div class="mb-3">
          <label for="sekolah_asal" class="form-label p-2">Sekolah Asal</label>
          <input
            type="text"
            name="sekolah_asal"
            class="form-control"
            id="exampleFormControlInput1" required
          />
        </div>
        <p>
          <input type="submit" value="Daftar" name="daftar" />
        </p>
      </fieldset>
    </form>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
