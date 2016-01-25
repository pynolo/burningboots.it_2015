<?php
$lc = ""; // Initialize the language code variable
// Check to see that the global language server variable isset()
// If it is set, we cut the first two characters from that string
if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
    $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}
// Now we simply evaluate that variable to detect specific languages
if($lc == "it"){
    header("location: index.html");
    exit();
} else{
    header("location: index_en.html");
    exit();
}
?>