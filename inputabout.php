<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Konfirmasi Pendaftaran</title>
</head>
<body>

<div class="container">
        <h2>Pendaftaran</h2>
        <form method="post" action="konfirmasiabout.php">
        <div class="form-group">
                <label>id</label>
                <input class="form-control" type="text" name="id_about">
            </div>
        <div class="form-group">
                <label>nama</label>
                <input class="form-control" type="text" name="nama">
            </div>
        <div class="form-group">
                <label>Tentang</label>
                <input class="form-control" type="textarea" name="tentang">
            </div>
                <input class="btn btn-primary" type="submit" name="tombolSubmit" value="Daftar">   
        </form>
    </div>
    </body>
</html>