<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <img class = "bg" src = "bg2.jpg" alt = "Timer" style = "
    width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.7;">
    <p id="demo"></p>
    <?php
        function OpenRidingTimer(){
            header("Location: RidingTimer.php");
        }
        function WaitForSec($sec){
            $i = 1;
            $last_time = $_SERVER['REQUEST_TIME'];
            while($i > 0){
                $total = $_SERVER['REQUEST_TIME'] - $last_time;
                if($total >= 2){
                    return 1;
                    $i = -1;
                }
            }
        }
    ?>
    <form>
        <script type = "text/javascript">
            function countDown(secs,elem) {
                var element = document.getElementById(elem);
                element.innerHTML = "Driver Arriving In "+secs+"       seconds";

                if(secs < 1) {
                    clearTimeout(timer);
                    element.innerHTML = '<h2>Driver has Arrived!!!! </h2>';
                    element.innerHTML = '<a href="RidingTimer.php">Start The Ride</a>';
                    return 0;
                }
                secs--;
                var timer = setTimeout('countDown('+secs+',"'+elem+'")',1000);
                
            }
            </script>

            <div class = "container" id="status"style="font-size:40px;,
            text-align: center"></div>
            
            <script>    
                // if(countDown(30,"status")){
                    countDown(30,"status");
                    
                // }

                 
            </script> 
        </script>
                <button class = "button" type = "submit"> CANCEL RIDE </button>
            
                    <!-- // if('<script type="text/javascript"> countDown(30, "status");</script>'){
                    //     // sleep(31);
                    //     header("Location: Ridingtimer.php");
                // -->
        </form>
</body>
</html>





