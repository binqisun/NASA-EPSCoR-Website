<body>
	<header>
		<div class="header_div">
			<div class="header_div_div">
				<h1>
				<?php
				if(isset($_GET['page']))
				{
					if ($_GET['page']=="home") 
						echo "New COMPUTER Vision Methods for NASA Robotic Planetary Exploration";
					else if ($_GET['page']=="mission")
						echo "Mission";
					else if ($_GET['page']=="team")
						echo "Team";
					else if ($_GET['page']=="uca")
						echo "University of Central Arkansas";
					else if ($_GET['page']=="ua")
						echo "University of Arkansas";
					else if ($_GET['page']=="ualr")
						echo "University of Arkansas at Little Rock";
					else if ($_GET['page']=="projects")
						echo "Projects";
					else if ($_GET['page']=="publications")
						echo "Publications";
					else if ($_GET['page']=="outreach")
						echo "Outreach";
					else if ($_GET['page']=="studentprojects")
						echo "Student Projects";
					else if ($_GET['page']=="resources")
						echo "Resources";
					else if ($_GET['page']=="outreach")
						require_once 'include-php/outreach-main.inc.php';
					else if ($_GET['page']=="interactive")
						echo "Interactive";
					else
						echo "Outreach";
				}
				else echo "New COMPUTER Vision Methods for NASA Robotic Planetary Exploration";
				?>
				</h1>
			</div>
		</div>
	</header>
