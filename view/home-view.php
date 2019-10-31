<?php
    $datas = [
        'first_name' => [
            'Mark',
            'Otto',
            'Vanita',
            'aa'
        ],
        'last_name' => [
            'Jacob',
            'Thornton',
            'Davis',
            'bb'
        ],
        'email' => [
            'mark.jacob@gmail.com',
            'otto.thornton@gmail.com',
            'vanita.davis@gmail.com',
            'aa.bb@gmail.com'
        ]
    ];

    function gen_table(array $titles, array $datas): string {
        $titles_td = '';
        foreach ($titles as $title) {
            $title = ucfirst(strtolower($title));
            $titles_td .= "<th scope=\"col\">$title</th>";
        }

        $datas_key = [];
        foreach ($datas as $key => $d) {
            $datas_key[] = $key;
        }

        
        function gen_data(array $datas, array $datas_key): string {
            $result_final = '';
            $len = count($datas[$datas_key[0]]);

            function gen_row_of_data (int $len, array $datas, array $datas_key, int $data_index): string {
                $result = '';

                for ($i = 0; $i < $len; $i++) {
                    $result .= "<td>{$datas[$datas_key[$i]][$data_index]}</td>";
                }
                return "<tr>$result</tr>";
            }

            for ($data_index = 0; $data_index < $len; $data_index++) {
                $result_final .= gen_row_of_data ($len, $datas, $datas_key, $data_index);
            }

            return $result_final;
        }

        $datas_rows = gen_data($datas, $datas_key);

        return <<<HTML
        <table class="table table-striped">
            <thead>
                <tr>
                    $titles_td
                </tr>
            </thead>
            <tbody>
                $datas_rows
            </tbody>
        </table>
HTML;
    }

?>
<div class="btn-container">
    <div class="btn-container-box">
        <button type="button" class="btn btn-outline-success ">Last invoice</button>
        <button type="button" class="btn btn-outline-success ">Last contacts</button>
        <button type="button" class="btn btn-outline-success ">Last compagnies</button>
    </div>
</div>

    <?php
        $titles = [
            'First name',
            'last name',
            'email'
        ];

        // $datas = from return from the database
    ?>
    <?= gen_table($titles, $datas) ?>
    

</div>