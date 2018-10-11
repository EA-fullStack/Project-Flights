<?php
$title = "Add Pilot";
require_once '..\html-templates\head.php';
require_once '../dal.php';

?>
<body>
    <?php
    require_once '../header.php';
    ?>
    <main class="container-fluid my-4">
    
    <h1 class="mb-5 text-center"><u>Add Pilot</u></h1>
        <section class="container px-5">
            <form enctype="multipart/formdata" class="mx-auto w-50 border border-secondary rounded" method=POST>
                <div class="row justify-content-center my-4">
                    <div class="col-10 input-group">
                        <input type="text" name="pilotName" class="form-control" placeholder="Desmond Sanford" aria-label="Username" aria-describedby="basic-addon1">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon1">Pilot's Name</span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center my-4">
                    <div class="col-10 input-group">
                        <div class="custom-file">
                            <input type="file" name="pilotPicture" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose a Picture</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center my-3">
                    <button name='submit' type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
<?php
    if(isset($_POST['submit']))
    {   
        if($_POST['pilotName'] === '' || $_POST['pilotPicture'] === ''){
            echo "error";
            return;
        }
        // get the post data
        $name = $_POST['pilotName'];
        // $picture_src = $_POST['pilotPicture'];
        
        $target_dir = "/assets/pilot-profiles/";
        $target_file = $target_dir . basename($_FILE["pilotPicture"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        
            $check = getimagesize($_FILES["pilotName"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
            } else {
                echo "File is not an image.";
            }
        // send data to sql
        $statement = $pdo->prepare("INSERT INTO pilot (`name`, `picture_src`) VALUES (:pn, :pp)");
		$statement->execute(array(
			"pn" => $name,
			"pp" => $picture_src,
			
		));
		echo 'success!';
    }
    //     $name=$_FILES['file']['name'];
    //     $type=$_FILES['file']['type'];

    //     if($type=='image/jpeg' || $type=='image/png' || $type=='image/gif' || $type=='image/pjpeg')
    //     {
    //         if(file_exists(dirname($_SERVER['DOCUMENT_ROOT']).'/assets/pilot-profiles/'.$name))
    //         {
    //             echo'file is already present';
    //         }
    //         else
    //         {
    //             $up=move_uploaded_file($_FILES['file']['tmp_name'],dirname($_SERVER['DOCUMENT_ROOT']).'/assets/pilot-profiles/'.$name);
    //             $q=mysql_query("insert into image va('','".$name."')");
    //             if($up && $q)
    //             {
    //                 echo'image uploaded and stored';
    //             }
    //             elseif(!$up) 
    //             {
    //                 echo'image not uploaded';
    //             }
    //             elseif(!$q)
    //             {
    //                 echo'image not stored';
    //             }
    //         }
    //     }
    //     else
    //     {
    //         echo'Invalid file type';
    //     }
    // }
?>
        </section>

    </main>
    <?PHP 
require_once '..\html-templates\footer.php';
?>
