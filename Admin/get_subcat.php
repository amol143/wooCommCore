<?php
include('db.php');
if(!empty($_POST["cat_id"])) 
{
 $id = $_POST['cat_id'];
$query=mysqli_query($con,"SELECT * FROM subcategory WHERE categoryid=$id");
?>
<option value="">Select Subcategory</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo $row['id']; ?>"><?php echo $row['subcategory']; ?></option>
  <?php
 }
}
?>