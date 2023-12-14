<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2ways($order){

          $nums=[15,4,18,23,10];
          if($order){
            echo "昇順にソートします。<br>";
            sort($nums);
            foreach($nums as $array){
              echo $array . '<br>';
          }}else{
            echo "降順にソートします。<br>";
            rsort($nums);
            foreach($nums as $array){
              echo $array . '<br>';
            }
          }
        }

        sort_2ways(TRUE);
        sort_2ways(FALSE);
        ?>
    </p>
</body>

</html>
