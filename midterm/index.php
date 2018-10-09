<?php # Script 3.7 - index.php #2

// This function outputs theoretical HTML
// for adding ads to a Web page.
function create_ad() {

    
    $msg = 'This is Assignment 1';
    echo '<div class="alert alert-info" role="alert"><p>';
    for ($x = 0; $x <= 10; $x++) {
         echo($msg);
      }
        echo("</p></div>");
} // End of the function definition.


$page_title = 'Welcome to this Site!';
include('includes/header.html');

// Call the function:
// create_ad();
?>

<div class="page-header"><h1>Midterm Information</h1></div>
<p>This is where the page-specific content goes. This section, and the corresponding header, will change from one page to the next.</p>

<p>Volutpat at varius sed sollicitudin et, arcu. Vivamus viverra. Nullam turpis. Vestibulum sed etiam. Lorem ipsum sit amet dolore. Nulla facilisi. Sed tortor. Aenean felis. Quisque eros. Cras lobortis commodo metus. Vestibulum vel purus. In eget odio in sapien adipiscing blandit. Quisque augue tortor, facilisis sit amet, aliquam, suscipit vitae, cursus sed, arcu lorem ipsum dolor sit amet.</p>

<p> The midterm includes all we have learned so far. Please use accessible styles.
Your site will display data from the tech_support database. In addition to the home page, the
customer, incidents and technicians’ pages, supply additional pages to show the following
information or provide functionality:
1. Add two hyperlinks to the customer page (see example below). When hyperlinks are clicked:
1. Display incidents for this customer (HINT: most customers have NO incidents)
2. Display products this customer has registered for
2. On the technician’s page, provide an EDIT link so technician information can be updated
(NOT the ID)
Show a screen shot one of the pages you created running in Cloud9.
Show a screen shot of your cloud repo.
 </p>


<?php
// Call the function again:
// create_ad();

include('includes/footer.html');
?>