<?php
foreach ($_FILES["files"]["valid"] as $eachfile => $valid)
{
  if ($valid == UPLOAD_ERR_OK)
    {
      $name_store = $_FILES["files"]["name_store"][$eachfile];
      $name_final = basename($_FILES["files"]["name"][$eachfile]);
      move_uploaded_file($name_store, "received/$name_final");
    }
}
?>
