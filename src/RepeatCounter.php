<?php

    class RepeatCounter
    {
        function wordCountArray($phrase, $word){

          $count = 0;

          foreach ($word as $substring) {
            $count += substr_count($phrase, $substring);
          }

          return $count;
          //$word = "at";
          //$phrase = "at the house";
          //echo substr_count($phrase, $word);
        }

    }

?>
