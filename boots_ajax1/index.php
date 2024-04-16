<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
    crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
     crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
     crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
                                  <!-- id crete        2  -->
<div class="modal" tabindex="-1" id="modal_form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">User Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                  <!-- id create -->
      <form id="savedata">
        <input type="hidden" name="action" id="action" value="Insert">
        <input type="hidden" name="id" id="uid" value="0">

        <div class="form-group">
            <label for="name">NAME</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">EMAIL</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="phone">PHONE</label>
            <input type="text" name="phone" id="phone" class="form-control">
        </div>
        <input type="submit" value="submit" class="btn btn-success">
      </form>
      </div>
    </div>
  </div>
</div>

<div class='container mt-5'>                                                
                                                                          <!-- id create 1-->
<h1 class="text-center">Datatable CRUD
    <p class='text-right'><a href="#" class="btn btn-success float-end" id="add_data">Add Data</a></p></h1>
               <!-- id create -->
    <table id="mytable" class="table table-success table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>EMAIL</th>
          <th>PHONE</th>
          <th>EDIT</th>
          <th>DELETE</th>
        </tr>
      </thead> 
               <!-- id create -->
      <tbody id="tbody">
        <?php
        require "db.php";
        $result = mysqli_query($con, "SELECT * FROM student");
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

                                        <!-- create edit,delete class -->
          <td> <button class="btn btn-danger edit " >Edit</button></td>
          <td> <button class="btn btn-danger delete" >DELETE</button></td>
        </tr>
        <?php
            }
        }
        ?>
      </tbody>
    </table>
</div>

<script>
    $(document).ready(function(){
        var current_row=null;
        $("#add_data").click(function(){
            $("#modal_form").modal();
        });

        $("#savedata").submit(function(event){
            event.preventDefault();
    $.ajax({
        url:"action.php",
        type:"POST",
        data:$(this).serialize(),
        beforeSend:function(){
            $("#savedata").find("input[type='submit']").val('Loading.....');
        },
        success:function(res){
            if(res){
                if($('#uid').val() == 0){
                    $('#tbody').append(res);
                }
                else{
                    $(current_row).html(res); 
                }
            }
            else{
                alert("Value is not added");
            }
            $("#savedata").find("input[type='submit']").val('submit');
            clear_input();
            $("#modal_form").modal('hide');
                }
            });
        });
        

    $("body").on('click', '.edit', function(event) {
    event.preventDefault(); 
    current_row = $(this).closest("tr");
    $("#modal_form").modal();
    var id = current_row.find("td:eq(0)").text(); 
    var name = current_row.find('td:eq(1)').text();
    var email = current_row.find('td:eq(2)').text(); 
    var phone = current_row.find('td:eq(3)').text();
    $('#action').val("update");  
    $('#uid').val(id); 
    $('#name').val(name); 
    $('#email').val(email); 
    $('#phone').val(phone); 
     
    });

$("body").on('click', '.delete', function(event) {
    event.preventDefault(); 
    $('#action').val("delete");  

    var current_row = $(this).closest("tr");
    var id = current_row.find("td:eq(0)").text(); 

    $.ajax({
        url: "action.php",
        type: "POST",
        data: { uid: id, action: 'delete' },
        beforeSend: function() {
           
        },
        success: function(res) {
            if (res) {
                current_row.remove(); 
            } else {
                alert("Failed to delete. Please try again.");
            }
        }
    });
});


        function clear_input()
        {

            $("#savedata").find(".form-control").val("");
            $("#action").val("Insert");
            $("uid").val(0);
        }

       });
</script>

</body>
</html>


