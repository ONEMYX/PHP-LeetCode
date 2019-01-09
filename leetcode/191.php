<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/3
 * Time: 10:22
 */
$data  = array(
    '1'=>[
        'a'   =>  3,
        'c'=>12333,
        'as'=>[
            '1'=>[
                '1'=>'a'
            ],
            '3'=>[
                '3'=>'c'
            ],
            '2'=>[
                '2'=>'b'
            ]
        ]
    ],
    '3'=>[
        'a'=>2,
        'c'=>12333,
        'as'=>[
            '1'=>[
                '1'=>'a'
            ],
            '3'=>[
                '3'=>'c'
            ],
            '2'=>[
                '2'=>'b'
            ]
        ]
    ],
    '2'=>[
        'a'=>1,
        'c'=>12333,
        'as'=>[
            '1'=>[
                '1'=>'a'
            ],
            '3'=>[
                '3'=>'c'
            ],
            '2'=>[
                '2'=>'b'
            ]
        ]
    ]
    );


foreach ($data as $key => $row) {
    $distance[$key] = $row['as'];
    $money[$key] = $row['a'];
}
array_multisort($distance, SORT_DESC, $data);

print_r($data);