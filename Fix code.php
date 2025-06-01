# low.php
<?php

// The page we wish to display
$file = $_GET[ 'page' ];

// Input validation
$file = str_replace( array( "http://", "https://" ), "", $file );
$file = str_replace( array( "../", "..\\" ), "", $file );

?>

# medium.php:
<?php

// The page we wish to display
$file = $_GET[ 'page' ];

// Input validation
$file = str_replace( array( "http://", "https://" ), "", $file );
$file = str_replace( array( "../", "..\\, ..././" ), "", $file );  thêm cái ..././ để chặn cái path traversal đã được sử dụng

?>

#  high.php 
<?php

// The page we wish to display
$file = $_GET[ 'page' ];

$file = str_replace( array( "http://", "https://" ), "", $file );
$file = str_replace( array( "../", "..\\, ..././" ), "", $file );

if (strpos($file, '/') === 0 || strpos($file, '\\') === 0) {     //cái này dùng để ngăn chặn đường dẫn tuyệt đối
    echo "ERROR: Absolute paths are not allowed!";
    exit;
}

// Input validation
if( !fnmatch( "file*", $file ) && $file != "include.php" ) {
    // This isn't the page we want!
    echo "ERROR: File not found!";
    exit;
}

?>
