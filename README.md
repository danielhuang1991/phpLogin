# phpLogin
quick session about beginner level php



1.	login.html - Create a form that contains three input fields on it: email, name and password. When the form is submitted, it should go to login.php

2.	login.php

Validate the user input. All fields are mandatory. Email must be a valid email address and password must contain at least six characters. Once validated, store user information (email and name) in a session variables. You can alternatively use cookies.  Redirect user to welcome.php.
If user input is missing in one of the input fields or form doesn’t validate, redirect user to login.html. You don’t need to display any error messages.

3.	welcome.php

Check if the user has signed in to the system. If signed in, welcome user by using “name” of the user. Otherwise, redirect to login.html. 
Include a link for the user to sign out.

4.	logout.php

Sign out the user by destroying session variables.
