In PHP, a common yet subtle error arises when dealing with arrays and references.  Consider this scenario:

```php
function modifyArray(array &$arr) {
  $arr[] = 'new element';
}

$myArray = ['a', 'b'];
modifyArray($myArray);
print_r($myArray); // Output: Array ( [0] => a [1] => b [2] => new element )

$myArray2 = ['c', 'd'];
$myArray3 = &$myArray2; // Assign by reference
modifyArray($myArray3);
print_r($myArray2); // Output: Array ( [0] => c [1] => d [2] => new element )
```

This code demonstrates pass-by-reference. Modifying `$myArray3` directly impacts `$myArray2` because they share the same memory space.  However, if you unintentionally create a reference without realizing it (for example, through a function's return value or an unexpected global variable), it can lead to unexpected side effects, causing difficult-to-debug issues.