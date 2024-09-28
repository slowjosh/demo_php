<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>This is php</p>
    
    <?php
      $weekname = "monday";
      switch($weekname){
       
        case "Monday":
            echo "weekdays";
            break;                 
        case "Tuesday":
            echo "weekdays";
            break;
        case "Wednesday":
            echo "weekdays";
            break;  
        case "Thursday":
            echo "weekdays";
            break;  
        case "Friday":
            echo "weekdays";
            break;
        case "Saturday":
            echo "weekend";
            break;  
        case "Sunday":
            echo "weekend";
            break;
            default:
                echo "not valid day";
                break;     
      }

    ?>
</body>
</html>