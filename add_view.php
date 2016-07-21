<?php 
session_start();   //initialized session
$db = new mysqli('127.0.0.1', 'root', '', 'user_data');// change the database connections 
if(isset($_SESSION['user'])) {
	include("headerlogout.php");   //get headerlogout if user logged in
}
else{
    include("header.html");   //get header if user do not logged in
}
if(!isset($_POST['search'])){
	header("location: mainpage1.php"); //direct to the home page
}
$search_sql="SELECT * FROM search WHERE title LIKE '%".$_POST["search"]."%'";  //'select' query used to select the alike data 
$search_query=mysqli_query($db, $search_sql);   //connect to database to send query 
if(mysqli_num_rows($search_query)!=0){    
	$search_rs=mysqli_fetch_assoc($search_query); //get the row of the table
}
		

		

?>
<style>
.search_name{
	color: #202020;
	font-size: 25px;
}
#search-no-border {
	 border: solid 1px #CCC;
    -moz-box-shadow: 5px 5px 0px #999;
    -webkit-box-shadow: 5px 5px 0px #999;
        box-shadow: 5px 5px 0px #999;
  margin-top:200px;
  width: 80%;
  margin-left: 300px;
}
#search-no-border thead tr th {
  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
  font-size: 40px;
  padding: 0;
  padding-left: 0;
}


#search-no-border tbody tr:hover{ 
  font-size: 15px;
  color: #848484;
  background: #e6e6e6;
  box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
}
#search-no-border tbody tr td a img {
  padding: 0;
  margin-left: 50px;
}
#search-no-border tbody tr td span{
  padding: 0;
  padding-top:65px;
  padding-right: 110px;
}
#search-no-border tbody tr td p {
  padding-left: 20px;
}

</style>
<div class="row">
	<div class="col-md-8" style="margin-bottom:300px;">
		<table id="search-no-border">
			<thead>
				<tr><th colspan="2">Search Result: </th></tr>
			</thead>
			<tbody>
<?php
if(mysqli_num_rows($search_query)!=0) {
	do{?>

										
			<tr>
				<td><a href="<?php echo $search_rs['categ'];?>.php">
					<img src="<?php echo $search_rs['desp']?>.jpg" width="140px" height="170px" alt="<?php echo $search_rs['title']?>" />
					<span class="search_name"><?php echo $search_rs['title']; ?></span>
				</a></td>
			</tr>
													
		   

<?php		
	}while ($search_rs=mysqli_fetch_assoc($search_query));
} else {
	echo "<p><h1>No result found</h1></p>";
}?>
			</tbody>
		</table>
	</div>
</div>
<?php
	include("footer.html"); //get footer
?>

