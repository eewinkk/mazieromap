<?php

include_once 'dbconfig.php';

?>
<?php include_once 'header.php'; ?>

<div class="clearfix"></div>

<div class="container">
<a href="add-data.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Tambah data</a>
<a href="logout.php" class="btn btn-large btn-danger"><i class="glyphicon glyphicon-user"></i> &nbsp; Logout</a>
</div>

<div class="clearfix"></div><br />
<div class="container">
	 <table class='table table-bordered table-responsive'>
     <tr>
     <th>No</th>
     <th>Nim</th>
     <th>Nama</th>
     <th>E-Mail</th>
     <th>Token</th>
     <th>Tlp</th>
     <th>City</th>
     <th colspan="2" align="center">Aksi</th>
     </tr>
     <?php
		$query = "SELECT * FROM users";       
		$records_per_page=20;
		$newquery = $crud->paging($query,$records_per_page);
		$crud->dataview($newquery);
	 ?>
    <tr>
        <td colspan="7" align="center">
 			<div class="pagination-wrap">
            <?php $crud->paginglink($query,$records_per_page); ?>
        	</div>
        </td>
    </tr>
 
</table>
   
       
</div>

<?php include_once 'footer.php'; ?>