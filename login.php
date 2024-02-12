<!doctype html>
<html lang="en">

<head>
    <title>LOGIN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="d-flex justify-content-center align-items-center">
            <div class="card">
                <img class="card-img-top" src="holder.js/100px180/" alt="Title" />
                <div class="card-body">
                    <p><?php
                        session_start();
                        if (isset($_SESSION['gagal'])) {
                            echo "<p>" . $_SESSION['gagal'] . "</p>";
                            // Hapus pesan error setelah ditampilkan
                            unset($_SESSION['gagal']);
                        }
                        ?></p>
                    <h4 class="card-title">LOGIN</h4>
                    <form action="masuk.php" method="POST">
                        <div>
                            <label for="">Username</label>
                            <input type="text" name="username">
                        </div>
                        <div>
                            <label for="">password</label>
                            <input type="password" name="password">
                        </div>
                        <div>
                            <button type="submit">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </main>
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