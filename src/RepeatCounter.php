<?php

    class RepeatCounter
    {
        function countRepeats($user_word, $user_phrase) {

          $count = 0;

          $user_phrase = strtolower($user_phrase);
          $user_word = strtolower($user_word);

          $phrase_array = array();

          $phrase_array = explode(" ", $user_phrase);



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
