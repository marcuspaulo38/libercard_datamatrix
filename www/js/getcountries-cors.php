<?php 

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

/*
$host      =  "localhost";
$banco     = "test";
$user      = "root";
$password = "";


$mysqli = mysqli_connect($host, $user, $password, "test");

if (mysqli_connect_errno())
{
    printf("Cone&ccedil;&atilde;o falhou: %s\n", mysqli_connect_error());
    
    exit();
}


$query = ("SELECT * FROM dados");
$result = mysqli_query($mysqli, $query) or die("Algum problema na query".mysql_Error());
$num_rows = mysqli_num_rows($result);



while($row = mysqli_fetch_assoc($result))
{
    
    $id              = $row['id'];
    $tipo            = $row['Name'];
    
}
//echo json_encode($countries = array($tipo));
                                          
*/
$data = '123609000243EF0000003C100218E80220ECE00428013208456D7072657361313A03504F534001620D0D6226B72615E23CB7261A0101703C8E25299F9D3114599F26E735B0806ABC';
$type = 'dmtx'; // Type of barcode
$width = 640;
$format = 'png';
$wq = '4'; // Width of quiet area units
$datamatrix = "s=".$type."&wq=".$wq."&f=".$format."&w=".$width."&d=".$data;

echo json_encode($countries = array($datamatrix));
?>

