# RandomStringChecker
RandomStringChecker, which is designed to evaluate whether a given string is random based on specific criteria.

Author: Roberto Aleman
Web: ventics.com
License: MIT
Created: March 16, 2025

The provided PHP code defines a class called RandomStringChecker, which is designed to evaluate whether a given string is random based on specific criteria. Here’s a breakdown of what the code does:

Class Definition: The RandomStringChecker class is initialized with a string that you want to check for randomness.
Randomness Check: The main method, isRandom(), performs several checks on the string:

Length Check: It first checks if the string has at least 10 characters. If not, it returns a message indicating that the string is not random due to insufficient length.
Character Diversity Check: It verifies that the string contains a mix of letters (both uppercase and lowercase), numbers, and special characters. If the string lacks this diversity, it returns a message stating that the string is not random.
Repetitive Patterns Check: The method checks for repetitive patterns within the string. If it finds any character repeated three or more times consecutively, it concludes that the string is not random.
Ascending and Descending Sequences Check: The code includes additional checks for ascending or descending sequences of characters. If such sequences are found, the string is deemed not random.
Reporting Results: The report() method calls the isRandom() method and returns a message indicating whether the string is random or not, along with the reason if it is not.
Example Usage: The code includes examples of how to create instances of the RandomStringChecker class and check various strings. It demonstrates different scenarios, including strings that are not random due to length, repetitive patterns, or sequences.

Overall, this code provides a structured way to assess the randomness of strings, making it useful for applications where random string generation is important, such as password creation or token generation.

Do you like the code?
Need more? Write to me and I can customize it for your project.

