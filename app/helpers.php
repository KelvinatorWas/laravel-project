<?php

function limitCharacterCount(string $string, int $characterCount = 120):string {
  if (strlen($string) < $characterCount ) return $string;
  $splitString = substr($string, 0, $characterCount);
  
  return "{$splitString}...";
};
