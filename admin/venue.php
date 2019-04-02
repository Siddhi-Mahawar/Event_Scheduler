<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	console.log(id);
	 if(a)
     {
        window.location.href='deletevenue.php?id='+id;
     }
}
</script>	
<div class="table-responsive">
<table class="table table-bordered">
<tr class="active" height="30px">
	<td colspan="6">
	<a href="index.php?option=add_venue" ><span class=" glyphicon glyphicon-plus-sign" style="color:black">Add New Venue and time slot</span></a></td>
</tr>
<tr class="info" height="30">
	<Th>Sr. No</Th>
	<th>Venue</th>
	<th>Start time</th>
	<th>End time</th>
	<th>Delete</th>
	<th>Update</th>
	
</tr>

<?php 
error_reporting(1);
         $rec_limit =10;
         
         /* Get total number of records */
        
		 $sql = "SELECT count(id) FROM venue ";
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
         $sql = "SELECT * ". "FROM venue ".
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
   $id=$row[0];
   echo "<tr class='active'>";
   echo "<th>".$i."</th>";
   echo "<th>".$row['name']."</th>";
   $st = $row['start_time'];
   $st = explode(".",$st);
   $et = $row['end_time'];
   $et = explode(".",$et);
   echo "<th>".$st[0]."</th>";
   echo "<th>".$et[0]."</th>";


echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";



echo "<th><a href='index.php?option=update_venue&id=$row[id]'><span class='glyphicon glyphicon-pencil'></span></a>
</th>";
echo "<tr>";
$i++;
}








//for showing Pagination
echo "<tr class='info'><td colspan='6'>";
if( $pagi > 0 )
 {
         $last = $pagi - 2;
      echo "<a href = \"index.php?option=venue&pagi=$last\">Last 10 Records</a> |";
        echo "<a href = \"index.php?option=venue&pagi=$pagi\">Next 10 Records</a>";
         
		 }
		 else if( $pagi == 0 )
		  {
     echo "<a href = \"index.php?option=venue&pagi=$pagi\">Next 10 Records</a>";
         }
		 else if( $left_rec < $rec_limit ) {
            $last = $pagi - 2;
            echo "<a href = \"index.php?option=venue&pagi=$last\">Last 10 Records</a>";
         }
        echo "</td></tr>"; 
		?>


</table>