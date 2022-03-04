<?php
$title = "PHP CV Builder - History";
include "./includes/header.php"; ?>
<?php
$currentUser = $_SESSION["sessionuser"];
$directory = "./archives/".$currentUser;
$scanned_directory = array_diff(scandir($directory), array('..', '.'));

echo "<div class='text-center'>";
foreach($scanned_directory as $file){
    echo "<a href=".$directory."/".$file.">".$file."</a> <br />";
}
echo "</div>";

?>
<?php
include "./includes/footer.php"; ?>

