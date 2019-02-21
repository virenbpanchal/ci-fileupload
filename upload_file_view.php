<!DOCTYPE html>
<html lang="en">
<head>
    <title>CodeIgniter Upload- Form</title>
    <!--meta info-->
    <meta charset="utf-8">
    <meta name="author" content="Viren Panchal">
    <!--Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>

<body>

<span style="color:#F00;"><?php echo $error; ?></span>

<?php echo form_open_multipart('upload_file_controller/do_upload'); ?>

<input type="file" name="userfile" size="20" /><br /><br />
<input type="submit" value="upload" />

<?php echo form_close(); ?>

</body>
</html>