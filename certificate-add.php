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

	if($valid == 1) {

		// getting auto increment id
		$statement = $pdo->prepare("SHOW TABLE STATUS LIKE 'tbl_certificate'");
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row) {
			$ai_id=$row[10];
		}

		$final_name = 'certificate-'.$ai_id.'.'.$ext;
        move_uploaded_file( $path_tmp, './assets/uploads/'.$final_name );
		$statement = $pdo->prepare("INSERT INTO tbl_certificate (title,photo) VALUES (?,?)");
		$statement->execute(array($_POST['title'],$final_name));
		$success_message = 'certificate is added successfully!';
		unset($_POST['title']);
	}
}
?>
<!-- 
<section class="content-header">
	<div class="content-header-left">
		<h1>Add certificate</h1>
	</div>
	<div class="content-header-right">
		<a href="certificate.php" class="btn btn-primary btn-sm">View All</a>
	</div>
</section> -->

  <div id="particles-js"></div>
<section  class="content">

	<div class="upload-certificate">

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
			
			    <div class="form-group">
				    <div class="input-group">
					    <label for="photo" class="label">Photo:</label>
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