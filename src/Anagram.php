<?php
    class Anagram
    {
        function anagramFinder($word, $list)
        {
            $word = strtolower($word);
            $list = strtolower($list);
            $list_as_array = explode(", ", $list);
            $input_word_array = str_split($word);
            $anagrams_array = array();

            foreach ($list_as_array as $list_word) {
                $list_word_as_string = str_split($list_word);
                if (sort($input_word_array) == sort($list_word_as_string)) {
                    array_push($anagrams_array, $list_word);
                }
            }

            return implode(", ", $anagrams_array);

        }
    }
?>
