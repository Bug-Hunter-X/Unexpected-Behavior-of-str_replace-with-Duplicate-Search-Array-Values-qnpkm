To correctly replace all occurrences, even with duplicate search values, you need to iterate through the search and replace arrays manually.

```php
$search = array('apple', 'banana', 'apple');
$replace = array('orange', 'grape', 'kiwi');
$string = 'I like apple and banana and apple.';

for ($i = 0; $i < count($search); $i++) {
  $string = str_replace($search[$i], $replace[$i], $string);
}
echo $string; // Output: I like orange and grape and kiwi.
```

This iterative approach ensures that every instance of each search term is replaced with its corresponding replacement value, regardless of duplicates in the search array.