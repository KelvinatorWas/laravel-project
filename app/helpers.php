<?php

function limitCharacterCount(string $string, int $characterCount = 120):string {
  if (strlen($string) < $characterCount ) return $string;
  $splitString = substr($string, 0, $characterCount);
  
  return "{$splitString}...";
};

function isValidUser(\App\Models\Listing $listing) {
  $authUser = auth()->user();
  if (!$authUser) return false;
  if ($authUser->id === $listing->user_id) return true;
  return false;
};
