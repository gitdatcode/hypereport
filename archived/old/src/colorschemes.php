<?php
function shuffle_assoc(&$array) {
        $keys = array_keys($array);

        shuffle($keys);

        foreach($keys as $key) {
            $new[$key] = $array[$key];
        }

        $array = $new;

        return true;
    }
$schemes = [
    [
        [
            'background'    => 'ef0053',
            'foreground'    => '70002e',
            'highlight'     => 'ff73c0',
        ],
        [
            'background'    => 'b7004a',
            'foreground'    => '920043',
            'highlight'     => '6f002d',
        ],
        [
            'background'    => '920043',
            'foreground'    => 'b7004a',
            'highlight'     => 'f4136a',
        ],
        [
            'background'    => '6f002d',
            'foreground'    => '920043',
            'highlight'     => 'f4136a',
        ]
    ],
    [
        [
            'background'    => '340086',
            'foreground'    => '5700b5',
            'highlight'     => '9e00ff',
        ],
        [
            'background'    => '5700b5',
            'foreground'    => '6c00cc',
            'highlight'     => 'ac50ff',
        ],
        [
            'background'    => '6c00cc',
            'foreground'    => '5700b5',
            'highlight'     => 'b169ff',
        ],
        [
            'background'    => '9e00ff',
            'foreground'    => '8700e8',
            'highlight'     => 'bc89ff',
        ]
    ],
    [
        [
            'background'    => '00d2e1',
            'foreground'    => '00bec4',
            'highlight'     => '9cfffb',
        ],
        [
            'background'    => '00bec4',
            'foreground'    => '00a8a8',
            'highlight'     => '00dfff',
        ],
        [
            'background'    => '00a8a8',
            'foreground'    => '008b87',
            'highlight'     => '00d2e1',
        ],
        [
            'background'    => '008b87',
            'foreground'    => '00a8a8',
            'highlight'     => '00d2e1',
        ]
    ],
];
shuffle_assoc($schemes);
return array_values($schemes);
