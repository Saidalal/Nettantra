<?php     //start php tag
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.
If(isset($_REQUEST['submit'])!='')
{
If( $_REQUEST['name']==''|| $_REQUEST['email']==''|| $_REQUEST['gender']==''|| $_REQUEST['bday']==''||$_REQUEST['phoneno']==''||$_REQUEST['faname']==''||$_REQUEST['foccupation']==''||$_REQUEST['mname']==''||$_REQUEST['moccupation']==''||$_REQUEST['nationality']==''||$_REQUEST['state']==''||$_REQUEST['dist']==''||$_REQUEST['pincode']=='')
{ 
Echo "please fill the empty field.";
}
Else
{
$sql="insert into personal( 'name', 'email','gender','bday', 'phoneno','faname','foccupation', 'mname','moccupation', 'nationality', 'state','dist','pincode') values('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['gender']."', '".$_REQUEST['bday']."', '".$_REQUEST['gender']."', '".$_REQUEST['bday']."', '".$_REQUEST['phoneno']."', '".$_REQUEST['faname']."', '".$_REQUEST['foccupation']."', '".$_REQUEST['mname']."', '".$_REQUEST['moccupation']."', '".$_REQUEST['nationality']."', '".$_REQUEST['state']."', '".$_REQUEST['dist']."',, '".$_REQUEST['pincode']."')";

$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

}
}

?>