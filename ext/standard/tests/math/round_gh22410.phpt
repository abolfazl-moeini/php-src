--TEST--
GH-22410: round() incorrect result for large floats
--FILE--
<?php
foreach ([
    9003241321073828,
    9003241321073829,
    4503599627370496,
    4503599627370497,
    9007199254740990,
] as $n) {
    var_dump(round((float) $n));
}
?>
--EXPECT--
float(9003241321073828)
float(9003241321073829)
float(4503599627370496)
float(4503599627370497)
float(9007199254740990)