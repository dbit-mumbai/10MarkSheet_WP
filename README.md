# 10MarkSheet_WP
This is a repository created for Web Programming Project based on 10th Grade Results. A proper Marksheet is generated in this project.


INTRODUCTION:

10mks : 22_YASHGUPTE_WP

This project is used to generate a proper result / marksheet format of a 10th grade student studying in SSC BOARD.

It includes 3 webpages, 2 javascript files and php files.

There are 2 forms which are used to enter the details of a specific student.

A database is created on the localhost server. The name of database is "10mks". This database consists of 2 tables - "form1" and "form2".


INSTRUCTIONS:

1.Import the 10mks.sql file on your database server.

2.Save all the contents of the repository in the server directory where webpages are located.

  -For eg. if you're using WAMP server then save the contents in the www directory of the  Wamp folder.
  
  or id you're using XAMPP server thensave the contents in the htdocs directory of the  Xampp folder.
  
3.There are two java scripts writeen for validation and data processing of form.php and form2.php pages.

4.All the images used in t=webpages are also added to the repository.


DESCRIPTION:

1.There are 3 webpages included in this project - form.php , form2.php and 10mks.php.

2.form.php is the initial page or the index page for this project.

3.User is supposed to enter details of 10th grade students studying in SSC board.

4.The contents of form.php are validated through validate1.js file which is a JavaScript written for validation of form.php.

5.After validation, the contents are stored in  10mks.sql Database which is on the localhostserver in phpmyadmin.

6.Validation and sending the data to Database is done when the user clicks on submit button.

7.Onsubmit the page is directed to next page which is form2.php .

8.In form2.php the user id supposed to enter the marks scored by the student.

9.For form validation and calculating grades, total marks and percentage of a specific student , a validate3.js file JavaScript is written.

10.When the user clicks on calculate button the grades, totalmarks and percentage of the stduent is calculated and displayed on the webpage.

11.Now this data is sent to Database 10mks.sql and stored in a table named form2. This processing is done when user clicks on the submit button of form2.php webpage.

12.Onsubmit the page is directed to next page i.e. 10mks.php.

13.On this 10mks.php page the whole 10th Grade SSC BOARD MarkSheet is generated along with the data which is fetched from the Database.

