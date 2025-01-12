```php
function processData(array $data): array {
    $result = [];
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $result[$key] = self::processData($value); // Recursive call
        } else if (is_string($value) && strpos($value, ',') !== false) {
            $result[$key] = explode(',', $value);
        } else {
            $result[$key] = $value; // Handle other data types
        }
    }
    return $result;
}

$input = ['a' => '1,2,3', 'b' => ['c' => '4,5,6', 'd' => '7']];
$output = processData($input);
print_r($output);
```