<?php
$title = "PHP CV Builder - History";
include "./includes/header.php"; ?>
<?php
require("./config.php");

$sessionid = $_SESSION["sessionid"];

$sql = "SELECT * FROM archive WHERE user_id=?";
$mysqli->init();
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $sessionid);
$stmt->execute();
$result = mysqli_fetch_all($stmt->get_result());
echo '<div class="text-center">';
for ($i = 0; $i < count($result); $i++) {
    $linkstr = 'fname=' . $result[$i][2] . '&lname=' . $result[$i][3] . '&email=' . $result[$i][4] . '&phone=' . $result[$i][5] . '&address=' . $result[$i][6] . '&position=' . $result[$i][7] .
        '&primary=' . $result[$i][8] . '&secondary=' . $result[$i][9];
    $startYearEdu = explode("|", $result[$i][10]);
    $gradYearEdu = explode("|", $result[$i][11]);
    $institution = explode("|", $result[$i][12]);
    $institutionstring = '';

    for ($n = 0; $n < count($institution); $n++) {
        $institutionstring .= '&startYear[' . $n . ']=' . $startYearEdu[$n] . '&gradYear[' . $n . ']=' . $gradYearEdu[$n] . '&institution[' . $n . ']=' . $institution[$n];
    }
    $startYearExp = explode("|", $result[$i][13]);
    $leavingYear = explode("|", $result[$i][14]);
    $job = explode("|", $result[$i][15]);
    $info = explode("|", $result[$i][16]);
    $jobstring = '';
    for ($m = 0; $m < count($job); $m++) {
        $jobstring .= '&startExp[' . $m . ']=' . $startYearExp[$m] . '&leaving[' . $m . ']=' . $leavingYear[$m] . '&job[' . $m . ']=' . $job[$m] . '&info=[' . $m . ']=' . $info[$m];
    }

    $finallink = $linkstr . $institutionstring . $jobstring;
    $fileGet = file_get_contents("generate.php?" . $finallink);
    echo '<a href="generate.php?' . $finallink . '" class="primary-link my-3 ajaxlink" target="_blank" onclick="makeRequest()">' . $result[$i][17] . '</a> <br />';
}
echo '</div>';
?>
<?php
include "./includes/footer.php"; ?>

