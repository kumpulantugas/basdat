
<!doctype html>
<html lang="en">
  <head>
  	<title>DASHBOARD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">  </head>
  <body>
		
<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
		
				<div class="p-4">
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a style="text-decoration: none;" href="#"><span class="fa"></span><img src = "images/home.svg"> Dashboard</a>
	          </li>
	          <li>
	              <a style="text-decoration: none;" href="#"><span class="fa"></span><img src = "images/folder2.svg"> Periksa Berkas</a>
	          </li>
	          <li>
              <a style="text-decoration: none;" href="#"><span class="fa"></span><img src = "images/gear.svg"> Pengaturan</a>
	          </li>
	          <li>
              <a style="text-decoration: none;" href="#"><span class="fa"></span><img src = "images/logout.svg"> Logout</a>
	          </li>
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script>  <i class="icon-heart" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank"></a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>


        <!-- Page Content  -->
	
    <div id="content" class="p-4 p-md-5 pt-5">
        <p style="text-align: left;"><b>DASHBOARD</b></p>
        
		<div>
			<br>
			<script type='text/javascript'>

				var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
				
				var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
				
				var date = new Date();
				
				var day = date.getDate();
				
				var month = date.getMonth();
				
				var thisDay = date.getDay(),
				
					thisDay = myDays[thisDay];
				
				var yy = date.getYear();
				
				var year = (yy < 1000) ? yy + 1900 : yy;
			</script>
			<p><b>Welcome Back, Admin</b><span style="float: right;"><script>document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);</script></span></p>
			<br>
			<div class="row">
				<div class="col-sm-4 mb-3 mb-sm-0">
				  <div class="card">
					<div class="card-body">
						<div style="display: flex; justify-content: right;">
						<i class="fa fa-pencil fa-2x" aria-hidden="true"></i>
						</div>
					  <h5 style="margin-right: 180px;">Total Proposal</h5>
					  <p class="card-text"><b>1</b></p>
					</div>
				  </div>
				</div>
				<div class="col-sm-4">
				  <div class="card">
					<div class="card-body">
					<div style="display: flex; justify-content: right;">
						<i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i>
					</div>
					  <h5 class="card-title" style="margin-right: 100px;">Total Proposal Belum Direview</h5>
					  <p class="card-text"><b>1</b></p>
					</div>
				  </div>
				</div>
				<div class="col-sm-4">
					<div class="card">
					  <div class="card-body">
						<div style="display: flex; justify-content: right;">
							<i class="fa fa-check-square-o fa-2x" aria-hidden="true"></i>
						</div>
						<h5 class="card-title" style="margin-right: 100px;">Total Proposal Sudah Direview</h5>
						<p class="card-text"><b>0</b></p>
					  </div>
					</div>
				  </div>
			  </div>
		</div>
		<div style="margin-top: 100px;">
			<p><b>PROGRES REVIEW PROPOSAL KERMA</b></p>
		</div>
		<?php
                    // Include config file
                    require_once "konek.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM dashboard";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>IDKERMA</th>";
                                        echo "<th>JUDUL</th>";
                                        echo "<th>PROGRES</th>";
                                        echo "<th>AKSI</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['judul'] . "</td>";
                                        echo "<td>" . $row['progres'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="lihat.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="hapus.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>	