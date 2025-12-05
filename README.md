# Number-Analyzer

It's stage 1 in your PHP language learning journey

project (5) : Number Analyzer

Build a simple PHP page that takes a number from the user and analyzes it.
After the user enters a number, the program should display:

    Whether the number is positive, negative, or zero    
    Whether the number is even or odd
    If it is divisible by 3 and/or 5
    Check if the number is prime or not

output :

    Number : 10
    Sign : positive
    Even/Odd: Even
    Divisible by 3? No
    Divisible by 5? Yes
    Prime? No

//////////////////////////////////////////////////////////////////////////////////////

function

Description:

       - Write a clear explanation of what the function does.
       - Mention the purpose and behavior in simple terms.
 
Prototype:

     function function_name(type $param1, type $param2): return_type;
     function function_name($param1, $param2 ...);
     function function_name(): return_type;


Parameters:
       type $param1 :
           - Description of the first parameter.
       type $param2 :
           - Description of the second parameter.
      .....
 
Return:

       - type :
           - Explanation of what the function returns.
           - If it can return multiple types, specify them.
 
How it works:

       1. Step-by-step explanation of the function's logic.
       2. Describe each important operation inside the function.
       3. Mention any edge cases handled internally.
       4. Describe error behavior if applicable.
 

Usage example:

       function_name(value1, value2);

 
Notes:

      - Add any special notes or warnings here.
       - Mention time complexity if relevant.


// Example function

       function add_numbers(int $a, int $b): int
       {
           return $a + $b;
       }
 
       function evenOrOdd($number)
       {
           if ($number % 2 == 0)
               echo "<h1>Even/Odd: Even</h1>";
           else
               echo "<h1>Even/Odd: Odd</h1>";
       }
 


