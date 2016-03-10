<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
	$nim = $_POST['nim'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$tlp = $_POST['tlp'];
    $website = $_POST['website'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $foto = $_POST['foto'];
	
	if($crud->create($nim,$name,$email,$tlp,$website,$lat,$lng,$foto))
	{
		header("Location: add-data.php?inserted");
	}
	else
	{
		header("Location: add-data.php?failure");
	}
}
?>
<?php include_once 'header.php'; ?>
<div class="clearfix"></div>

<?php
if(isset($_GET['inserted']))
{
	?>
    <div class="container">
	<div class="alert alert-info">
    <strong>Najah!</strong> Insert data berhasil sul! <a href="dashboard.php">HOME</a>!
	</div>
	</div>
    <?php
}
else if(isset($_GET['failure']))
{
	?>
    <div class="container">
	<div class="alert alert-warning">
    <strong>Afwan!</strong> Error sul!
	</div>
	</div>
    <?php
}
?>

<div class="clearfix"></div><br />

<div class="container">

 	
	 <form method='post'>
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Nim</td>
            <td><input type='text' name='nim' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>Nama</td>
            <td><input type='text' name='name' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>E-Mail</td>
            <td><input type='text' name='email' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>Tlp</td>
            <td><input type='text' name='tlp' class='form-control' required></td>
        </tr>

        <tr>
            <td>Website</td>
            <td><input type='text' name='website' class='form-control' required></td>
        </tr>

        <tr>
            <td>Lat</td>
            <td><input type='text' name='lat' class='form-control' required></td>
        </tr>

        <tr>
            <td>Lng</td>
            <td><input type='text' name='lng' class='form-control' required></td>
        </tr>

        <tr>
            <td>Foto</td>
            <td><input type='text' name='foto' class='form-control' optional></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Buat data baru
			</button>  
            <a href="dashboard.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; back</a>
            </td>
        </tr>
 
    </table>
</form>
     
     
</div>

<?php include_once 'footer.php'; ?>