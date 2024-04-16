<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add_USER</title>
</head>
<body>
       
<h1>CREATE NEW MEMBER</h1>
<br>

<form method="post">

<div>
<label for="name">NAME :</label> 
<input type="text" name="name" id="name" >  
</div><br>   

<div>
<label for="">EMAIL :</label>
<input type="email" name="email" id="email" >
</div><br>

<div>
<label for="">PHONE :</label>
<input type="text" name="phone" id="phone">
</div><br>

<div>
<button type="button" onclick="submitData('insert')">Insert</button>
</form> 

<button><a href="index.php">Back</a></button>
<!-- <?php require "script.php"; ?> -->

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function submitData(action){
        $(document).ready(function(){
            var data={
                action: action,
                id: $("#id").val(),
                name: $("#name").val(),
                email: $("#email").val(),
                phone: $("#phone").val()
                
            };
            $.ajax({
                url: 'function.php',
                type: 'post',
                data: data,
                success: function(response){
                    alert(response);
                }
            });
        });
    };
</script>
</html>



