<!doctype html>
<html>
    <head>
        <?php
        error_reporting(0);
        include("config.php");
     
        if(isset($_POST['but_upload'])){
            $maxsize =2147483648; // 
                       
           echo $name = $_FILES['file']['name'];
            echo $target_dir = "uploads/";
             echo $target_file = $target_dir . $_FILES["file"]["name"];
            echo $filesize  =$_FILES['file']['size'];

            // Select file type
            $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Valid file extensions
            $extensions_arr = array("jpg");

            // Check extension
            if( in_array($videoFileType,$extensions_arr) ){
                
                // Check file size
                if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                    echo "File too large. File must be less than 5MB.";
                }else{
                    // Upload
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                        // Insert record
                        $query = "INSERT INTO videos(name,location) VALUES('".$name."','".$target_file."')";

                        mysqli_query($con,$query);
                        echo "Upload successfully.";
                    }
                }

            }else{
                echo "Invalid file extension.";
            }
        
        }
        ?>
    </head>
    <body>
        <form method="post" action="" enctype='multipart/form-data'>
            <input type='file' name='file' />
            <input type='submit' value='Upload' name='but_upload'>
        </form>

    </body>
</html>



<?php
session_start();
error_reporting(0);
include("config.php");
if(isset($_POST['submit']))
{
echo $actor=$_POST['actor'];
echo $spouse=$_POST['spouse'];
echo $marriageday=$_POST['marriageday'];
echo $bridefblink=$_POST['bridefblink'];
echo $bridetwitterlink=$_POST['bridetwitterlink'];
echo $brideinstagramlink=$_POST['brideinstagramlink'];
echo $groomfblink=$_POST['groomfblink'];
echo $groomtwitterlink=$_POST['groomtwitterlink'];
echo $groominstagramlink=$_POST['groominstagramlink'];


echo $query="INSERT INTO videos (actor,spouse,marriageday,bridefblink,bridetwitterlink,brideinstagramlink,groomfblink,groomtwitterlink,groominstagramlink)
VALUES ('$actor', '$spouse', '$marriageday','$bridefblink','$bridetwitterlink','$brideinstagramlink','$groomfblink','$groomtwitterlink','$groominstagramlink')";

if(mysqli_query($conn,$query)== true)
{
	$_SESSION['actor']=$actor;
    echo "data inserted successfully";
}
else
echo "Error";
}

        
?>

<html>
    <head>
    
    </head>
<body>
<form action="" method="post">

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
<td></td>
<td><input type="submit" name="submit" value="Submit" /></td>
</tr>


</table>
</form>
</body>
</html>


