<?php # Script 3.7 - index.php #2

// This function outputs theoretical HTML
// for adding ads to a Web page.
function create_ad() {
	echo '<p class="ad">This is an annoying ad! This is an annoying ad! This is an annoying ad! This is an annoying ad!</p>';
} // End of the function definition.

$page_title = 'Welcome to this Site!';
include ('includes/header.html');

// Call the function:
create_ad();
?>

<h1>About the book club...</h1>
<img src="http://www.davidszondy.com/future/robot/asimov.jpg" alt="asimov" />
		
	<p>Born in the smoke filled "Cocina del Hombre" night-spot, in the nuvo-trendy union district of Somervilletown... this small but diverse group of sci-fi fans plan to gather and soak in the works of Isaac Asimov.</p>
	
	<p>Volutpat at varius sed sollicitudin et, arcu. Vivamus viverra. Nullam turpis. Vestibulum sed etiam. Lorem ipsum sit amet dolore. Nulla facilisi. Sed tortor. Aenean felis. Quisque eros. Cras lobortis commodo metus. Vestibulum vel purus. In eget odio in sapien adipiscing blandit. Quisque augue tortor, facilisis sit amet, aliquam, suscipit vitae, cursus sed, arcu lorem ipsum dolor sit amet.</p>

<?php

// Call the function again:
create_ad();

include ('includes/footer.html');
?>