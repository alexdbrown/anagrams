<?php
    class Anagram
    {
        function anagramFinder($word, $list)
        {
            $word = strtolower($word);
            $list = strtolower($list);
            $input_word_array = str_split($word);
            $input_list_array = str_split($list);

            if (sort($input_word_array) == sort($input_list_array)) {
                return $list;
            }
        }
    }
?>
