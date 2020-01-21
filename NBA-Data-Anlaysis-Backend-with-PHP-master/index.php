<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<title>NBA ANALYSIS</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<style type="text/css">
		<link rel= "stylesheet" type="text/css" href="css/style.css">
		<!--
		.style1 {font-family: Times, Helvetica, sans-serif}
		.style2 {font-family: Times, Helvetica, sans-serif; font-weight: bold; }
		.header{ width: 100%; height: 100px; display: block; background-color: #101010; text-align: left;}
		.tab a{ height: 100%; display: table; float: right; padding: 35px 30px; vertical-align: middle;}
		body {background-image: "ball.jpg";}
		-->
	</style>
</head>
<center>


<body>

	<!-- Header -->
	<div class= "header">
		
		<div class= "logo">
				<img src="nbastats.png" width="300px" height="100px" align="left">
			
				<div class= "tab" >
					
					<center>
  				
  					<a href = "Awards.php" >
  						<button style="height: 25px; width: 80px">AWARDS</button>
  					</a>

  					<a href = "Playoffs.php" >
  						<button style=" height: 25px; width: 80px">PLAYOFFS</button>
  					</a>

  					<a href = "Trainer.php" >
  						<button style="height: 25px; width: 80px">TRAINERS</button>
  					</a>

  					<a href = "Teams.php" >
  						<button style=" height: 25px; width: 80px">TEAMS</button>
  					</a>

  					<a href = "Player.php">
  						<button style="height: 25px; width: 80px">PLAYERS</button>
  					</a>

				</div>
		</div>	
				
	</div>  

	<!-- Background -->
		<body background = "ball.jpg">


	<!--
	<p class="style2">WELCOME TO NBA ANALYSIS</p>
	</center> -->



	<!-- Search Bar 
	<form class="searchbar" action="action_page.php">
  		<input type="text" placeholder="Search.." name="search">
  		<button type="submit"><i class="fa fa-search"></i></button>
	</form> -->
	</center>
	</div>
</body>


<center>
	<!--
<?php
        $mysqli = new mysqli("localhost", "smh2kazm", "#Hamzakazmi12", "smh2kazm");
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }

		$search_value=$_POST["search"];
        $query = "SELECT * FROM Player where Name like '%$search_value%'";
        echo "<b> <center>Database Output</center> </b> <br> <br>";
        echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Value1</font> </td> 
          <td> <font face="Arial">Value2</font> </td> 
          <td> <font face="Arial">Value3</font> </td> 
          
      </tr>';
        
        if ($result = $mysqli->query($query)) {
        
            while ($row = $result->fetch_assoc()) {
                $field1name = $row["Name"];
                $field2name = $row["Age"];
                $field3name = $row["Salary"];
                echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  
              </tr>';
            }
        
        /*freeresultset*/
        $result->free();
        }
?>
</center> -->
</html>

