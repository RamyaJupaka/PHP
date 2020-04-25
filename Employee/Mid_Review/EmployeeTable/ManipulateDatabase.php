<html>
	<style>
	   *{
	       margin:0;
	       padding:0;
	       background-color:aqua;
	   }
	   h1{
	       text-align : center;
	   
	   }
	   table{
	       margin: 0 auto;
	       margin-top:20px;
	      
	   }
	   table td{
	       border: 1px solid black;
	       padding: 20px;
	       text-align:center;
	   }
	   
	
	</style>
    <body>
    	<?php 
    	   require_once 'First_dbconfig.php';
    	   echo "<h1> Welcome to the user " .$GLOBALS['username']."</h1><br/>";
    	?>
    	<table>
    		<tr><td><a href="insertData.php">Insert Data</a></td></tr>
            <tr><td><a href="updateData.php">Update Data</a></td></tr>
            <tr><td><a href="deleteData.php">Delete Data</a></td></tr>
            <tr><td><a href="display.php">Display Data</a></td></tr>    	
    	</table>
    
    </body>
</html>