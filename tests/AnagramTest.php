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
            $this->assertEquals("", $result);
        }

        function test_anagramFinder_capsOff()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $word = "Bread";
            $list = "BEARD";

            //Act
            $result = $test_Anagram->anagramFinder($word, $list);

            //Assert
            $this->assertEquals("beard", $result);
        }

        function test_anagramFinder_oneAnagram()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $word = "stressed";
            $list = "desserts";

            //Act
            $result = $test_Anagram->anagramFinder($word, $list);

            //Assert
            $this->assertEquals("desserts", $result);
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

        function test_anagramFinder_onlyAnagram()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $word = "cool";
            $list = "loco, milk, cool";

            //Act
            $result = $test_Anagram->anagramFinder($word, $list);

            //Assert
            $this->assertEquals("loco", $result);
        }
    }
?>
