<!DOCTYPE html>
<html>

<head>
    <title>Rowspan Dinamis PHP MySQL HTML</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<body>
    <table border="1">
        <tr>
            <th>Kode Diagnosa</th>
            <th>Kode Gejala</th>
        </tr>
        <?php

        $conn = mysqli_connect('localhost', 'root', '', 'ds');
        $query = mysqli_query($conn, "SELECT * FROM tb_relasi ORDER BY kode_diagnosa");

        $arr = array();
        while ($row  = mysqli_fetch_object($query)) {
            $arr[$row->kode_diagnosa][] = $row;
        }
        ?>
        <?php foreach ($arr as $key => $val) : ?>
            <?php foreach ($val as $k => $v) : ?>
                <tr>
                    <?php if ($k == 0) : ?>
                        <td rowspan="<?php echo count($val) ?>">
                            <?php echo $v->kode_diagnosa ?>
                        </td>
                    <?php endif ?>
                    <td><?php echo $v->kode_gejala ?></td>
                </tr>
            <?php endforeach ?>
        <?php endforeach ?>
    </table>
</body>

</html>