<html>
<head>
  <title>First PHP app</title>
</head>
<body>
  <?php
    $name = date("H");
    $age = 34;
    echo $name;
    switch ($age) {
    	case '34':
    		# code...
    		echo "Hello World";
    		break;
    	case '35':
    		echo "HIIIIIIIIII!!!";
    		break;
    	
    	default:
    		# code...
    		break;
    }
    while ($age>10) {
    	echo "$age</br>";
    	$age=$age-1;
    	# code...
    }
  ?>
</body>
</html>
