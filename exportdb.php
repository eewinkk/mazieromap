<?php
$db     = new PDO('sqlite:leaflet.sqlite');
$sql = "SELECT * FROM users;";

$query = $db->query($sql);
/*$query  = $db->query('SELECT * FROM users');*/
$export = $db->query ($query);
$fields = sqlite_num_fields ( $export );

for ( $i = 0; $i < $fields; $i++ ){
    $header .= sqlite_field_name( $export , $i ) . "\t";
}

while( $row = sqlite_fetch_row( $export ) ){
//sqlite_fetch_row doesnt actually exist...
    $line = '';
    foreach( $row as $value ){                                            
        if ( ( !isset( $value ) ) || ( $value == "" ) ){
            $value = "\t";
        }else{
            $value = str_replace( '"' , '""' , $value );
            $value = '"' . $value . '"' . "\t";
        }
        $line .= $value;
    }
    $data .= trim( $line ) . "\n";
}
$data = str_replace( "\r" , "" , $data );

if ( $data == "" ){
    $data = "\n(0) Records Found!\n";                        
}

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=emails.xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$data";
?>