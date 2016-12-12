# IndependentStudy
Fall '16 Independent Study - Diabetes Project

##Inspiration
My inspiration for this project was my 6-year-old brother, who was diagnosed with Type I Diabetes earlier this year (2016). As he is still so young, he has to wait on the insulin pump - but by the time he is old enough to wear one, I hope there will be even more efficient ways of managing diabetes and keeping track of all the data that goes along with having this condition.

This project is intended to make it easier for people with diabetes to follow the amount of carbs they have consumed at any given time, by providing a web-based application through which they can do exactly that - rather than writing by hand, in countless paper journals, the stats needing to be tracked.

##Function
The program works thusly; there is a main page, Diabetes.php, that invites you to enter three different food/drink items. This form, once the user clicks submit, searches databases to locate that item and find all of its information.

The second page, which really does all the work, is carbs.php, which takes the items entered through the form and stores them. It then logs you into your account (SQL) and finds the appropriate database from which to pull certain rows and cells. The information for each item entered is displayed in the form of tables, which list the Name, Serving Size, Carbs, and Type (food/drink) of each item. The program also keeps track of the carbs for each item, adds them all up, and presents a total number of carbs.

Below the number of carbs is a message notifying the user that the carb total has been calculated, and that they can input the information into their (hypothetical) insulin pump, so that it may do its job. The program finishes with a thank-you message.

##Conclusion
If I ever was fortunate enough to have the opportunity to work with a diabetes-focused company (such as Bigfoot Biomedical), I gladly would do so. I hope that programs to come will do so much more than my example, and that technology develops to the point where having diabetes isn't as difficult as it still is today - and that my baby brother will be able to live his life with as much ease as possible.

~Yazi
