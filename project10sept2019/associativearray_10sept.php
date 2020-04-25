<?php
$arrEmployee = array("Manager"=> "670",
    "Analyst"=> "667",
    "Programmer"=> "669",
    "Clerk"=> "668",
    "Admin"=> "671",);
function display ($arr){
    foreach ($arr as $key => $val){
        echo "$key => $val <br/>";
    }
}

echo "=============Before Sort==================<br/>";
display($arrEmployee);
echo "=============After Sort==================<br/>";
ksort($arrEmployee);
display($arrEmployee);
?>
<html>
<body>
<label>List of jobs: &nbsp;</label><br>
<select id="jobTtile" onChange="update();">

<?php 
while (list($key,$value)=each($arrEmployee)){
    echo "<option value=$value>$key</option>";
}
?>
</select><br>

<label>Job id: </label>

		<label id="job_id"></label> <br/>
		
		<label>Job Title: </label>
		
		<label id="job_title"></label>
		
<script type="text/javascript">

var select = document.querySelector('select');

function update(){
document.querySelector('#job_id').innerText=select.options[select.selectedIndex].value;
document.querySelector('#job_title').innerText=select.options[select.selectedIndex].innerText;
}
update();


		
</script>

</body>
</html>