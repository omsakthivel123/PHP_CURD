<?php


require "db.php";

if(isset($_GET['data_id'])) {
    $data_id = $_['data_id'];
   
//  print_r($data_id); exit;

    $query = "SELECT * FROM data WHERE id = $data_id";

  
    
    $result = mysqli_query($con, $query);

    if($result) {
      
        if(mysqli_num_rows($result)==1) {
            $row = mysqli_fetch_assoc($result);

        
            echo json_encode(array("status" => 200, "data" => $row));
            exit();
        } else {
           
            echo json_encode(array("status" => 422, "message" => "No data found with the provided ID."));
            exit();
        }
    } else {
        
        echo json_encode(array("status" => 422, "message" => "Error fetching data from the database."));
        exit();
    }
}



if (isset($_POST['save_datas'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    // $name = mysqli_real_escape_string($con, $_POST['name']);
    // $email = mysqli_real_escape_string($con, $_POST['email']);
    // $phone = mysqli_real_escape_string($con, $_POST['phone']);

    if ($name == NULL || $email == NULL || $phone == NULL) {
        $res = ['status' => 422, 'message' => "All fields are mandatory"];
        echo json_encode($res);
        return false;
    }

    $sql = "INSERT INTO data(name,email,phone) VALUES ('$name','$email','$phone')";
    $result = $con->query($sql);

    if ($result) {
        $res = ['status' => 200, 'message' => "Data added"];
        echo json_encode($res);
        return false;
    } else {
        $res = ['status' => 500, 'message' => "Data not added"];
        echo json_encode($res);
        return false;
    }
}

?>


        










