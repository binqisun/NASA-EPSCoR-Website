<p style="color: red; margin-left: 40px; font-weight: bold;">Click
any part of the robot to see what's inside!</p>

<table onclick="getParts('none')" align="center">
	<tbody>
		<tr>
			<td>
				<img src="images/bioloid/bioloid.jpg" style="position: relative" usemap="#mymap" hidefocus="true"> 
				<map name="mymap">
					<area shape="poly" style="cursor: pointer;"coords="223,250, 259,251, 269,303, 229,301" title="Gyro Sensor" onclick="getParts('gyro')">
					<area shape="poly" style="cursor: pointer;"coords="195,175, 257,174, 257,198, 191,202" title="DMS" onclick="getParts('DMS')">
					<area shape="poly" style="cursor: pointer;"coords="211,35, 268,37, 288,70, 277,134, 192,134, 181,70" title="head" onclick="getParts('head')">
					<area shape="poly" style="cursor: pointer;"coords="180,141, 304,138, 329,297, 193,301" title="chest" onclick="getParts('chest')">
					<area shape="poly" style="cursor: pointer;"coords="73,41, 111,73, 110,106, 188,140, 159,206, 32,148" title="arm" onclick="getParts('servo')">
					<area shape="poly" style="cursor: pointer;"coords="275,374, 276,457, 196,484, 205,403" title="IR Sensor" onclick="getParts('IR')">
					<area shape="poly" style="cursor: pointer;"coords="317,129, 538,265, 450,293, 318,208" title="arm" onclick="getParts('servo')">
					<area shape="poly" style="cursor: pointer;"coords="323,317, 467,418, 407,462, 279,358" title="leg" onclick="getParts('servo')">
					<area shape="poly" style="cursor: pointer;"coords="269,309, 278,371, 202,399, 173,476, 114,470, 128,395, 191,317, 258,307" title="leg" onclick="getParts('servo')">
					<area shape="poly" coords="466,422, 526,466, 485,522, 426,428" title="IR Sensor" onclick="getParts('IR')">
				</map>
			</td>
			<td style="overflow: auto;" align="center" width="200">
				<label id="label"></label> 
				<img id="image">
				<div id="explain" style="font-size: 12px; width: 250px"></div>
				<img id="image1">
				<div id="explain1" style="font-size: 12px; width: 250px;"></div>
			</td>
		</tr>
	</tbody>
</table>

<script type="text/javascript">	
	var IRSensor = "A thermographic camera or infrared camera is a device that forms an image using infrared radiation, similar to a common camera that forms an image using visible light.";
	var IRreceive = "Embed a IR Receiver, device connected to the computer that receives IR commands";
	var CM_530 = "CM-530 Controller is a controller that includes a CPU, TTL communication board, status LED, input button, GP I/O port and weighs around 54 g. It is Compatible with the AX and MX series and supports Bluetooth and zigbee communication.";
	var servo = "Servomechanism, or servo, a device used to provide control of a desired operation through the use of feedback";
	var DMS = "Distance Measurement Sensor: can be used to detect walls or objects within a certain range.";
	var battery = "Lithium Polymer type of battery, 1.1V, 1000mA";
	var gyroSensor = "Gyro sensors, also known as angular rate sensors or angular velocity sensors, are devices that sense angular velocity.";
	var fadeIn_opacity = 0;
	var delta = 0.005;
	var colour = "blue";
function fadeIn() {
	//Set the initial opacity
	document.getElementById("image").style.opacity = fadeIn_opacity;
	//Increment by .001
	fadeIn_opacity += delta;
	if (fadeIn_opacity >= 1)
	return;
	//Set time out
	timer = setTimeout("fadeIn()", 10);
}
function fadeIn1() {
	//Set the initial opacity
	document.getElementById("image1").style.opacity = fadeIn_opacity;
	//Increment by .001
	fadeIn_opacity += delta;
	if (fadeIn_opacity >= 1)
	return;
	//Set time out
	timer = setTimeout("fadeIn1()", 1);
}
function getParts(parts) {
	if (parts == "gyro") {
		document.getElementById("label").innerHTML = "";
		document.getElementById("image").src = "images/bioloid/gyro.jpg";
		fadeIn_opacity = 0;
		fadeIn();
		document.getElementById("image").width = "100";
		document.getElementById("image").height = "100";
		document.getElementById("explain").innerHTML = "<p style='font-weight: bold'>"
		+ gyroSensor + "</p>";
		document.getElementById("explain").style.color = colour;
		document.getElementById("image1").width = "0";
		document.getElementById("image1").height = "0";
		document.getElementById("explain1").innerHTML = "";
	} 
	else if (parts == "head") {
		document.getElementById("label").innerHTML = "";
		document.getElementById("image").src = "images/bioloid/irr.png";
		fadeIn_opacity = 0;
		fadeIn();
		document.getElementById("image").width = "100";
		document.getElementById("image").height = "100";
		document.getElementById("explain").innerHTML = "<p style='font-weight: bold'>"
		+ IRreceive + "</p>";
		document.getElementById("explain").style.color = colour;
		document.getElementById("image1").width = "0";
		document.getElementById("image1").height = "0";
		document.getElementById("explain1").innerHTML = "";
	}
	else if (parts == "chest") {
		document.getElementById("label").innerHTML = "Two main parts: CM-530 Controller and battery.<p/>";
		document.getElementById("image").src = "images/bioloid/CM-530.jpg";
		fadeIn_opacity = 0;
		fadeIn();
		document.getElementById("image").width = "100";
		document.getElementById("image").height = "100";
		document.getElementById("explain").innerHTML = "<p style='font-weight: bold'>" + CM_530
		+ "</p>";
		document.getElementById("explain").style.color = colour;
		document.getElementById("image1").src = "images/bioloid/battery.jpg";
		fadeIn_opacity = 0;
		fadeIn1();
		document.getElementById("image1").width = "100";
		document.getElementById("image1").height = "100";
		document.getElementById("explain1").innerHTML = "<p style='font-weight: bold'>" + battery
		+ "</p>";
		document.getElementById("explain1").style.color = "green";
	} else if (parts == "servo") {
		document.getElementById("label").innerHTML = "";
		document.getElementById("image").src = "images/bioloid/servo.jpg";
		fadeIn_opacity = 0;
		fadeIn();
		document.getElementById("image").width = "100";
		document.getElementById("image").height = "100";
		document.getElementById("explain").innerHTML = "<p style='font-weight: bold'>" + servo
		+ "</p>";
		document.getElementById("explain").style.color = colour;
		document.getElementById("image1").width = "0";
		document.getElementById("image1").height = "0";
		document.getElementById("explain1").innerHTML = "";
	} else if (parts == "IR") {
		document.getElementById("label").innerHTML = "";
		document.getElementById("image").src = "images/bioloid/ir.png";
		fadeIn_opacity = 0;
		fadeIn();
		document.getElementById("image").width = "100";
		document.getElementById("image").height = "100";
		document.getElementById("explain").innerHTML = "<p style='font-weight: bold'>" + IRSensor
		+ "</p>";
		document.getElementById("explain").style.color = colour;
		document.getElementById("image1").width = "0";
		document.getElementById("image1").height = "0";
		document.getElementById("explain1").innerHTML = "";
	} else if (parts == "DMS") {
		document.getElementById("label").innerHTML = "";
		document.getElementById("image").src = "images/bioloid/DMS.jpg";
		fadeIn_opacity = 0;
		fadeIn();
		document.getElementById("image").width = "100";
		document.getElementById("image").height = "100";
		document.getElementById("explain").innerHTML = "<p style='font-weight: bold'>" + DMS
		+ "</p>";
		document.getElementById("explain").style.color = colour;
		document.getElementById("image1").width = "0";
		document.getElementById("image1").height = "0";
		document.getElementById("explain1").innerHTML = "";
	}
}
</script>