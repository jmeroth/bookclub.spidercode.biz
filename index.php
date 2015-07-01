<?php # Script 3.7 - index.php #2

// This function outputs theoretical HTML
// for adding ads to a Web page.
function create_ad() {
	echo '<p class="ad">Advertisement</p>';
} // End of the function definition.

$page_title = 'Welcome to this Site!';
include ('includes/header.html');

// Call the function:
create_ad();
?>

<h1>About the author...</h1>
<img src="http://www.davidszondy.com/future/robot/asimov.jpg" alt="Photo of Asimov" />
		
	<p>Isaac Asimov (/ˈaɪzɨk ˈæzɨmɒv/;[2] born Isaak Yudovich Ozimov; circa January 2, 1920[1] – April 6, 1992) 
	was an American author and professor of biochemistry at Boston University, best known for his works of science fiction 
	and for his popular science books. Asimov was prolific and wrote or edited more than 500 books and an estimated 90,000 letters and postcards.[3] 
	His books have been published in 9 of the 10 major categories of the Dewey Decimal Classification.[4]

	Asimov is widely considered a master of hard science fiction and, along with Robert A. Heinlein and Arthur C. Clarke, 
	he was considered one of the "Big Three" science fiction writers during his lifetime.[5] Asimov's most famous work is the Foundation Series;[6] 
	his other major series are the Galactic Empire series and the Robot series. The Galactic Empire novels are explicitly set in earlier history of 
	the same fictional universe as the Foundation series. Later, beginning with Foundation's Edge, he linked this distant future to the Robot and Spacer stories, 
	creating a unified "future history" for his stories much like those pioneered by Robert A. Heinlein and previously produced by Cordwainer Smith 
	and Poul Anderson.[7] He wrote hundreds of short stories, including the social science fiction "Nightfall", which in 1964 was voted by the 
	Science Fiction Writers of America the best short science fiction story of all time. 
	Asimov wrote the Lucky Starr series of juvenile science-fiction novels using the pen name Paul French.[8]</p>
	<p><em>-from Wikipedia</em></p>
	

<p><b>******** Test Space *************************</b></p>

<?php

function makeArr($s, $l) {
	for ($i = 0; $i < $l; $i++) {
		$newArr[] = $s + $i;
	}
	return implode(',', $newArr);
}

function FizzBuzz($myArray) {
	$myString = "";
	for ($j = 0; $j < count($myArray); $j++) {
		$i = $myArray[$j];
		if (!($i % 15))
			$myString += "FizzBuzz ";
		else if (!($i % 3))
			$myString += "Fizz ";
		else if (!($i % 5))
			$myString += "Buzz ";
		else
			$myString += "$i ";
	}
return $myString;
}

function main($key) {
	for ($length = 1; $length <=100; $length++) {
		for ($start = 1; $start <= 101 - $length; $start++) {
			echo makeArr($start, $length) . '<br/>';
			if (FizzBuzz(makeArr($start, $length)) == $key) {
				echo makeArr($start, $length) . '<br/>';
				exit();
			}
		}
	}
}

main('Fizz Buzz');



// <p><b>******** End of Test Space *******************</b></p>

// Call the function again:
create_ad();

include ('includes/footer.html');
?>