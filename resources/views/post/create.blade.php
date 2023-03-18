<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    </head>
<body>
<form action="{{ url('/store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Isi</label>
        <input type="text" class="form-control" name="isi" id="isi" required>
    </div>
    <div>
        <input type="reset" class="btn btn-md btn-warning">
        <button type="submit" name="simpan" class="btn btn-md btn-primary">Simpan</button>
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
