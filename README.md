# Event_Scheduler
Event scheduling website which allows to create,invite and accept invitations of public/private events.
## Getting Started
1.Clone this repo and unzip in htdocs found under xampp<br>
2.Run phpMyAdmin and create database and import db from the database sql uploaded.
### Libraries required
1.Semantics: <br>
https://github.com/Semantic-Org/Semantic-UI-CSS/archive/master.zip<br>
2.Materialize: <br>
https://github.com/Dogfalo/materialize/releases/download/1.0.0/materialize-v1.0.0.zip<br>
-Unzip these in main folder.
<br>
Everything is set Now -->
Launch browser and to link localhost/Event_Scheduler/home<br>
3.You can login/sign up from top as user/admin.
Your signup request will be received to admin and will be activated by admin.
For admin login with following credentials
	email : admin@gmail.com
	password:admin
	select admin from dropdown
## Admin Features:
1.After login you are on dashboard  displaying statistics :
	-Total Registered Users
	-Total Active Users
	-Total inactive Users<BR>
2.From navbar select venues
	-Add New Venue
	-Update or Delete<br>
3.From navbar select users
	-To activate/deactivate users<br>

			
## User’s Features:
	-Venues can be viewed from navbar
	-All Venues are displayed with time limit set by Admin
	-User can input time and date for booking and select the venue
	-All the Events are displayed under Events
	-and the events which will be attended by user is under emaild
	-After giving input “+”   will redirect to create event
	-Invite can be send from Event page
	-user can accept/reject Invitation
## ADVANCED FEATURES
	-google login on login page
	-After creating event user can upload file to describe 
	-if no venue is available you are provided with relative results (by clicking on button)
	-user can give multiple inputs if any available it is displayed (first select number of inputs and then fill the fields)
	-from the event page user can change privacy (toggle)
	-if user want to attend the event he can request by 
	-Notification to all users attending any event under Notification
