<?php
session_start();
error_reporting(0);
include("config.php");

if(isset($_POST['submit']))
{
 $actor=$_POST['actor'];
 $spouse=$_POST['spouse'];
 $marriageday=$_POST['marriageday'];
 $bridefblink=$_POST['bridefblink'];
 $bridetwitterlink=$_POST['bridetwitterlink'];
 $brideinstagramlink=$_POST['brideinstagramlink'];
 $groomfblink=$_POST['groomfblink'];
 $groomtwitterlink=$_POST['groomtwitterlink'];
 $groominstagramlink=$_POST['groominstagramlink'];
     
    $maxsize =2147483648; // 
                       
           echo $name = $_FILES['file']['name'];
            echo $target_dir = "uploads/";
             echo $target_file = $target_dir . $_FILES["file"]["name"];
            echo $filesize  =$_FILES['file']['size'];

            // Select file type
            $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Valid file extensions
            $extensions_arr = array("jpg","JPEG","PNG","TIFF","GIF","mp4","MP4");

            // Check extension
            if( in_array($videoFileType,$extensions_arr) ){
                
                // Check file size
                if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                    echo "File too large. File must be less than 5MB.";
                }else{
                    // Upload
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                        // Insert record
                       // $query = "INSERT INTO videos(name,location) VALUES('".$name."','".$target_file."')";

                        //mysqli_query($con,$query);
                       // echo "Upload successfully.";
                    }
                }

 $query="INSERT INTO videos (actor,spouse,marriageday,bridefblink,bridetwitterlink,brideinstagramlink,groomfblink,groomtwitterlink,groominstagramlink,name,location)
VALUES ('$actor', '$spouse', '$marriageday','$bridefblink','$bridetwitterlink','$brideinstagramlink','$groomfblink','$groomtwitterlink','$groominstagramlink','$name','$target_file')";

if(mysqli_query($conn,$query)== true)
{
	$_SESSION['actor']=$actor;
    echo "data inserted successfully";
    header("location:display.php");
}
else
echo "Error";
}
}

        
?>

<html>
    <head>
    
    </head>
<body>
<form action="" method="post" enctype='multipart/form-data'>

<table align="center">

<tr>
<td>
<center><font size=4><b>Add details Form</b></font></center>
</td>
</tr>

<tr>
<td>Actor:</td>
<td><input type=text name=actor id="actor" ></td>
</tr>

<tr>
<td>Spouse:</td>
<td><input type="text" name="spouse" id="spouse"
></td>
</tr>
<tr>
<td>Marriage Day:</td>
<td><input type="date" name="marriageday" id="marriageday" ></td>
</tr>

<tr>
<td>bride facebook link:</td>
<td><input type="text" name="bridefblink"
id="bridefblink" ></td>
</tr>
    <tr>
<td>bride twitter link:</td>
<td><input type="text" name="bridetwitterlink"
id="bridetwitterlink" ></td>
</tr>
    <tr>
<td>bride  instagram link:</td>
<td><input type="text" name="brideinstagramlink"
id="brideinstagramlink" ></td>
</tr>
    <tr>
<td>groom facebook link:</td>
<td><input type="text" name="groomfblink"
id="groomfblink" ></td>
</tr>
    <tr>
<td>groom twitter link:</td>
<td><input type="text" name="groomtwitterlink"
id="groomtwitterlink" ></td>
</tr>
    <tr>
<td>groom instagram link:</td>
<td><input type="text" name="groominstagramlink"
id="groominstagramlink" ></td>
</tr>
    <tr>
        <td>upload image:</td>
        <td>
                <input type='file' name='file' />
       
        </td>
    </tr>
<tr>
<td></td>
<td><input type="submit" name="submit" value="Submit" /></td>
</tr>


</table>
</form>
</body>
</html>


