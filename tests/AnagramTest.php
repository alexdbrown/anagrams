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

        function test_anagramFinder_oneAnagram()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $word = "stressed";
            $list = "dessert";

            //Act
            $result = $test_Anagram->anagramFinder($word, $list);

            //Assert
            $this->assertEquals("dessert", $result);
        }

        function test_anagramFinder_anyAnagram()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $word = "rat";
            $list = "art, tar";

            //Act
            $result = $test_Anagram->anagramFinder($word, $list);

            //Assert
            $this->assertEquals("art, tar", $result);
        }
    }
?>
