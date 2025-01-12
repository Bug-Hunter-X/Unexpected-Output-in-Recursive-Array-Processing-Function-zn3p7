```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = self::processData($value); // Recursive call
    } else if (is_string($value) && strpos($value, ',') !== false) {
      $data[$key] = explode(',', $value); 
    }
  }
  return $data; 
}

$input = ['a' => '1,2,3', 'b' => ['c' => '4,5,6', 'd' => '7']];
$output = processData($input);
print_r($output);
```