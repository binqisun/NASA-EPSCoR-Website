<?php
require_once 'include-php/title.inc.php';
require_once 'include-php/header.inc.php';
require_once 'include-php/navigation.inc.php';
require_once 'include-php/left-header.inc.php';
if ($_GET['page']=="outreach")
	require_once 'include-php/outreach-main.inc.php';
else if ($_GET['page']=="studentprojects")
	require_once 'include-php/studentprojects-main.inc.php';
else if ($_GET['page']=="resources")
	require_once 'include-php/resources-main.inc.php';
else if ($_GET['page']=="science_night")
	require_once 'include-php/science-night-main.inc.php';
else if ($_GET['page']=="chalk_talk")
	require_once 'include-php/chalk-talk-main.inc.php';
else if ($_GET['page']=="industry")
	require_once 'include-php/industry-main.inc.php';
else if ($_GET['page']=="computerdemo")
	require_once 'include-php/computer-science-demo-main.inc.php';

else if ($_GET['page']=="majorfair")
	require_once 'include-php/major-fair-main.inc.php';

else if ($_GET['page']=="robotics_workshop")
	require_once 'include-php/workshop.inc.php';
else if ($_GET['page']=="robotics_workshop1")
	require_once 'include-php/workshop1.inc.php';
else if ($_GET['page']=="robotics_workshop2")
	require_once 'include-php/workshop2.inc.php';
else if ($_GET['page']=="robotics_workshop3")
	require_once 'include-php/workshop3.inc.php';

else if ($_GET['page']=="sumcamp")
	require_once 'include-php/sumcamp.php';

else if($_GET['page']=="symposium")
	require_once 'include-php/symposium.inc.php';	


require_once 'include-php/footer.inc.php';

?>