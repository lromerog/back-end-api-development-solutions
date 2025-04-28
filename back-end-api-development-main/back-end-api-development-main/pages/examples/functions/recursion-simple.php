<?php       
    
    function test( $number )
    {
        static $counter = 0;
        
        if ( $number != 0 )
        {
            echo 'I\'m in the if loop and the number is ' . $number . ' <br>';
            test( --$number );
        }
        else
        {
            echo 'I\'m in the else loop<br>';
            echo 'The counter has been reduced to 0';
        }

        ++$counter;

        var_dump( $counter );
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/global.css">
    <link rel="stylesheet" type="text/css" href="/css/directory.css">
    <link rel="stylesheet" type="text/css" href="/css/facade.css">
</head>
<body>
    
    <h1>Functions: recursion (simple)</h1>

    <p><?php test( 3 ); ?></p>

</body>
</html>