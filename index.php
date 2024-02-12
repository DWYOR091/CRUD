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

<body>
    <a href="logout.php">LOGOUT</a>
    <?php
    session_start();
    echo $_SESSION['username']; ?>
    <div class="container">

        <header>
            <!-- Nav tabs -->
            <ul class="nav nav-pills" style="background-color: yellow; border: 1px solid black; border-radius: 10px"
                id="" role="">
                <li class="nav-item" style="color: white" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                        type="button">
                        Data Mhs
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">
                        Input Data
                    </button>
                </li>
            </ul>
        </header>
        <main>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive">
                        <table class="table table-primary mt-1">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Kegiatan</th>
                                    <th scope="col">Dekripsi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $data = mysqli_query($conn, "SELECT * FROM todo");
                                foreach ($data as $d) {
                                ?>
                                <tr class="">
                                    <td scope="row"><?= $d['no'] ?></td>
                                    <td><?= $d['nama_kegiatan'] ?></td>
                                    <td><?= $d['deksripsi'] ?></td>
                                    <td><a href="edit.php?no=<?= $d['no'] ?>" class="btn btn-warning">Edit</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form action="tambahData.php" method="POST">
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Kegiatan</label>
                            <input type="text" class="form-control" name="nama" id="" aria-describedby="helpId"
                                placeholder="" />
                        </div>
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="" class="form-label">Deksripsi</label>
                                <textarea class="form-control" name="deksripsi" id="" rows="3"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="submit" class="btn btn-warning">Reset</button>
                    </form>
                </div>
                <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                    <h4 class="mt-2">Edit Data</h4>
                    <form action="tambahData.php" method="POST">
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Kegiatan</label>
                            <input type="text" class="form-control" name="nama" id="" aria-describedby="helpId"
                                placeholder="" />
                        </div>
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="" class="form-label">Deksripsi</label>
                                <textarea class="form-control" name="deksripsi" id="" rows="3"></textarea>
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