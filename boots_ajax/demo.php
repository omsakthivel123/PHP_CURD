<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  >
                <div class="modal-body">
                    <div class="alert alert-warning d-none" id="errormessage"></div>
                    
                    <input type="text" name="data_id" id="id">
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
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
            </form>
<?php
if(isset($_GET[ ''])){
  $name=$_POST('name');
  
  print_r($name);
  
}
?>            
</body>
</html>