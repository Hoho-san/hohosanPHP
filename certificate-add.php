<?php require_once('header.php'); ?>

<?php
if(isset($_POST['form1'])) {
	$valid = 1;

	if(empty($_POST['title'])) {
		$valid = 0;
		$error_message .= 'Title can not be empty<br>';
	}

	$path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path!='') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' && $ext!='webp' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, webp , gif or png file<br>';
        }
    } else {
    	$valid = 0;
        $error_message .= 'You must have to select a photo<br>';
    }

if ($valid == 1) {
    // Getting auto increment id
    $query = "SHOW TABLE STATUS LIKE 'tbl_certificate'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $ai_id = $row['Auto_increment'];
    }

    $final_name = 'certificate-' . $ai_id . '.' . $ext;
    move_uploaded_file($path_tmp, './assets/uploads/' . $final_name);

    $title = $_POST['title'];
    $photo = $final_name;
    $query = "INSERT INTO tbl_certificate (title, photo) VALUES ('$title', '$photo')";
    if ($conn->query($query) === true) {
        echo "<script>alert('Certificate is added successfully!!')</script>";
        echo "<script>window.location.href = 'certificate.php';</script>";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    unset($_POST['title']);
} else {
    echo "<script>alert('Title and images cannot be empty')</script>";
}
}

?>

  <div id="particles-js"></div>
<section  class="content">
 
	<div class="upload-certificate">
        <h1 class="certheader" style="padding-bottom: 4rem;"> Add Certificate</h1>    
	    <div class="form-container">
		    <form class="certificate-form" action="" method="post" enctype="multipart/form-data">
			    <div class="form-group">
				    <div class="input-group">
					    <label for="title" class="label">Title:</label>
					    <div class="input-wrapper">
						    <input type="text" autocomplete="off" class="input" name="title" value="<?php if(isset($_POST['title'])){echo $_POST['title'];} ?>">
					    </div>
				    </div>
			    </div>

                <div class="cloud">
                    <i class="fa-solid fa-image"></i>
                </div>

			    <div class="form-group">
				    <div class="input-group">
					    <label for="photo" class="label" >Photo:</label>
					    <div class="input-wrapper" style="padding-top: 5px">
					    	<input type="file" name="photo" class="file-input">(Only jpg, jpeg, gif and png are allowed)
					    </div>
				    </div>
			    </div>
			
			    <div class="form-group">
				    <div class="input-group" style="display: flex; justify-content: center;">
					    <label for="" class="label"></label>
					        <div class="button-submit" >
						        <button type="submit" class="submit-button" name="form1">Submit</button>
					        </div>
				        </div>
			        </div>
		        </div>
                
	        </form>
        </div>
    </div>

</section>

<?php require_once('footer.php'); ?>