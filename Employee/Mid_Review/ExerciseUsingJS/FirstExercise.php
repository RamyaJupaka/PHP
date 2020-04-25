<?php
//Exercise: suppose the following associative array
/*
 *job_id        job_title
 * 670          Manager
 * 667          Analyst
 * 669          Programmer
 * 668          Clerk
 * 671          Admin
 *
 *
 * 1. Sort the associactive array in increasing order of job title
 * 2. Build the user interface (html, javascript)
 * list of jobs : -----------------(drop down)
 * job id: <label>
 * job title: <label>
 *
 * when you select the job from the list, you automatically display jobid and job title
 * */ 
    
$arrEmployee = array ("Manager" =>"670",
                      "Analyst" => "667",
                      "Programmer"=>"669",
                      "Clerk" => "668",
                      "Admin" => "671"
);

function display($arr){
    foreach ($arr as $key=>$val){
        echo " Key =>" .$key . " Value =>" .$val;
    }
}

display($arrEmployee);
ksort($arrEmployee);
display($arrEmployee);

?>

<html>
	<head>
		<style type="text/css">
		  table {
		    
		      margin-top: 20px;
		  
		  }
		
		</style>
		
	</head>
    <body>
    	<h1>List Of Job</h1>
    	<select onChange="display();">
<?php 
while (list($key,$val) = each($arrEmployee)){
    echo "<option value=$val>$key</option>";
}
?>
	</select><br/>
	
<!-- 	<label>Job ID: </label><br/> -->
<!-- 	<label id="JobId"></label><br/> -->
<!-- 	<label>Job Title:</label><br/> -->
<!-- 	<label id="JobTitle"></label> -->
	
	<table border='1'>
		<thead>
			<tr>
				<th>Job ID</th>
				<th>Job Title</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td id="JobId"></td>
				<td id="JobTitle"></td>
			</tr>
			
		</tbody>
	
	</table>
	
	
	
<script type="text/javascript">
	var select = document.querySelector('select');

	function display(){
		document.querySelector("#JobId").innerText = select.options[select.selectedIndex].value;
		document.querySelector("#JobTitle").innerText = select.options[select.selectedIndex].innerText;
		}
display();
	
</script>
    </body>
  
</html>


<!-- 		document.querySelector('#job_id').innerText=select.options[select.selectedIndex].value; -->
<!-- 		document.querySelector('#job_title').innerText=select.options[select.selectedIndex].innerText; -->

























