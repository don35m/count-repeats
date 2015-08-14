<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_wordCount_oneWord()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $input_word = "at";
            $input_phrase = "at the house";

            //Act
            $result = $test_repeatCounter->wordCountArray($input_word, $input_phrase);

            //Assert
            $this->assertEquals(1, $result);
        }
    }

?>
