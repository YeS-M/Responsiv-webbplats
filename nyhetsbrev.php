<html>
    <body>
        
<form action="nyhetsbrev.php" method="POST">
Hej <?php echo $_POST["förnamn"]; ?>!<br><br>
Tack för din anmälan till vårt nyhetsbrev!<br><br>
Din e-postadress är: <?php echo $_POST["email"]; ?>
</body>
</html>