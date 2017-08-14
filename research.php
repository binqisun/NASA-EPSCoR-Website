<?php
require_once 'include-php/title.inc.php';
require_once 'include-php/header.inc.php';
require_once 'include-php/navigation.inc.php';
require_once 'include-php/left-header.inc.php';
if ($_GET['page']=="team")
	require_once 'include-php/team-main.inc.php';
else if ($_GET['page']=="projects")
	require_once 'include-php/projects-main.inc.php';
else if ($_GET['page']=="publications")
	require_once 'include-php/publications-main.inc.php';
else if ($_GET['page']=="ualr")
	require_once 'include-php/team-ualr.inc.php';
else if ($_GET['page']=="uca")
	require_once 'include-php/team-uca.inc.php';
else if ($_GET['page']=="ua")
	require_once 'include-php/team-ua.inc.php';
require_once 'include-php/footer.inc.php';
?>