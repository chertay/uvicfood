# uvic_food_app
A simple app for displaying whether specific restaurants/cafes at UVIC are open when the user opens the app.

It will check the current time and display a green light if the place is open, and a red light if it is closed.

This is my first attempt at combining Laravel and PHP to create an app so I wanted to start simple.

##Current State

Currently, it is functioning at a basic level, although there needs to be some modification to the open/closed times so that the correct light is on when the closing time is XX:30 (currently, the one's with 30min (such as 11:30) times are glitchy)

####Update:
After rebuilding my php for the times, I believe I have fixed the 30min issue. More testing required to confirm, but I am pretty confident it's fixed.

##Future Plans
Looking to set up a "countdown clock" that will display remaining time open when you are checking the app within 30min of the closing time.

Adding in Google maps to provide directions to each location (of course, this will include the users current location).

###Potential ideas

Include a searchable index where the user can search by type of food.

Perhaps instead of showing the closed places, have them hideaway if closed and show if open. Could be done using jQuery and/or Vue.js
