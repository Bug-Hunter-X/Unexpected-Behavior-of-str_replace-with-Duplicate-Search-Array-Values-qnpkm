This code snippet demonstrates a potential issue with PHP's `str_replace` function when dealing with arrays as the search and replace values.  If the search array contains duplicate values, only the first occurrence of each duplicate is replaced, leading to unexpected results.

```php
$search = array('apple', 'banana', 'apple');
$replace = array('orange', 'grape', 'kiwi');
$string = 'I like apple and banana and apple.';

$newString = str_replace($search, $replace, $string);
echo $newString; // Output: I like orange and grape and apple.
```

The expected output, if all occurrences were replaced, would be: 'I like orange and grape and kiwi.'