<?php include 'Connection.php'; 
$id=$_GET['id'];
$query="DELETE FROM student WHERE id='$id'";
$data=mysqli_query($con,$query);
if($data){
	?>
<script type="text/javascript">
	alert("Data deleted succesfully");
	window.open("http://localhost/CRUD/view.php","_self");
</script>
   <?php
}
else{

?>
<script type="text/javascript">
	alert("try again");
	
</script>

<?php
}


?> 