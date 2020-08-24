<?php

//Quotes in a multidimensional array

$quotes = array(
  [
        'source' => 'Nelson Mandela',
        'quote' => 'The greatest glory in living lies not in never falling, but in rising every time we fall.',
       
        'citation' => 'hubSpot blog',
       
  ],

    [
      'source' => 'Oscar Wilde',
        'quote' => 'Be yourself; everyone else is already taken.',
       
       
    ],

    [
       'source' => 'Confucius',
     'quote' => 'It does not matter how slowly you go as long as you do not stop.',
        
        
    ],

    [
    
      'source' => 'Audrey Hepburn.',
      'quote' => "Nothing is impossible, the word itself says, I'm possible.",
        
    ],

    [
      
       'source' => 'Henry Ford.',
     'quote' =>  'When everything seems to be going against you, remember that the airplane takes off against the wind, not with it.',
        
    ],
      );

//Below is the random quote generator function, which will show the above quotes randomly
function getRandomQuote ($array) {
  return $array[array_rand($array)];
}
  
  //Print quote function and prints quote to the page by calling to the above getRandomQuote function
    function printQuote($array) {
    $randomQuote = getRandomQuote($array);
    $html_string = "";
    $html_string .= '<p class="quote">' .  $randomQuote["quote"] . "</p>";
    $html_string .=  '<p class="source">' .  $randomQuote["source"] . "</p>";
    return $html_string;
   
    }
      


//This function will refresh the page automatically after every seconds and will show random quotes each time after refreshing the page

 $seconds = 7;
header("Refresh: $seconds");
  
 



?>