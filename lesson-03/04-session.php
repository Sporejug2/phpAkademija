<?php



    session_start();

    if(isset($_POST['name'])) {
        $_SESSION['name'] = $_POST['name'];
    }
    // session u aplikaciji predstavlja cookie 
    //session je na serveru
    // cokie front end 
    //
    //|||| seess_123 spremiti mb
    // phpssid 123
    //redis baza u memoriji
    //
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php if(isset($_SESSION['name'])): ?>
    <p>Pozdrav <?php echo $_SESSION['name'] ?></p>
<?php endif ?>

<form action="#" method="post">
    <label>Ime:</label>
    <input type="text" name="name" />
    <button type="submit">Zapamti</button>
</form>
</body>
</html>

