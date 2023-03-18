<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../">
                    <span class="h1">CRUD</span>
                </a>
                <div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="card">
            <a href="{{ url('create') }}" type="button" class="btn btn-outline-primary">Create</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($post as $p)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->judul }}</td>
                        <td>{{ $p->isi }}</td>
                        <td>
                            <a class="btn btn-md btn-warning" href="{{ url('/edit/'. $p->id) }}">Edit</a>
                            <a class="btn btn-md btn-danger delete" data-id="{{ $p->id }}" data-nama="{{ $p->nama }}" href="#">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        </div>
    </div>
</body>
<script>
    $('.delete').click(function() {
        var data = $(this).attr('data-id');
        var ket = $(this).attr('data-nama');
        swal({
                title: "Yakin mau dihapus?",
                text: "kamu akan menghapus " + ket + " ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "delete/" + data + ""
                    swal("Data sudah dihapus jangan nyesal", {
                        icon: "success",
                    });
                } else {
                    swal("Ciee gak jadi dihapus");
                }
            });
    });
</script>

</html>