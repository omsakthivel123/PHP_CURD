<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- 
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.3/datatables.min.css" rel="stylesheet"> -->

    <title>DataTable CRUD</title>

</head>
<body>
    <!-- add data model -->
<div class="modal fade" id="AddDatasModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD DATAS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
      
<form id="savedata" method="POST">
                <div class="modal-body">
                  
                    <div class="alert alert-warning d-none" id="errormessage"></div>
                    <div class="mb-3">
                        <label for="name">NAME</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="email">EMAIL</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="phone">PHONE</label>
                        <input type="text" name="phone" id="phone" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Data</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- edit model -->
<div class="modal fade" id="EditDatasModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT DATAS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
<form id="updatedata" >
                <div class="modal-body">
                    <div class="alert alert-warning d-none" id="errormessage"></div>
                    
                    <input type="text" name="data_id" id="data_id">
                    <div class="mb-3">
                        <label for="name">NAME</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email">EMAIL</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="phone">PHONE</label>
                        <input type="text" name="phone" id="phone" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-target="#EditDatasModal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
            </form>
        </div>
    </div>
</div>


<h1 class="text-center">Datatable CRUD
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#AddDatasModal">
        Add Data
    </button>
</h1>

<div>
<table id="mytable" class="table table-success table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>PHONE</th>
      <th>ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php
  require "db.php";
  $result = mysqli_query($con, "SELECT * FROM data");
  if(mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $name = $row['name'];
          $email = $row['email'];
          $phone = $row['phone'];
  ?>
    <tr>
      <td><?php echo $id ?></td>
      <td><?php echo $name ?></td>
      <td><?php echo $email ?></td>
      <td><?php echo $phone ?></td>
      <td>
        <button type="button" value="<?php echo $id ?>" class="editdatabtn btn btn-success" >EDIT</button>
        <a href='delete1.php?del=<?php echo $id ?>' class="btn btn-danger">DELETE</a>
      </td>
    </tr>
  <?php
      }
  }
  ?>
  </tbody>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.3/datatables.min.js"></script> -->
<script>

    $(document).on('submit', '#savedata', function () {
        // e.preventDefault();
        var formdata = new FormData(this);
        formdata.append("save_datas", true);
        $.ajax({
            url: 'code.php',
            type: 'POST',
            data: formdata,
            processData: false,
            contentType: false,
            success: function (response) {
                var res = JSON.parse(response);
                if (res.status == 422) {
                    $('#errormessage').removeClass('d-none');
                    $('#errormessage').text(res.message);
                } else if (res.status == 200) {
                    $('#errormessage').addClass('d-none');
                    $('#errormessage').text('');
                    $('#AddDatasModal').modal('hide');
                    $('#savedata')[0].reset();
                    // Reload DataTable
                    //  $('#table').DataTable().ajax.reload();
                    $('#mytable').load(location.herf + " #mytable");
                }
            }
        });
    });

    $(document).on('click','.editdatabtn',function () {
        var data_id = $(this).val();
      
        $.ajax({
            url: "code.php?data_id="+ data_id,
            type: 'GET',
            success: function (response) {
                var res = JSON.parse(response);
                if (res.status == 422) {
                    alert(res.message);
                } else if (res.status == 200) {
                    
                    $('#data_id').val(res.data.id);
                    $('#name').val(res.data.name);
                    $('#email').val(res.data.email);
                    $('#phone').val(res.data.phone);
                    $('#EditDatasModal').modal('show');
                }
            }
        });
    });


</script>
</body>
</html>
