<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /><style>

  <style>
  	}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;

  position: fixed;
 
  overflow: auto;
}

.sidebar a {
  display: block;
  color: white;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
 
  color: white;
  background:DodgerBlue;
  padding-left:10px;
  padding-right:10px;
  padding-top:10px;
 
}

.sidebar a:hover:not(.active) {
 
  color: white;
  background:DodgerBlue;
  padding-left:10px;
  padding-right:10px;
  padding-top:10px;

}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 50%;
    
    position:absolute;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
  
  .col-md-3{
    float:left;
    width:10px;
    border:1px solid;
    border-style: outset;
   
  }
  
  .col-lg-12{
      height:100px;
  }
 

  </style>
</head>
<body>

<div style="#F5FFFA" class="container-fluid">
 
  <div class="row">
    <div class=" col-md-2 " style="background-color:#00BFFF; padding-bottom:300px">
    	<div class="sidebar">
  <a class="active" href="#Dashboard" style = "height:8px ; font-size:12px"><i class="fa-solid fa-gauge-high"></i> Dashboard</a>
  <a href="#employee_list" style = "height:8px  ; font-size:12px"><i class="fa-solid fa-user-group"></i> Employe List</a>
  <a href="#application_lst" style = "height:8px  ; font-size:12px"><i class="fa fa-file-text" aria-hidden="true"></i> Application List</a>
  <a href="#department_list" style = "height:8px  ; font-size:12px"><i class="fa-regular fa-building"></i>  Department List</a>
  <a href="#designation_list" style = "height:8px  ; font-size:12px"><i class="fa fa-list-ul" aria-hidden="true"></i>  Designation List</a>
  <a href="#leave_type_lst" style = "height:8px  ; font-size:12px"><i class="fa fa-th-list" aria-hidden="true"></i>  Leave Type list</a>
  <a href="#user_list" style = "height:8px  ; font-size:12px"><i class="fa fa-users" aria-hidden="true"></i>  User list</a>
  <a href="#reports" style = "height:8px  ; font-size:12px"><i class="fa fa-file" aria-hidden="true"></i>  Reports</a>
  <a href="#setting" style = "height:8px  ; font-size:12px"><i class="fa fa-cogs" aria-hidden="true"></i>   Setting</a>
  </div>
    
      
    </div>
    <div class=" col-md-10 " >
    <div class="row">
    <div class ="col-lg-12">
      <h1> </i>welcome online leave management system - php</h1> </div>
      <div class="row">
        <div class="col-md-3" style = "border-style:outset">
          <div style="height:60px" class = "card">
          <a href="#application" ><i class="fa fa-file-text" aria-hidden="true"  style="color:darkblue; padding:18px ; margin-top:5px ; margin-right:10px "></i> Pending Application</a>
 
          </div>
        </div>
        <div class="col-md-3" style = "border-style:outset">
        <div style="height:60px" class = "card" >
        <a href="#department" ><i class="fa-regular fa-building"  style="background:#5F9EA0; color:white; padding:18px ; margin-top:5px ; margin-right:10px " ></i>Total Department </a>
  
          </div>
          </div>
        <div  class="col-md-3" style = "border-style:outset">
        <div style="height:60px"class = "card">
        <a href="#designation_list" style = "height:8px"><i class="fa fa-list-ul" aria-hidden="true" style="background:#008B8B ; color:white  ; padding:18px ; margin-top:5px ; margin-right:10px " "></i>  Toatal Designation </a>
 
        </div>
          </div>
          <div  class="col-md-3" style = "border-style:outset">
        <div style="height:60px"class = "card">
        <a href="#leave_type_lst" style = "height:8px"><i class="fa fa-th-list" aria-hidden="true" style="background:#9932CC ; color:white ; padding:18px ; margin-top:5px ; margin-right:10px " ></i>  Total Type Of leave</a>
  
          </div>
          </div>
      </div>
      </div>
      </div>
  </div>
</div>
    
</body>
</html>
