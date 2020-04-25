<html>
	<body>
		<div style="width:300px;height:300px;background:yellow">
			<form action="#" method="get">
				<label>Enter your name: </label>
				<input type="text" name="name"><br/>
				<input type="submit" name="submit" value="Ok">				
			</form>
		</div>
		
		<div style="width:300px;height:300px;background:blue">
			<h3>
				Your name is :<?php
    				if(isset($_GET['name'])){
    				    $pname = $_GET['name'];
    				    echo "$pname";}
    				?>
			</h3>
		</div>
		
	</body>

</html>