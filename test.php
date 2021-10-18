<?php 
session_start();

	include("connection.php");
	include("function.php");

	$user_data = admin_login($con);

	$res=mysqli_query($con,"SELECT ui.* FROM user_info ui ");

	

?>
<html>
<head>
	<title>ADMIN PAGE</title>	
	<title>DR Smile Website — Login</title>
		<link rel="stylesheet" href="stylele.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" 
		rel="stylesheet">
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
		
	<center>  
		<?php
		if(isset($_POST['search'])){
            $searchq = $_POST['search'];
            $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);

            $query = mysql_query("SELECT * FROM user_info WHERE ic LIKE '%$searchq%'") or die(mysql_error());
            $count = mysql_num_rows($query) or die(mysql_error());

            if($count == 0){
                $output = 'There was no search results.';
            }else{
                echo '<table class="results-tab">';
                while ($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
                   echo '<tr>
                            <td>'.$row["first_name"].'</td>
                            <td>'.$row["ic"].'</td>
                            <td>'.$row["Department"].'</td>
                        </tr>';
                }
                echo '</table>';    
            }
        }
    ?>
		
    <?php  
      
    // Import the file where we defined the connection to Database.     
        require_once "connection.php";   
    
        $per_page_record = 4;  // Number of entries to show in a page.   
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
  
		<div class="text-box">
		<h1>KOPERASI PTSS PERLIS BERHAD</h1>
		<p>Koperasi Politeknik Syed Sirajuddin is one of the top Koperasi in Perlis. Established in 2004, our Koperasi has been providing the best service to our customer for over decades. This legacy of service comes with responsibility. A responsibility to treat people with respect, excellence, and compassion.</p>
		</div>
		</section>
		<section>
			<center>
    <div class="container">   
      <br>   
		  <h1>User List</h1>      
        <table class="table table-striped table-condensed    
                                          table-bordered" id="myTable">   
          <thead>   
            <tr>   
              <th>Name</th>   
              <th>ic</th>   
              <th>department</th>   
            </tr>   
          </thead>   
          <tbody>   
    <?php     
            while ($row = mysqli_fetch_array($rs_result)) {    
                  // Display each field of the records.    
            ?>     
            <tr>      
            <td><?php echo $row["first_name"]; ?></td>   
            <td><?php echo $row["ic"]; ?></td>   
            <td><?php echo $row["Department"]; ?></td> 
			<td><a href="Adminedit.php?id=<?php echo $row['user_id']; ?>">Edit</a>
				<a href="AdminDelete.php?id=<?php echo $row['user_id']; ?>">Delete</a></td>
            </tr>     
            <?php     
                };    
            ?>     
          </tbody>   
        </table>   
  
     <div class="pagination">    
      <?php  
        $query = "SELECT COUNT(*) FROM user_info";     
        $rs_result = mysqli_query($con, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='test.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='test.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='test.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='test.php?page=".($page+1)."'>  Next </a>";   
        }   
  
      ?>    
      </div>  
  
  
      <div class="inline">   
      <input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
      placeholder="<?php echo $page."/".$total_pages; ?>" required>   
      <button onClick="go2Page();">Go</button>   
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
        window.location.href = 'test.php?page='+page;   
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
	
</html>