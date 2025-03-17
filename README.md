# RandomStringChecker
RandomStringChecker, which is designed to evaluate whether a given string is random based on specific criteria.

Author: <b>Roberto Aleman</b><br/>
Web: <b>ventics.com</b><br/>
License: <b>MIT</b><br/>
Created: <b>March 16, 2025</b><br/>

<span class="">The provided PHP code defines a class called <code translate="no">RandomStringChecker</code>, which is designed to evaluate whether a given string is random based on specific criteria. Here’s a breakdown of what the code does:</span>
<ol class="">
 	<li class=""><span class=""><strong>Class Definition</strong>: The <code translate="no">RandomStringChecker</code> class is initialized with a string that you want to check for randomness.</span></li>
 	<li class=""><span class=""><strong>Randomness Check</strong>: The main method, <code translate="no">isRandom()</code>, performs several checks on the string:</span>
<ul class="">
 	<li class=""><strong>Length Check</strong>: It first checks if the string has at least 10 characters. If not, it returns a message indicating that the string is not random due to insufficient length.</li>
 	<li class=""><strong>Character Diversity Check</strong>: It verifies that the string contains a mix of letters (both uppercase and lowercase), numbers, and special characters. If the string lacks this diversity, it returns a message stating that the string is not random.</li>
 	<li class=""><strong>Repetitive Patterns Check</strong>: The method checks for repetitive patterns within the string. If it finds any character repeated three or more times consecutively, it concludes that the string is not random.</li>
 	<li class=""><strong>Ascending and Descending Sequences Check</strong>: The code includes additional checks for ascending or descending sequences of characters. If such sequences are found, the string is deemed not random.</li>
</ul>
</li>
 	<li class=""><span class=""><strong>Reporting Results</strong>: The <code translate="no">report()</code> method calls the <code translate="no">isRandom()</code> method and returns a message indicating whether the string is random or not, along with the reason if it is not.</span></li>
 	<li class=""><span class=""><strong>Example Usage</strong>: The code includes examples of how to create instances of the <code translate="no">RandomStringChecker</code> class and check various strings. It demonstrates different scenarios, including strings that are not random due to length, repetitive patterns, or sequences.</span></li>
</ol>
<span class="">Overall, this code provides a structured way to assess the randomness of strings, making it useful for applications where random string generation is important, such as password creation or token generation.</span>

<p>Do you like the code?</p>
<p><b>Need more? Write to me and I can customize it for your project.</b></p>

