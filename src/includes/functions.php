<?php 
function nav_active($p) {
$page = basename($_SERVER['PHP_SELF']);
if ($page == "index.php" && $p == "Home") {
return "active"; 
} else if ($page == "contact.php" && $p == "Contact") {
return "active"; 
} else if ($page == "about.php" && $p == "About") {
return "active"; 
}
}
?>
