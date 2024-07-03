<?php
session_start(); // Start session at the beginning

// Check if form is submitted
if(isset($_POST['add'])){
    // Retrieve form data (sanitize inputs)
    $full_name = htmlspecialchars(trim($_POST['full_name']));
    $department = htmlspecialchars(trim($_POST['department']));
    $email = htmlspecialchars(trim($_POST['email']));

    $conn = mysqli_connect("localhost", "anu", "your_password", "users");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    

    // Insert query (make sure to sanitize inputs to prevent SQL injection)
    $insert_query = "INSERT INTO users (full_name, department, email) VALUES ('$full_name', '$department', '$email')";

    if (mysqli_query($conn, $insert_query)) {
        $_SESSION['status'] = "Data inserted successfully";
    } else {
        $_SESSION['status'] = "Error: " . $insert_query . "<br>" . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);

    // Redirect back to the page where the form was submitted
    header("Location: index.php"); // Replace index.php with your actual page
    exit();
}
?>




<?php include '../templates/header.php';?>

<section>
    
    
    

<div class="row"> 

        <div class="col-sm-2 " style=" background-color: #d9edf7;">
      <p>         <p>
         </div>
        
        <div class="col-sm-10" style="background-color: #d9ead3; ">
       <p><p>
        </div>
        <div class="col-sm-2" style="background-color:#f8d7da;padding-bottom:400px">
            Staff Manager
         </div>
        
        <div class="col-sm-10" style="background-color: #fff3cd;padding-bottom:400px; margin-top:20px">
            <div class="container-fluid" style=" background-color: #d9edf7;">
                <div class="row">
                    <div class="col-sm" >
                    <div class="card bg-light">
                    <div class="card-body text-center">
                        <p class="card-text"style="font-size:14px"> <i class="fa-solid fa-magnifying-glass"></i>search by name</p>
                    </div>
                    </div>
                    </div>
                    <div class="col-sm">
                    <div class="card bg-light">
                    <div class="card-body text-center">
                        <p class="card-text" style="font-size:14px"><i class="fa-solid fa-magnifying-glass"></i>search by department</p>
                    </div>
                    </div>
                    </div>
                    <div class="col-sm ">
                    <div class="card bg-light">
                    <div class="card-body text-center ">
                        <p class="card-text"  style="font-size:14px"><i class="fa-solid fa-magnifying-glass"></i>Search </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-sm ">
                    <div class="card bg-light">
                    <div class="card-body text-center">
                        <p class="card-text"  style="font-size:14px">Clear</p>
                    </div>
                    </div>
                    </div>
                </div>  
         </div>




        <div class="container-fluid"  style="background-color: #d9ead3; padding-bottom:250px ; margin-top:20px ">

        <div class="container-fluid"  style=" background-color: #d9ead3;">
    <div class="row">
      <div class="col-sm ">
      
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" style="width:90px; height:30px;">
   add staff
  </button>
</div>


 <!-- The Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add New Staff</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form action="staff_manage.php" method="POST">
          <div class="mb-4">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name">
          </div>
          <div class="mb-4">
            <label for="department" class="form-label">Department</label>
            <input type="text" class="form-control" id="department" name="department">
          </div>
          <div class="mb-4">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="submit" name="add" class="btn btn-primary">Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

      </div>
    </div>  
  </div>
         <div class="container-fluid" style="background-color:#f8d7da; margin-top:10px">
         <table class="table table-striped" >
  
    <tr>
    <th scope="col">full_name</th>
      <th scope="col">department</th>
      <th scope="col">email</th>
      <th scope="col">action</th>

    </tr>
  <?php
  
        $q=mysqli_query($conn,"select * from users");
        if($q)
        {
            $sr=1;
            while($row=mysqli_fetch_row($q))
            {
                ?>
                <tr>
                    <td><?php echo$row[1];?></td>
                    <td><?php echo$row[2];?></td>
                    <td><?php echo$row[3];?></td>
                    
                </tr>
                <?php
            }
        }
  ?>
</table>
</div>
        </div>
        </div>

    </div>
</section>








<?php include '../templates/footer.php';?> 