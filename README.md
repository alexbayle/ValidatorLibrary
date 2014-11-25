# Validator
[![Build Status](https://scrutinizer-ci.com/g/alexbayle/ValidatorLibrary/badges/build.png?b=master)](https://scrutinizer-ci.com/g/alexbayle/ValidatorLibrary/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/alexbayle/ValidatorLibrary/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/alexbayle/ValidatorLibrary/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/alexbayle/ValidatorLibrary/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/alexbayle/ValidatorLibrary/?branch=master)

## How it works
Some usage examples of the library

********************************************
#### IntegerValidator
********************************************
List of IntegerValidator methods :
  - equal()
  - superior()
  - inferior()
  - between()
  - negative()
  - positive()

```php
<?php
// Here we check if the integer is equal to number 13
$validation = \AB\ValidatorLibrary\IntegerValidator::equal($integer, 13);

// Here we check if the integer is superior to number 50
$validation = \AB\ValidatorLibrary\IntegerValidator::superior($integer, 50);

// Here we check if the integer is inferior to number 200
$validation = \AB\ValidatorLibrary\IntegerValidator::inferior($integer, 200);

// Here we check if the integer is between number 10 and 100
$validation = \AB\ValidatorLibrary\IntegerValidator::between($integer, 10, 100);

// Here we check if the integer is positive
$validation = \AB\ValidatorLibrary\IntegerValidator::positive($integer);

// Here we check if the integer is negative
$validation = \AB\ValidatorLibrary\IntegerValidator::negative($integer);



```
***********************************************
#### BooleanValidator
***********************************************
List of BooleanValidator methods :
  - isTrue()
  - isFalse()

```php
<?php

// Here we check if the boolean is true
$validation = \AB\ValidatorLibrary\BooleanValidator::isTrue($boolean);

// Here we check if the boolean is false
$validation = \AB\ValidatorLibrary\BooleanValidator::isTrue($boolean);


```
*************************************************
#### StringValidator
*************************************************
List of StringValidator methods :
  - lengthEqualTo()
  - lengthSuperiorTo()
  - lengthInferiorTo()
  - lengthBetween()
  - noWhiteSpaceStartAndEnd()
  - noWhiteSpace()

```php
<?php

// Here we check if the string length is equal to 120
$validation = \AB\ValidatorLibrary\StringValidator::lengthSuperiorTo($string, 120);

// Here we check if the string length is between 30 and 100
$validation = \AB\ValidatorLibrary\StringValidator::lengthBetween($string, 30, 100);

// Here we check if the string length is superior to 25
$validation = \AB\ValidatorLibrary\StringValidator::lengthSuperiorTo($string, 25);

// Here we check if the string length is inferior to 30
$validation = \AB\ValidatorLibrary\StringValidator::lengthInferiorTo($string, 30);

// Here we check if the string has not whitespaces at the beginning and at the end
$validation = \AB\ValidatorLibrary\StringValidator::noWhiteSpaceStartAndEnd($string);

// Here we check if the string has not whitespaces
$validation = \AB\ValidatorLibrary\StringValidator::noWhiteSpace($string);



```

*************************************************
#### ArrayValidator
*************************************************
List of ArrayValidator methods :
  - isEmpty()
  - isCompare()
  - betweenItems()
  - keyExists()
  - valueExists()

```php
<?php

// Here we check if the array is empty
$validation = \AB\ValidatorLibrary\ArrayValidator::isEmpty($array);

// Here we check how many elements there are in the array
$validation = \AB\ValidatorLibrary\ArrayValidator:: compare($array);

// Here we check if there are elements between the bornes
$validation = \AB\ValidatorLibrary\ArrayValidator::betweenItems($array, $from, $to);

// Here we check if the key exists in the array
$validation = \AB\ValidatorLibrary\ArrayValidator::keyExists($array, $key);

// Here we check if the value exists in the array
$validation = \AB\ValidatorLibrary\ArrayValidator::valueExists($array, $value);


```

***********************************************
#### DateTimeValidator
***********************************************
List of BooleanValidator methods :
  - isYear()
  - isMonth()
  - isDay()

```php
<?php
// Here we check if it's a year
$validation = \AB\ValidatorLibrary\DateTimeValidator::isYear(\DateTime $date,$year);

//Here we check if it's a month
$validation = \AB\ValidatorLibrary\DateTimeValidator::isMonth(\DateTime $date,$month);

//Here we check if it's a day
$validation = \AB\ValidatorLibrary\DateTimeValidator::isDay(\DateTime $date,$day);

```

### Hope you enjoy it !
*******************************************************