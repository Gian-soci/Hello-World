<?php

$values = array(1, 9, 2, 10003, 5, 44, 999, 2, 5);

  function soci_sort($values) {

    // if (count($values) == 0) {
    //   return $values;
    // } else {
      $leftArray = array();
      $rightArray = array();
      $pivot = array_pop($values);

      foreach ($values as $val) {
        if ($val <= $pivot) {
          $leftArray[] = $val;
        } else {
          $rightArray[] = $val;
        }
      }
    // }

    $result = array_merge(soci_sort($leftArray), array($pivot), soci_sort($rightArray));

      if (count($values) == 0) {
        return $result;
      }

    echo $result;
    return $result;
  };
  // echo implode(" ", $result);

  $sorted_numbers = soci_sort($values);

  print_r($sorted_numbers);

