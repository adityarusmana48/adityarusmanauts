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
        <form method="post" action="konfirmasicontact.php">
        <div class="form-group">
                <label>id</label>
                <input class="form-control" type="text" name="id_contact">
            </div>
        <div class="form-group">
                <label>google</label>
                <input class="form-control" type="text" name="google">
            </div>
        <div class="form-group">
                <label>youtube</label>
                <input class="form-control" type="textarea" name="youtube">
            </div>
            <div class="form-group">
                <label>facebook</label>
                <input class="form-control" type="textarea" name="facebook">
            </div>
            <div class="form-group">
                <label>instagram</label>
                <input class="form-control" type="textarea" name="instagram">
            </div>
        <div class="form-group">
                <label>Upload Foto</label>
                <input class="form-control" type="file" name="gambar">
            </div>
                <input class="btn btn-primary" type="submit" name="tombolSubmit" value="Daftar">   
        </form>
    </div>
    </body>
</html>