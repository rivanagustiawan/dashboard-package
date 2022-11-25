<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Dashboard Laporan</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item ">
              <a class="nav-link" href="/dashboard">Data Stok <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/data-barang">Data Barang</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container py-4 px-4 mt-1">
            <label for="formGroupExampleInput">Cabang : </label>
            <select name="cabang" id="cabang" class="form-control py-2">
                    <option defaulValue disabled selected>Pilih</option>
                    <option value="1">Pusat</option>
                    <option value="2">Cabang 1</option>
                    <option value="3">Cabang 2</option>
            </select>
            <hr>
        <table class="table table-striped" id="table_barang">
            <thead>
            <tr>
                <th scope="col">Nama Barang</th>
                <th scope="col">Stok</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody id='list_barang'>
            </tbody>
        </table>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $('#cabang').change(function(){
            var id = $(this).val();
            $_token = "{{ csrf_token() }}";
            $.ajax({
                headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
                url: "{{ url('/show-barang') }}",
                type: 'POST',
                cache: false,
                data: {  '_token': $_token, 'id' : id},
                success: function(data) {
                    $('#list_barang').html(data);
                }
            });
        });
    </script>
  </body>
</html>