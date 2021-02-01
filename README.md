# Arithmetic Array (PHP)

Using the mathematical operation between two arrays with the same key

Utilizando operação matemática entre dois arrays com a mesma chave

### Example

```php
include_once "ArithmeticArray.php";
$op = new ArithmeticArray();

$a = ['y'=>10,'x'=>9.50];
$b = ['y'=>3,'x'=>3];

print_r($op->operation($a,$b,'+')); // result = ['y'=>13 'x'=>12.5]
print_r($op->operation($a,$b,'-')); // result = ['y'=>7 'x'=>6.5]
print_r($op->operation($a,$b,'*')); // result = ['y'=>30 'x'=>28.5]
print_r($op->operation($a,$b,'/')); // result = ['y'=>3.33 'x'=>3.17]

```
