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
					<li><a href="admin.php">List</a></li>
					<li><a href="tester.php">Search</a></li>
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
      
    // Import the file where we defined the connection to Database.     
        require_once "connection.php";   
    
        $per_page_record = 1;  // Number of entries to show in a page.   
        // Look for a GET variable page if not found default is 1.        
        if (isset($_GET["page"])) {    
            $page  = $_GET["page"];    
        }    
        else {    
          $page=1;    
        }    
    
        $start_from = ($page-1) * $per_page_record;     
    
        $query = "SELECT * FROM user_info LIMIT $start_from, $per_page_record";     
        $rs_result = mysqli_query ($con, $query);    
    ?>    
	   
   <?php 

     $conn = new mysqli('localhost', 'root', '', 'sus');
     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM user_info  WHERE ic LIKE '%$searchKey%' LIMIT $start_from,$per_page_record";
     }else
     $sql = "SELECT * FROM user_info LIMIT $start_from,$per_page_record";
     $result = $conn->query($sql);
   ?>

   <form action="" method="GET"> 
     <div class="col-md-6">
        <input type="text" name="search" id="searchbox" class='form-control' placeholder="Search By Identification No" value=<?php echo @$_GET['search']; ?> > 
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
	 <td><a href="viewadmin.php?id=<?php echo $row->user_id ?>">view</a>
		 <a href="Adminedit.php?id=<?php echo $row->user_id ?>">Edit</a>
	<a href="AdminDelete.php?id=<?php echo $row->user_id ?>">Delete</a></td>
            </tr> 
  <?php endwhile; ?>
	  
	</tbody>   
</table>
</div>
</div>
</div>
		
		
  
  
         
    </div>   
  </div>  
</center>
	</section>
  <script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'tester.php?page='+page;   
    }
	  
    function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
      }       
      }
      }  
  </script>  
</body>