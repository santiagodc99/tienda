<?php
// comentrio prueba
include("database.php");
$firstname=$_POST['uname'];
$lastname=$_POST['ulastname'];
$gender = $_POST['gender'];
$id = $_POST [ ' id ' ];
$email=$_POST['uemail'];

//nombre
$file_name = $_FILES['image']['name'];
//tipo
$file_type = $_FILES['image']['type'];
//archivo flotante
$file_tmp = $_FILES['image']['tmp_name'];
$status = FALSE;
//validacion tipo de archivo
$array = ( " jpg " , " jpeg " , " png " , " gif " );

if ( $image  ==  " " ) {
    if( $gender == ' M ' ) {
        $photo  =  " images / boy.png " ;
        } else  if ( $gender == ' F ' ) {
            $photo  =  " images / girl.png " ;
            } else {
                $photo  =  " images / img_default.png " ;
                }
$status = TRUE ;
} else {
$array  =  explode ( ' . ' , $_FILES [ ' image ' ] [ " name " ]);
$ext = end ( $array );
if ( in_array ( $ext , $array ) && $_FILES [ ' image ' ] [ " size " ] <= 200000 ) {
  $newname  =  implode ( ' ' , [ $id , $ext ]);
    //  echo $idNumber."<br>".$file_name."<br>".$file_type."<br>".$file_size."<br>".$file_tmp;
  move_uploaded_file ( $tmp_name , " images / $newname " );
  $photo  =  " images / $newname " ;
  $status = TRUE ;
}
}



$pwd=password_hash($_POST['pwd'],PASSWORD_DEFAULT);
//1. Create query
$sql_validation = "SELECT * FROM usuarios WHERE (email = ' $email ') || (ident = ' $ident ')";
//2. Execute query
$result= $conn->query($sql_validation);
//3. Validation
if($result->num_rows == 0 && $status==TRUE){
$sql="INSERT INTO usuarios (firstname, lastname,cedula,gender,email, password,photo) VALUES('$firstname','$lastname',$id,'$gender','$email','$pswd','$photo')";
if ($conn->query($sql)===true) {
  echo "<script language='javascript'>alert('Usuario regisrado con exito')</script>";
  header("Refresh:0;url=login.php");
}else{
  echo "Error:".$sql."<br>".$conn->error;
}
}else{
if($status==FALSE){
  echo "<script language='javascript'>alert('La imagen es superior a 2 MB o no tiene el formato indicado')</script>";
  header("Refresh:0;url= signup.php");
}else{
  echo "<script language='javascript'>alert('Usuario ya existe')</script>";
  header("Refresh:0;url= signup.php");
}
}


?>
