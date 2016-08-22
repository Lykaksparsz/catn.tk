<?php
echo 'Adding directory variable..';
$to = "f/".$_FILES['file']['name'] or header("Location: uploadfailed.html");
echo 'Uploading..';
if($_FILES['file']['size'] >= "2862650") { header("Location: uploadfailed.html"); }
move_uploaded_file($_FILES['file']['tmp_name'], $to) or header("Location: uploadfailed.html");
echo 'Completed, redirecting to uploaded files..';
header("Location: ".$to);
?>
