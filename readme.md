## Wingding to Unicode

Converts WingDing characters (eg: 'l') to Unicode equivalents (eg: '●")

##### Usage
```
mb_internal_encoding('UTF-8');
$translator = WingdingUnicodeTranslator();
$converted = $translator->convertString('my wingding string');
// at this point $converted contains a utf-8 string and you should use mb_* functions for any manipulation
```

