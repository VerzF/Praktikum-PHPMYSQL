<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <br>
                <h4><center>Registrasi Akun PPDB</center></h4>
                <form method="POST" action="daftar.php">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="sandi">Password:</label>
                        <input type="password" class="form-control" id="sandi" name="sandi" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                    <br>
                    <br>
                </form>
            </div>
        </div>
    </div>
</body>
</html> 