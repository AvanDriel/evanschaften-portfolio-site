# Erik van Schaften Porfolio site with reservation system and small cms. See it live! http://erikvanschaften.nl

# About this project
This project was originally an assignmet from school, where I had to built a small reservation system using php, with a small content management system. We had to find a 'real' client to build this for, so i decided to do this for a friend of mine. When we did a little brainstorm on what the reservation system should be about, we decided to make it about fictional workshops. After that out brainstorm session got a little out of hand and I ended up building an entire portfolio website.

# The website and it's design
Erik is a student at an art school, so he wanted to desing the website and wanted it to represent 'him'. The moving elements, colors and everything visual was designed by him. It was a cool opportunity for me, because it was something entirely different than your average website, and I got to do some wacky animation work. The code behind it is nothing very special, and mainly basic html/css/js.
I did make a seperate main page for mobile, because of the style of the original main page with its animation.

# The reservation system
The reservation page shows two workshops, which it gets from a database. When you click on the reservation button, you get redirected to a page where you fill in your name, email and the date you want to pick. These dates are also from the database, where they are set by the Admin using the admin side of the system. This reservation then gets sent to the database.

# Admin panel and CMS
To access the Admin panel you need to login using the admin credentials. Upon a successful login a session is started to give you access to the other pages (There is verification for this session on every admin page). On the first page is a list of all the reservations users sent to the database, with a delete button to delete the reservation.
On the Account tab, it is possible to change the admin login credentials. The password is hashed using the php "password_hash" function.
On the last tab is the little cms-like system. Here you can change the title, description and dates for the two workshops visible for the users. This gets stored in the database after which it can be seen by users.
