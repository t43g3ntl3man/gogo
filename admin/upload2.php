<?php include("connection.php") ?>
<?php
if(isset($_POST['submit']))
{
  $car_img_count = 0;
  $license_img_count = 0;
  $car_img_link = array("assets/img/page-section-image.png", "assets/img/page-section-image.png", "assets/img/page-section-image.png", "assets/img/page-section-image.png", "assets/img/page-section-image.png", "assets/img/page-section-image.png", "assets/img/page-section-image.png");
  $license_img_link = array("assets/img/page-section-image.png", "assets/img/page-section-image.png");
  $car_name = $_POST["c_name"];
  $car_model = $_POST["c_model"];
  $fuel_type = $_POST["f_type"];
  $engine_type = $_POST["e_type"];
  $e_num = $_POST["e_number"];
  $c_num = $_POST["c_number"];
  $c_type = $_POST["c_type"];
  mkdir("assets/img/".$car_name);

  echo "car: ".$car_name."model: ".$car_name."fuel: ".$fuel_type."Engine: ".$engine_type."Engine num: ".$e_num."Chassis num: ".$c_num;
  foreach($_FILES["fileToUpload"]["tmp_name"] as $key=>$tmp_name) 
  {

    $target_dir = "assets/img/".$car_name."/carimg";
    mkdir($target_dir);
    $target_dir = $target_dir."/";
    $target_file=$target_dir.basename($_FILES["fileToUpload"]["name"][$key]);
    $car_img_link[$car_img_count] = $target_file;
    $car_img_count = $car_img_count+1;
    $car_file_tmp=$_FILES["fileToUpload"]["tmp_name"][$key];
    $check = getimagesize($car_file_tmp);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(move_uploaded_file($car_file_tmp=$_FILES["fileToUpload"]["tmp_name"][$key], $target_file))
      echo "Uploaded";
    /*
    if($check !== false )
    {
    echo "File is image - " . $check["mime"]
    $uploadOk = 1;
    }
    else
    {
      echo "File is not image.";
      $uploadOk = 0;
    }
    if ($_FILES["fileToUpload"]["size"] > 500000 ) 
    {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    / Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" )
    {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    if ($uploadOk == 0)
      echo "Sorry, your file are not uploaded.";
    else
    {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      else
        echo "Sorry, there was an error uploading your files.";
    }
    */
  }
  foreach($_FILES["license"]["tmp_name"] as $key=>$tmp_name)
  {
    $target_dir = "assets/img/".$car_name."/license";
    mkdir($target_dir);
    $target_dir = $target_dir."/";
    $licenseImg=$target_dir.basename($_FILES["license"]["name"][$key]);
    $license_img_link[$license_img_count] = $licenseImg;
    $license_img_count = $license_img_count+1;
    $license_file_tmp=$_FILES["license"]["tmp_name"][$key];
    $license_chk = getimagesize($license_file_tmp);
    $licenseImageFileType = strtolower(pathinfo($licenseImg,PATHINFO_EXTENSION));
    if(move_uploaded_file($license_file_tmp=$_FILES["license"]["tmp_name"][$key], $licenseImg))
      echo "Uploaded";
  }
    /*
    if($license_chk != false)
    {
      echo "Files are image - " . $license_chk["mime"]
      $licens_upload_ok = 1;
    }
    else
    {
      echo "File is not image.";
      $licens_upload_ok = 0;
    }
    if ($_FILES["license"]["size"]>500000) 
    {
      echo "Sorry, your files are too large.";
      $licens_upload_ok = 0;
    }
    if($licenseImageFileType != "jpg" && $licenseImageFileType != "png" && $licenseImageFileType != "jpeg" && $licenseImageFileType != "gif" )
    {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    if ($licens_upload_ok == 0)
      echo "Sorry, your file are not uploaded.";
    else
    {
      if (move_uploaded_file($_FILES["license"]["tmp_name"], $target_file))
        echo "The file ". htmlspecialchars( basename( $_FILES["license"]["name"])). " has been uploaded.";
      else
        echo "Sorry, there was an error uploading your files.";
    }
    */
  $query = "INSERT INTO cars (name, model, fuel_type, engine_type, car_image_1, license_image_1, chassis_num, engine_num, car_image_2, car_image_3, car_image_4, car_image_5, car_image_6, license_image_2, car_type) Values ('$car_name', '$car_model', '$fuel_type', '$engine_type', '$car_img_link[0]', '$license_img_link[0]', '$c_num', '$e_num', '$car_img_link[1]', '$car_img_link[2]', '$car_img_link[3]', '$car_img_link[4]', '$car_img_link[5]', '$license_img_link[1]', '$c_type')";
  echo $query;
  $chk = $con->query($query);
}

/*$uploadOk = 1;
$licens_upload_ok = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$licenseImageFileType = strtolower(pathinfo($licenseImg,PATHINFO_EXTENSION));

echo $licenseImg;
echo $target_file;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  $license_chk = getimagesize($_FILES["license"]["tmp_name"]);
  if($check !== false && $license_chk!==false) {
    echo "Files are image - " . $check["mime"] . $license_chk["mime"] . ".";
    $uploadOk = 1;
    $licens_upload_ok = 1;
  } else {
    echo "File are not image.";
    $uploadOk = 0;
    $licens_upload_ok = 0;

  }
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000 && $_FILES["license"]["size"]>500000) {
  echo "Sorry, your files are too large.";
  $uploadOk = 0;
  $licens_upload_ok = 0;
}

// Allow certain file formats
if(($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" )  && ($licenseImageFileType != "jpg" && $licenseImageFileType != "png" && $licenseImageFileType != "jpeg" && $licenseImageFileType != "gif" )){
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
  $licens_upload_ok = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0 || $licens_upload_ok == 0) {
  echo "Sorry, your file are not uploaded.";
// if everything is ok, try to upload file
} else {
  if ((move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) && (move_uploaded_file($_FILES["license"]["tmp_name"], $licenseImg))) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    echo "The file ". htmlspecialchars( basename( $_FILES["license"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your files.";
  }
}
*/
?>
