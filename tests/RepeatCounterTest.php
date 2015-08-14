<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_countRepeats_oneWord()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $word = "at";
            $phrase = "at the house";

            //Act
            $count= $test_repeatCounter->countRepeats($word, $phrase);

            //Assert
            $this->assertEquals(1, $count);
        }

        function test_countRepeats_twoWord()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $word = "at";
            $phrase = "at the house at pauls";

            //Act
            $count= $test_repeatCounter->countRepeats($word, $phrase);

            //Assert
            $this->assertEquals(2, $count);
        }


        function test_countRepeats_capitalWord()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $word = "at";
            $phrase = "At the house at pauls";

            //Act
            $count= $test_repeatCounter->countRepeats($word, $phrase);

            //Assert
            $this->assertEquals(2, $count);
        }

        function test_countRepeats_insideWord()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $word = "at";
            $phrase = "At the house at pauls we went to get that";

            //Act
            $count= $test_repeatCounter->countRepeats($word, $phrase);

            //Assert
            $this->assertEquals(2, $count);
        }


}

?>
