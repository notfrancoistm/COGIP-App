<?php
   function string_validation (string $input): bool {
      $pattern = '/^[a-zA-Z ]{3,50}$/';
      return preg_match($pattern, $input) ? true : false;
   }

   function country_validation (string $input): bool {
      $pattern = '/^[A-Z]{2} 0[0-9]{3} [0-9]{3} [0-9]{3}$/';
      return preg_match($pattern, $input) ? true : false;
   }

   
?>