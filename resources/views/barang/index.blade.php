<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>
    <title>Document</title>
</head>
<body>
    <div class="container text-center my-5">
    <a href="javascript:void(0)" data-toggle="modal" data-target="#staticBackdrop" class="btn btn-primary btn-sm">tambah data</a>
        <table id="table" class="table table-hover table-dark">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>nama barang</th>
                    <th>satuan</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
              
            </tbody>
        </table>
    </div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?= route('barang.add') ?>" method="POST">
              <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" name="nama_barang" id="nama_barang" class="form-control input-sm" >
                </div>
              <div class="form-group">
                  <label>Satuan</label>
                  <input type="text" name="satuan_barang" id="satuan_barang" class="form-control input-sm" >
                </div>
                <button type="button" name="button" class="btn btn-primary btn-sm">Understood</button>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            </form>
      </div>
    </div>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
    
    <script>
        $(function(){
            get();
        });
        function get(){
            $.ajax({
                url: '<?= route('barang.get') ?>',
                success: function(response){
                    $('#table tbody').html(response);
                }
            });
        }
        function destroy(id){
           $.ajax({
            url: '<?= route('barang.delete') ?>/'+id,
            dataType: 'json',
            success: function(response){
                if(response.success){
                    swal({
                        text: "Yakin Ingin Menghapus Data Ini ?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,})
                    .then((willDelete) => {
                        if (willDelete) {
                            swal(response.message, {
                            icon: "success",
                            });
                        get();
                        }
                    });
                }
            }
           });
        }
    </script>

</body>
</html>