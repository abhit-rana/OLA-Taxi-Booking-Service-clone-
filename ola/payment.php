<!DOCTYPE html>
<html>
<head>
    <title> LOGIN </title>
    <link rel="stylesheet" href="styleP.css">
    <?php
        include "db_conn.php";
        include "links.php";
    ?>
</head>
<body>
    <form action="thanks.php" method="post">
        <h2>PAYMENT</h2>
        <p> Pay amount: Rs.<?php
            session_start();
            echo($_SESSION['pmoney']);
        ?>
        <?php if(isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
     </p>
        <label for="mode">Choose payment mode:</label>
        <select name="mode" id="mode">
        <option value="UPI">UPI</option>
        <option value="Wallet">Wallet</option>
        <option value="Net Banking">Net Banking</option>
        <option value="Cash">Cash</option>
        </select>
        <input type="submit" name="pay" value="Pay"/>
    </form>
    <?php
        if(isset($_POST['pay'])){
            $pType = $_POST['mode'];
            $tipAmount=$_SESSION['tipAmount'];
            $totalAmount=$_SESSION['totalAmount'];
            $transId=rand(5, 50);
            $_SESSION['transId']=$transId;
            $query="INSERT INTO `payments` (`mode`, `tipAmount`, `totalAmount`, `transactionID`) VALUES ('$pType', '$tipAmount', '$totalAmount', '$transId')";
            $result=mysqli_query($conn, $query);
        }
    ?>
</body>
</html>