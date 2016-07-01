<?php


/**
 * Converts WingDing characters (eg: 'l') to Unicode equivalents (eg: '●")
 *
 * @author Corneliu Popescu
 */
class WingdingUnicodeTranslator
{

    /**
     * WingDings decimal codes to Unicode decimal codes associations
     *
     * @var array
     */
    protected static $map = [
        32  => 32,
        33  => 9999,
        34  => 9986,
        35  => 9985,
        36  => 128083,
        37  => 128365,
        38  => 128366,
        39  => 128366,
        40  => 128383,
        41  => 9990,
        42  => 128386,
        43  => 128387,
        44  => 128234,
        45  => 128235,
        46  => 128236,
        47  => 128237,
        48  => 128193,
        49  => 128194,
        50  => 128196,
        51  => 128463,
        52  => 128464,
        53  => 128452,
        54  => 8987,
        55  => 128430,
        56  => 128432,
        57  => 128434,
        58  => 128435,
        59  => 128436,
        60  => 128427,
        61  => 128428,
        62  => 9991,
        63  => 9997,
        //64=> writing left hand, there is no equivalent
        65  => 9996,
        66  => 128076,
        67  => 128077,
        68  => 128078,
        69  => 9756,
        70  => 9758,
        71  => 9757,
        72  => 9759,
        73  => 9995,
        74  => 9786,
        75  => 128528,
        76  => 9785,
        77  => 128163,
        78  => 9760,
        79  => 9872,
        80  => 127985,
        81  => 9992,
        82  => 9788,
        83  => 128167,
        84  => 10052,
        85  => 128326,
        86  => 10014,
        87  => 128328,
        88  => 10016,
        89  => 10017,
        90  => 9770,
        91  => 9775,
        92  => 2384,
        93  => 9784,
        94  => 9800,
        95  => 9801,
        96  => 9802,
        97  => 9803,
        98  => 9804,
        99  => 9805,
        100 => 9806,
        101 => 9807,
        102 => 9808,
        103 => 9809,
        104 => 9810,
        105 => 9811,
        106 => 38,
        107 => 38,
        108 => 9679,
        109 => 10061,
        110 => 9632,
        111 => 9633,
        //112=>  Bold white square, no equivalent
        113 => 10065,
        114 => 10066,
        115 => 11047,
        116 => 10731,
        117 => 9670,
        118 => 10070,
        119 => 11045,
        120 => 8999,
        121 => 9043,
        122 => 8984,
        123 => 10048,
        124 => 10047,
        125 => 10077,
        126 => 10078,
        127 => 9647,
        128 => 9450,
        129 => 9312,
        130 => 9313,
        131 => 9314,
        132 => 9315,
        133 => 9316,
        134 => 9317,
        135 => 9318,
        136 => 9319,
        137 => 9320,
        138 => 9321,
        139 => 9471,
        140 => 10102,
        141 => 10103,
        142 => 10104,
        143 => 10105,
        144 => 10106,
        145 => 10107,
        146 => 10108,
        147 => 10109,
        148 => 10110,
        149 => 10111,
        //150=>  Bud and leaf north east, no equivalent
        //151=>  Bud and leaf north west, no equivalent
        //152=>  Bud and leaf south west, no equivalent
        //153=>  Bud and leaf south east, no equivalent
        //154=>  Bold vine leaf north east, no equivalent
        //155=>  Bold vine leaf north west, no equivalent
        //156=>  Bold vine leaf south west, no equivalent
        //157=>  Bold vine leaf south east, no equivalent
        158 => 183,
        159 => 8226,
        160 => 9642,
        161 => 9675,
        162 => 11093,
        //163=>  Extra bold white circle, no equivalent
        164 => 9673,
        165 => 9678,
        //166=>  Upper right shadowed white circle, no equivalent
        167 => 9642,
        168 => 9723,
        //169=>  Black three pointed star, no equivalent
        170 => 10022,
        171 => 9733,
        172 => 10038,
        173 => 10036,
        174 => 10041,
        175 => 10037,
        //176=>  Square register mark, no equivalent
        177 => 8982,
        178 => 10209,
        179 => 8977,
        //180=>, Question mark in white diamond, no equivalent
        181 => 10026,
        182 => 10032,
        183 => 128336,
        184 => 128337,
        185 => 128338,
        186 => 128339,
        187 => 128340,
        188 => 128341,
        189 => 128342,
        190 => 128343,
        191 => 128344,
        192 => 128345,
        193 => 128346,
        194 => 128347,
        //195=> White arrow pointing downwards then curving leftwards, no equivalent
        //196=> White arrow pointing downwards then curving rightwards, no equivalent
        //197=> White arrow pointing upwards then curving leftwards, no equivalent
        //198=> White arrow pointing upwards then curving rightwards, no equivalent
        //199=> White arrow pointing leftwards then curving upwards, no equivalent
        //200=> White arrow pointing rightwards then curving upwards, no equivalent
        //201=> White arrow pointing leftwards then curving downwards, no equivalent
        //202=> White arrow pointing rightwards then curving downwards, no equivalent
        //203=> Quilt square 2, no equivalent
        //204=> Black quilt square 2, no equivalent
        //205=> Leaf counterclockwise south west, no equivalent
        //206=> Leaf counterclockwise north west, no equivalent
        //207=> Leaf counterclockwise south east, no equivalent
        //208=> Leaf counterclockwise north east, no equivalent
        //209=> Leaf north west, no equivalent
        //210=> Leaf south west, no equivalent
        //211=> Leaf north east, no equivalent
        //212=> Leaf south east, no equivalent
        213 => 9003,
        214 => 8998,
        //215=>  Three-D top-lighted leftwards arrowhead, no equivalent
        216 => 10146,
        //217=>  Three-D right-lighted upwards arrowhead, no equivalent
        //218=>  Three-D left-lighted downwards arrowhead, no equivalent
        //219=>  Circled heavy white leftwards arrow, no equivalent
        220 => 10162,
        //221 =>  Circled heavy white upwards arrow, no equivalent
        //222 =>  Circled heavy white downwards arrow, no equivalent
        //223 =>  Wide-headed leftwards arrow, no equivalent
        //224 =>  Wide-headed rightwards arrow, no equivalent
        //225 =>  Wide-headed upwards arrow, no equivalent
        //226 =>  Wide-headed downwards arrow, no equivalent
        //227 =>  Wide-headed north west arrow, no equivalent
        //228 =>  Wide-headed north east arrow, no equivalent
        //229 =>  Wide-headed south west arrow, no equivalent
        //230 =>  Wide-headed south east arrow, no equivalent
        //231 =>  Heavy wide-headed leftwards arrow, no equivalent
        232 => 10132,
        //233=> Heavy wide-headed upwards arrow, no equivalent
        //234=> Heavy wide-headed downwards arrow, no equivalent
        //235=> Heavy wide-headed north west arrow, no equivalent
        //236=> Heavy wide-headed north east arrow, no equivalent
        //237=> Heavy wide-headed south west arrow, no equivalent
        //238=> Heavy wide-headed south east arrow, no equivalent
        239 => 8678,
        240 => 8680,
        241 => 8679,
        242 => 8681,
        243 => 11012,
        244 => 8691,
        245 => 11008,
        246 => 11009,
        247 => 11011,
        248 => 11010,
        249 => 9645,
        250 => 9643,
        251 => 10007,
        252 => 10003,
        253 => 9746,
    ];

    /**
     * Converts a single WingDing character to Unicode equivalent
     *
     * @param $char string
     * @return bool|string
     */
    protected function convertCharacter($char)
    {
        $code = ord($char);
        if (!array_key_exists($code, static::$map)) {
            return false;
        }

        return sprintf("&#%s;", static::$map[$code]);
    }

    /**
     * Converts existing WingDings characters to their Unicode equivalent.
     * Characters without Unicode equivalent are removed.
     *
     * @param string $string Text to be converted
     * @return string
     */
    public function convertString($string = '')
    {
        $convertedString = '';

        for ($i = 0; $i < strlen($string); $i++) {
            $unicodeCharacter = $this->convertCharacter($string[$i]);
            if ($unicodeCharacter !== false) {
                $convertedString .= $unicodeCharacter;
            }
        }

        return html_entity_decode($convertedString);
    }
}
