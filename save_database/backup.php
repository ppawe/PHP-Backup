<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<?php

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

?>

<button onclick="onButtonCall()">Download File</button>
<script>
    function onButtonCall() {
        $.ajax({ url: 'download.php',
            data: {action: 'downloadFile', fileName: "<?=$backupName?>"},
            type: 'post',
            success: function(output) {
                alert(output);
            }
        });
    }
</script>
</body>
</html>
