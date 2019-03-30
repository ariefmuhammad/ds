<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- Styles -->

        
   
        <style>
         
        </style>
    </head>
    <body>
        <div class="container">

        
        <small id="emailHelp" class="form-text text-muted">Tambah Mahasiswa</small>    
        <form method="post" action="tambahdata">
        {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Fakultas</label>
    <input type="text" name="fakultas" class="form-control" id="exampleInputPassword1" placeholder="Fakultas">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">prodi</label>
    <input type="text" name="prodi" class="form-control" id="exampleInputPassword1" placeholder="Prodi">
  </div>
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>
<br>

           
            <div class="row">
                <div class="col-md-12">
                    <h2>Daftar Mahasiswa</h2>
    <table id="test" class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Fakultas</th>
                <th>Prodi</th>
                <th>Option</th>
        </thead>
    </table>
                </div>
            </div>
        </div>


<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

@foreach($mahasiswa as $mahasiswas)
<!-- Modal -->
<div class="modal fade" id="exampleModal-{{ $mahasiswas->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Mahasiswa {{ $mahasiswas->nama }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('editdata', $mahasiswas->id) }}"  method="post">
      {{csrf_field()}}
          <!-- <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div> -->
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama:</label>
            <input class="form-control" id="message-text" name="nama" value="{{$mahasiswas->nama}}"></input>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Fakultas:</label>
            <input class="form-control" id="message-text" name="fakultas" value="{{$mahasiswas->fakultas}}"></input>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Prodi:</label>
            <input class="form-control" id="message-text" name="prodi" value="{{$mahasiswas->prodi}}"></input>
          </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endforeach



@foreach($mahasiswa as $mahasiswas)
<!-- Modal -->
<div class="modal fade" id="exampleModalHapus-{{ $mahasiswas->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Mahasiswa {{ $mahasiswas->nama }}</h5>

        <h3>Apakah anda yakin menghapus data ini ?</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('hapusdata', $mahasiswas->id) }}"  method="post">
      {{csrf_field()}}
          <!-- <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div> -->
          <!-- <div class="form-group">
            <label for="message-text" class="col-form-label">Nama:</label>
            <input class="form-control" id="message-text" name="nama" value="{{$mahasiswas->nama}}"></input>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Fakultas:</label>
            <input class="form-control" id="message-text" name="fakultas" value="{{$mahasiswas->fakultas}}"></input>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Prodi:</label>
            <input class="form-control" id="message-text" name="prodi" value="{{$mahasiswas->prodi}}"></input>
          </div> -->
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Hapus ?</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endforeach





  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>   



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#test').DataTable({
        "responsive": true,
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('manggildata') }}",
        "columns": [
            { "data": "DT_RowIndex", "name": 'id' },
            { "data": "nama", "name": 'nama' },
            { "data": "fakultas", "name": 'fakultas'},
            { "data": "prodi" , "name": 'prodi'},
            { "data": "option" , "name": 'option'}
        ]
    });
});
</script>


    </body>
</html>
