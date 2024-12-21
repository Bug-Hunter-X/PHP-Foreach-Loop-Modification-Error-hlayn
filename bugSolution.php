function myFunction() {
  //Corrected function to handle array modification
  $myArray = array(1, 2, 3, 4, 5);
  $newArray = [];

  // Iterate over the original array and add only the needed elements to the new array.
  foreach ($myArray as $value) {
    if ($value != 3) {
      $newArray[] = $value;
    }
  }

  print_r($newArray); // Output will be as expected.
}