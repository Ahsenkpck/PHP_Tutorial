<?php

$hayvanlar=[
    'Uçan Hayvanlar'=>['Kartal','Güvercin','Şahin'],
    'Sürüngen Hayvanlar'
];
echo "<pre>";
print_r($hayvanlar);

$ucan_hayvanlar=[
'Kartal',
'Güvercin',
'Şahin'
];

echo $hayvanlar['Uçan Hayvanlar'][2];

echo "<br><br><br>";

$animals=[
    'a'=>[
        'b'=>[
            'c'=>[
                1,2,3,4,5,6
            ]
        ]

    ]
            ];
            echo "<pre>";
            print_r($animals);
            echo $animals['a']['b']['c'][2];

?>