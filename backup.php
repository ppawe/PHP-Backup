<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<?php
session_start();

$backupName = "backups/" . $_POST["backup_name"] . ".sql";

$conn = new mysqli($_POST["mysqlHostName"], $_POST["mysqlUserName"], $_POST["mysqlPassword"], $_POST["DbName"]);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

echo "Start dump\n";

$command="mysqldump --user=" . $_POST["mysqlUserName"] . " --password=" . $_POST["mysqlPassword"] . " --host=" . $_POST["mysqlHostName"] . " " . $_POST["DbName"] . " > " . $backupName;
exec($command);

echo "-- Dump completed -- ";

$_SESSION["backupFile"] = $backupName;

?>

<button type="button" onclick="location.href='download.php'">Download File</button>

</body>
</html>
