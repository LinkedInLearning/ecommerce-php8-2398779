<?php
    function get_products() {
        return [
            [
                'id' => 1,
                'name' => 'A',
                'description' => 'B',
            ],
            [
                'id' => 1,
                'name' => 'C',
                'description' => 'D',
            ]
            ,
            [
                'id' => 1,
                'name' => 'E',
                'description' => 'D',
            ]
        ];
    }

    function set_product($data) {
        var_dump($data);
        die();
    }
?>