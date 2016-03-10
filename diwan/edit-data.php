<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-update']))
{
	$id = $_GET['edit_id'];
	$nim = $_POST['nim'];
	$name = $_POST['name'];
	$email = $_POST['email'];
    $token = $_POST['token'];
	$tlp = $_POST['tlp'];
    $website = $_POST['website'];
    $city = $_POST['city'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $foto = $_POST['foto'];
	
	if($crud->update($id,$nim,$name,$email,$token,$tlp,$website,$city,$lat,$lng,$foto))
	{
		$msg = "<div class='alert alert-info'>
				<strong>WOW!</strong> Update sukses sul <a href='dashboard.php'>HOME</a>!
				</div>";
	}
	else
	{
		$msg = "<div class='alert alert-warning'>
				<strong>Afwan!</strong> Error sul !
				</div>";
	}
}

if(isset($_GET['edit_id']))
{
	$id = $_GET['edit_id'];
	extract($crud->getID($id));	
}

?>
<?php include_once 'header.php'; ?>

<div class="clearfix"></div>

<div class="container">
<?php
if(isset($msg))
{
	echo $msg;
}
?>
</div>

<div class="clearfix"></div><br />

<div class="container">
	 
     <form method='post'>
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Nim</td>
            <td><input type='text' name='nim' class='form-control' value="<?php echo $nim; ?>" required></td>
        </tr>
 
        <tr>
            <td>Nama</td>
            <td><input type='text' name='name' class='form-control' value="<?php echo $name; ?>" required></td>
        </tr>
 
        <tr>
            <td>E-Mail</td>
            <td><input type='text' name='email' class='form-control' value="<?php echo $email; ?>" required></td>
        </tr>

        <tr>
            <td>Token</td>
            <td><input type='text' name='token' class='form-control' value="<?php echo $token; ?>" required></td>
        </tr>
 
        <tr>
            <td>Tlp</td>
            <td><input type='text' name='tlp' class='form-control' value="<?php echo $tlp; ?>" required></td>
        </tr>

        <tr>
            <td>Website</td>
            <td><input type='text' name='website' class='form-control' value="<?php echo $website; ?>" required></td>
        </tr>

        <tr>
            <td>Kota</td>
            <td><input type='text' name='city' class='form-control' value="<?php echo $city; ?>" required></td>
        </tr>

        <tr>
            <td>Lat</td>
            <td><input type='text' name='lat' class='form-control' value="<?php echo $lat; ?>" required></td>
        </tr>

        <tr>
            <td>Lng</td>
            <td><input type='text' name='lng' class='form-control' value="<?php echo $lng; ?>" required></td>
        </tr>

        <tr>
            <td>Foto</td>
            <td><input type='text' name='foto' class='form-control' value="<?php echo $foto; ?>" required></td>
        </tr>
 
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary" name="btn-update">
    			<span class="glyphicon glyphicon-edit"></span>  Update
				</button>
                <a href="dashboard.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back</a>
            </td>
        </tr>
 
    </table>
</form>
     
     
</div>

<?php include_once 'footer.php'; ?>