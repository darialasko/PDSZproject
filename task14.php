<?php

define( 'DATE', 1);
define( 'TIME', 2);
define( 'DATE_TIME', 3);
define( 'DAY_OF_WEEK', 4);

define( 'HOUR', 3600 );
define( 'DAY', 86400 );
define( 'WEEK', 604800 );
define( 'MONTH', 2419200);

function formatDate( $format, int $time = null ): string {
    if(is_null($time)){
        $time = time();
    }
    switch( $format ) {
        case DATE:
            return date( 'Y-m-d', $time);
            break;
        case TIME:
            return date( 'H:i:s', $time);
            break;
        case DATE_TIME:
            return date( 'Y-m-d H:i:s', $time);
            break;
        case DAY_OF_WEEK:
            return  date( 'l', $time);
            break;
    }
}

function add_substract_seconds( $mode, int $value ) {
if ( DATE_ADD === $mode ){
    return time() + $value;
} elseif ( DATE_SUBSTRACT === $mode ){
    return time() - $value;
} else {
    return time();
}
}


echo formatDate( DATE_TIME, add_substract_seconds )."<br/>";
echo formatDate( TIME )."<br/>";
echo formatDate( DATE_TIME )."<br/>>";
echo formatDate( DAY_OF_WEEK )."<br/>";

