<?php

// Get pizza data sent by GET
// isset() tests for data at the gateway, required on many servers
// Radio buttons pass values ($size), Checkboxes pass a state T/F
// This is skeleton code, use the "PHP starter page"
if(isset($_GET["name"])) { $name = $_GET["name"]; } else { $name = ""; }
if(isset($_GET["size"])) { $size = $_GET["size"]; } else { $size = ""; }
if(isset($_GET["pepp"])) { $pepp = $_GET["pepp"]; } else { $pepp = ""; }
if(isset($_GET["mush"])) { $mush = $_GET["mush"]; } else { $mush = ""; }
if(isset($_GET["gppr"])) { $gppr = $_GET["gppr"]; } else { $gppr = ""; }

print "
<style>
body { margin: 4%; }
</style>

<body>
<h1>Pizza Order for $name (GET)</h1>
<p><b>Size:</b> $size<br /><br /><b>Toppings:</b>  
";

// Print topping if checked
if($pepp) { print "pepperoni "; }
if($mush) { print "mushrooms "; }
if($gppr) { print "grn-pepper "; }

print "
</p>
</body>
";

?>