<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        public function sortable(array $array, string $orderBy = 'asc')
        {
            if ($orderBy === 'asc') {
                sort($array);
            }
            if ($orderBy === 'desc') {
                rsort($array);
            }
            foreach ($array as $k => $v) {
                var_dump($v);
            }
        }// ここにコードを書いていく
        ?>
    </p>
</body>

</html>