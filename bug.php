function myFunction() {
  // This function demonstrates a common error in PHP when dealing with arrays and foreach loops.
  $myArray = array(1, 2, 3, 4, 5);

  // The error is that this loop tries to modify the array while iterating over it with foreach.
  // This can lead to unexpected behavior or skipping elements.
  foreach ($myArray as &$value) {
    if ($value == 3) {
      unset($myArray[$value]); //This is problematic
    }
  }

  print_r($myArray); // Output will likely be unexpected
}