<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>EDIT</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <form action="{{ url('/update') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $id }}">
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" value="{{ $dsh->nama }}" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Judul</label>
        <input type="text" class="form-control" name="judul" value="{{ $dsh->judul }}" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Isi</label>
        <input type="text" class="form-control" name="isi" value="{{ $dsh->isi }}" id="exampleInputPassword1">
    </div>
    <div>
        <input type="reset" class="btn btn-md btn-warning">
        <button type="submit" name="simpan" class="btn btn-md btn-primary">Simpan</button>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>