To avoid this problem, always be mindful of pass-by-reference.  In many cases, it's safer to explicitly create copies instead of using references.

```php
function modifyArraySafe(array $arr) {
  $arrCopy = $arr; // Create a copy
  $arrCopy[] = 'new element';
  return $arrCopy; // Return the modified copy
}

$myArray = ['a', 'b'];
$myArray = modifyArraySafe($myArray); // Assign the copy back
print_r($myArray); // Output: Array ( [0] => a [1] => b [2] => new element )

$myArray2 = ['c', 'd'];
$myArray3 = $myArray2; // Create a copy
$myArray3 = modifyArraySafe($myArray3);
print_r($myArray2); // Output: Array ( [0] => c [1] => d )
print_r($myArray3); // Output: Array ( [0] => c [1] => d [2] => new element)
```

By creating a copy (`$arrCopy`), we modify a separate array, preventing unintended side effects.  Always consider using this approach when you are unsure about the impact of modifications on potentially referenced arrays.