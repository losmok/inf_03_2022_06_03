<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zgloszenie</title>
</head>
<body>
    <?php 
        $conn = new mysqli('localhost','root','','wendkarstwo');
        $lowisko = $_POST['lowisko'];
        $data = $_POST['data'];
        $sedzia = $_POST['sedzia'];
        $zapytanie = "INSERT INTO zawody_wedkarskie (id,Karty_wedkarskie_id,Lowisko_id,data_zawodow,sedzia) VALUES (null,'0','$lowisko','$data','$sedzia')";
        
        $res=mysqli_query($conn,$zapytanie);
            if($res)
                echo("Dodano zawody wędkarskie");
        mysqli_close($conn);
    ?>
</body>
</html>