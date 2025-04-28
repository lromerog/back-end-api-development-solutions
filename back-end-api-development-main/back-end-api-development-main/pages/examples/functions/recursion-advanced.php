<?php

    function containsNumber ( $string )
    {
        // Als de string leeg is, return dan false
        // Betekent dat er geen cijfer in de string is gevonden
        if ( $string == '' )
        {
            return false;
        }
        else
        {
            $firstChar =    substr ( $string, 0, 1 );

            if ( is_numeric ( $firstChar ) )
            {
                return true;
            }
            else
            {
                $nextPortion = substr( $string, 1 );
                return containsNumber( $nextPortion );
            }
        }
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
        
    <h1>Functions: recursion (advanced)</h1>
    
    <p>Does 'ab2cde' contain a number? <?= ( containsNumber( 'ab2cde' ) ) ? 'Yes!' : 'No...' ?></p>
    
</body>
</html>