<?php

require_once 'include-php/title.inc.php';
require_once 'include-php/header.inc.php';
require_once 'include-php/navigation.inc.php';
require_once 'include-php/left-header.inc.php';
if(isset($_GET['page'])){
	if ($_GET['page']=="mission")
		require_once 'include-php/mission-main.inc.php';
}
else
	require_once 'include-php/main.inc.php';
require_once 'include-php/footer.inc.php';
?>

<br>
<br>

