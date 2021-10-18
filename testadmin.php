<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="stylead.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" 
		rel="stylesheet">

  <title>PHP Search</title>
</head>
<body>
	<section class="header">
		<nav>
			<a href="admin.php"><img src="images/koperasi.jpg" alt="Koperasi Politeknik Tuanku Syed Sirajuddin"></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="index.php">Logout</a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
<div class="container">
   <div class="row">
   <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
   <div class="row">
	   
	      <center> 
			  
			   <?php 

     $conn = new mysqli('localhost', 'root', '', 'sus');
     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM user_info WHERE first_name LIKE '%$searchKey%' ";
     }else
     $sql = "SELECT * FROM user_info ";
     $result = $conn->query($sql);
   ?>
			  
			  <form action="" method="GET"> 
     <div class="col-md-6">
        <input type="text" name="search" id="searchbox" class='form-control' placeholder="Search By Name" value=<?php echo @$_GET['search']; ?> > 
     </div>
     <div class="col-md-6 text-left">
      <button class="btn">Search</button>
     </div>
   </form>

   <br> 
   <br>
</div>

<div class="container">   
      <br>     
        <table class="table table-striped table-condensed    
                                          table-bordered" id="myTable">
			
		
          <thead>   
            <tr>   
              <th>Name</th>   
              <th>Identification No.</th>   
              <th>Department</th>   
            </tr>   
          </thead>   
          <tbody>   
  <?php while( $row = $result->fetch_object() ): ?>
  <tr>
     <td><?php echo $row->first_name ?></td>
     <td><?php echo $row->ic ?></td>
     <td><?php echo $row->Department ?></td>
	 <td><a href="Adminedit.php?id=<?php echo $row->user_id ?>">Edit</a>
	<a href="AdminDelete.php?id=<?php echo $row->user_id ?>">Delete</a></td>
            </tr> 
  <?php endwhile; ?>
	  
	</tbody>   
</table>
</div>
</div>
</div>
</body>
</html>