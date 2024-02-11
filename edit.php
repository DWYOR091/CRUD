<!doctype html>
<html lang="en">

<head>
    <title>Halaman Utama</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <?php require "koneksiku.php"; ?>
</head>
<?php $no = isset($_GET['no']) ? mysqli_real_escape_string($conn, $_GET['no']) : '';  ?>

<body>
    <div class="container">

        <header>
            <!-- Nav tabs -->
            <ul class="nav nav-pills" style="background-color: yellow; border: 1px solid black; border-radius: 10px"
                id="" role="">
                <li class="nav-item" style="color: white" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                        type="button">
                        Edit Data
                    </button>
                </li>
            </ul>
        </header>
        <main>
            <!-- Tab panes -->
            <?php
            $data = $conn->query("SELECT * FROM todo where no=$no");
            $d = mysqli_fetch_assoc($data);
            // var_dump($d);
            ?>
            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                <h4 class="mt-2">Edit Data</h4>
                <form action="update.php" method="POST">
                    <input type="hidden" value="<?= $no ?>" name="no">
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Kegiatan</label>
                        <input type="text" class="form-control" name="nama" id="" aria-describedby="helpId"
                            placeholder="" value="<?= $d['nama_kegiatan']; ?>" />
                    </div>
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="" class="form-label">Deksripsi</label>
                            <textarea class="form-control" name="deksripsi" id=""
                                rows="3"><?= $d['deksripsi']; ?></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="submit" class="btn btn-warning">Reset</button>
                </form>
            </div>
    </div>
    </main>
    </div>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>