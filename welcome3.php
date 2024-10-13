<form action="welcome4.php" method="POST">
    <?php
    $howmany = $_POST['howmany'];
    for ($i = 1; $i <= $howmany; $i++) {
        echo "Number {$i}: <input type='text' name='input{$i}'><br>";
    }
    echo "<input type='hidden' name='howmany' value='{$howmany}'>";
    ?>
    <input type="submit">
</form>