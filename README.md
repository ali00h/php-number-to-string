# php-number-to-string
Long String Of Numbers To Short String.
There are these characters at the output:
```bash
123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ
```
It does not have 0 character. You can use 0 as a seperator

# Using
```bash
<?php
$enc = new sEncoder();
echo $enc->encode(1252365211141);
?>
```
