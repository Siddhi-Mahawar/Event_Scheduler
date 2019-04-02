<script type="text/javascript">
function deletes(eid)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='user_delete.php?eid='+eid;
     }
}
</script>
<div class="table-responsive">
  <table class="table">
	
	<tr class="info">
		<th>Sr. No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Gender</th>
		<th>Status</th>
		<th>Delete</th>
	</tr>
<?php
	error_reporting(1);
         $rec_limit =20;
         
         /* Get total number of records */
        
		 $sql = "SELECT count(id) FROM user ";
         $retval = mysqli_query($con,$sql);
         
         if(! $retval )
		  {
            die('Could not get data: ' . mysqli_error());
         }
         $row = mysqli_fetch_array($retval, MYSQL_NUM );
         $rec_count = $row[0];
         
         if( isset($_GET{'pagi'} ) ) {
            $pagi = $_GET{'pagi'} + 1;
            $offset = $rec_limit * $pagi ;
         }else {
            $pagi = 0;
            $offset = 0;
         }
         
		 
         $left_rec = $rec_count - ($pagi * $rec_limit);
         $sql = "SELECT * ". "FROM user ".
            "LIMIT $offset, $rec_limit";
            
         $retval = mysqli_query($con, $sql);
         
         if(! $retval )
		  {
            die('Could not get data: ' . mysqli_error());
         }
         
     $inc=1;
	 $i=1;
	while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
	{
	?>
	<tr  class="active">
		<Td><?php echo $i;?></Td>
		<Td><?php echo $row['name'];?></Td>
		<Td><?php echo $row['email'];?></Td>
		<Td><?php echo $row['mob'];?></Td>
		<Td><?php echo $row['gender'];?></Td>
		

<Td>
<?php 
$seid= $row['email'];
$s= $row['status'];
if($s==1)
{
echo "<a title='Activate User' href='update_user_status.php?status=$s&eid=$seid'><span class='glyphicon glyphicon-user' style='color:red' aria-hidden='true'></span></a>";
}
else
{
echo "<a title='Deactivate User' href='update_user_status.php?status=$s&eid=$seid'><span class='glyphicon glyphicon-user' style='color:#00FF00' aria-hidden='true'></span></a>";
}
?>
</Td>
<Td>
<a href='#' onclick="deletes('<?php echo $row["email"];?>')"><span class='glyphicon glyphicon-remove' style='color:red;'></span></a>

</td>
	</tr>
	
	<?php $i++;} 
	
	
	//for showing Pagination

echo "<tr class='info'><td colspan='8'>";
if( $pagi > 0 )
 {
         $last = $pagi - 2;
      echo "<a href = \"index.php?option=users&pagi=$last\">Last 20 Records</a> |";
        echo "<a href = \"index.php?option=users&pagi=$pagi\">Next 20 Records</a>";
         
		 }
		 else if( $pagi == 0 )
		  {
     echo "<a href = \"index.php?option=users&pagi=$pagi\">Next 20 Records</a>";
         }
		 else if( $left_rec < $rec_limit ) {
            $last = $pagi - 2;
            echo "<a href = \"index.php?option=users&pagi=$last\">Last 20 Records</a>";
         }
        echo "</td></tr>"; 
		?>
		
</table>

  
