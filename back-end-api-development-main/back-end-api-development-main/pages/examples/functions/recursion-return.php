<?php

    // Faculty of 6 (6 * 5 * 4 * 3 * 2 * 1)

    function faculty( $number ) 
    {
    
        if ( $number == 0 ) 
        {
            return 1;
        } 
        else 
        {
            return $number * faculty( $number - 1 );
        }
        
        /* or shorter:
        if ($number == 0) return 1;
        
        return $number * faculteit($number - 1);
        */
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
        
    <h1>Functions: recursion (return)</h1>
    <p>The faculty of 6 is <?= faculty( 6 ) ?></p>
    
</body>
</html>