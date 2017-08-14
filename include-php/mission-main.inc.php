<div class="main-color">
<div class="main">
	<p>
	Our project goal is to improve robotic autonomy for future NASA exploration missions. To accomplish this, we are devising innovative computer vision methods based on a new class of 3D imaging sensor: Flash LIDAR Camera (FLC). The methods include a robot pose estimation algorithm, and a 3D data segmentation method.
	<br>
	<br>
The pose estimation method includes a robot egomotion estimation method, called VR-Odometry (VRO), and an Extended Kalman Filter that tracks the robot's pose using the VRO output as the robot's motion model. The VRO may provide a more accurate estimation in robot pose change by simultaneously processing the sensor's intensity and range images. The EKF reduces the accumulative pose error of the VRO along the robot's trajectory by tracking the extended state vector that consists of the robot's position and a number of visual features step by step. The segmentation method, based on graph theory, can effectively extract flat terrain regions from a range image by making a tradeoff between accuracy and computation time.
	<br>
	<br>
The VRO and the segmentation methods will be implemented on a GPU (Graphics Processing Unit) / FPGA (Field - Programmable Gate Array) board to achieve on-board, real-time processing. They will be jointly used for autonomous robot navigation, inluding robot localization, terrain mapping, and path planning. Through these methods greater robotic autonomy can be achieved, thus reducing human control error and increasing the success of future rover exploration missions.
	<br>
	<br>
	</p>
</div>
</div>