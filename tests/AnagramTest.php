<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_anagramFinder_sameWord()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $word = "bread";
            $list = "bread";

            //Act
            $result = $test_Anagram->anagramFinder($word, $list);

            //Assert
            $this->assertEquals("bread", $result);
        }
    }
?>
