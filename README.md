# RobotArmController

The following project is a robot arm controller based on IoT techniques. 

The robot arm has 6 motors, 
and the user can control the arm by setting the angle for each motor using this project.

The project's main page (index.html) is a simple interface that has 6 sliders and 3 buttons.
The user will set each slider according to the required angle for the corresponding motor.
Next, the save button can be used to store the values into the database.
The robot can be turned on or off using the corresponding button. 

The project also contains a CSS file that is concerned with formating the design. 

Furthermore, the project contains two php files.
The first php file is used to insert the data into the database.
The second PHP file is used to retrieve data from the DB, used to connect to the Hardware.

Finally, the project contains an sql file that contains the dump file for the database.
The sql file contains the sql queries for creating the tables needed.
In addtion, the sql queries for some sample data insertions are included. 
