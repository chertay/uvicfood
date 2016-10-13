# uvic_food_app
A simple app for displaying whether specific restaurants/cafes at UVIC are open when the user opens the app.

It will check the current time and display a green light if the place is open, and a red light if it is closed.

This is my first attempt at combining Laravel and PHP to create an app so I wanted to start simple.

##Current State

Currently, it is functioning at a basic level ~~although there needs to be some modification to the open/closed times so that the correct light is on when the closing time is XX:30 (currently, the one's with 30min (such as 11:30) times are glitchy)~~ Fixed 30min errors

###Website at:
https://uvicfood.herokuapp.com/

###mobile version:
https://uvicfood-mobile.herokuapp.com/

##Future Plans
~~Looking to set up a "countdown clock" that will display remaining time open when you are checking the app within 30min of the closing time.~~ Went an alternate route of simply displaying the closing time when the user checks within 30min of closing. 

Adding in Google maps to provide directions to each location (of course, this will include the users current location) (for MVP, currently have a simple map showing the location)

Modify CSS for responsive design.

###Potential ideas

Include a searchable index where the user can search by type of food.

Perhaps instead of showing the closed places, have them hideaway if closed and show if open. Could be done using jQuery and/or Vue.js
