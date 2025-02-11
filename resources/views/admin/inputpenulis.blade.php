@extends("layout.etmint")

@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <h2>Input Penulis Buku </h2>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="namaBuku" class="form-label">Nama Penulis</label>
                        <input type="text" class="form-control" name="nama" >
                    </div>
                    <div class="mb-3">
                        <label for="nmpengarang" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" name="desk" >
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Input Penulis Buku" class="btn btn-primary" name="btnInputPenulis">
                    </div>

@endsection