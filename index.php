<?php
    include 'templates/header.php'
?>

<?php
    // $user = 'select * from users';
    // $result = $conn->query($user); 
    // echo "<pre>";
    // print_r($result);

    // echo "<pre>";
    // print_r($result->fetch_assoc());
    // die;


//    $sql = "INSERT INTO `users`(`full_name`, `username`, `email`, `password`, `role_id`, `department_id`, `phone`, `address`, `dob`, `gender`, `status`) VALUES ('amruta namdev vadar','amruta12','aw@gmail.com','657656','1','1','4343433433','pune','2005-6-7','female','1')";
//     if( $conn->query($sql) === TRUE)
//     {
//         echo"record inserted successfully";
//     }
//     else{
//         echo"syntax error";
//     }

//     $sql = "UPDATE users SET full_name='sneha tandle' WHERE id=1";

// if ($conn->query($sql) === TRUE) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . $conn->error;
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username= $_POST['username'];
    $password= $_POST['password'];

    $user = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";

    $result = $conn->query($user);
    echo "<pre>";
    print_r($result);
    echo "<pre>";
    print_r($result->fetch_assoc());
}else{
    echo "no data posted";
}
?>

<section class="hero_banner d-flex align-item-center justify-content-center"style="padding-top:18px;" >
  <div class="container-fluide text-center">
    <h1 >Leave Management System</h1>
    <h4> My College Project<h4>
    <button type="button" class="btn btn-primary" >
       <a class="text-white" href ="login.php"> Login
    </button>
  </div>
</section>








<?php
    include 'templates/footer.php'
?>