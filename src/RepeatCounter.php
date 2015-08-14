<?php

    class RepeatCounter
    {
        function countRepeats($user_word, $user_phrase) {
            //Sets up counter
            $count = 0;

            //Puts string to all lowercase
            $user_phrase = strtolower($user_phrase);
            $user_word = strtolower($user_word);

            //Sets an empty array
            $phrase_array = array();

            $phrase_array = explode(" ", $user_phrase);


            //Goes through phrase and add words up
            foreach ($phrase_array as $word) {
                if($word == $user_word){
                  $count = $count + 1;
                }
                else {

                $count = $count + 0;
                }
            }
            
            return $count;
        }

    }

?>
