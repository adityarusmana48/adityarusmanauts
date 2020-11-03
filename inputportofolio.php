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
        <form method="post" action="konfirmasiportofolio.php">
        <div class="form-group">
                <label>id</label>
                <input class="form-control" type="text" name="id_portofolio">
            </div>
        <div class="form-group">
                <label>nonakademik1</label>
                <input class="form-control" type="text" name="nonakademik1">
            </div>
        <div class="form-group">
                <label>nonakademik2</label>
                <input class="form-control" type="text" name="nonakademik2">
            </div>
            <div class="form-group">
                <label>nonakademik3</label>
                <input class="form-control" type="text" name="nonakademik3">
            </div>
            <div class="form-group">
                <label>akademik1</label>
                <input class="form-control" type="text" name="akademik1">
            </div>
        <div class="form-group">
                <label>akademik2</label>
                <input class="form-control" type="text" name="akademik2">
            </div>
            <div class="form-group">
                <label>akademik3</label>
                <input class="form-control" type="text" name="akademik3">
            </div>
                <input class="btn btn-primary" type="submit" name="tombolSubmit" value="Daftar">   
        </form>
    </div>
    </body>
</html>