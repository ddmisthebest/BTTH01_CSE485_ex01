<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Hàm chuyển ký tự trong mảng thành ký tự hoa
        function convertToUpper($item) {
            return strtoupper($item);
        }

        // Mảng ban đầu
        $arr1 = ['a', 'b', 'ABC'];
        $arr2 = ['1', 'b', 'c', 'd'];
        $arr3 = ['a', 0, null, false];

        // Sử dụng array_map để chuyển toàn bộ ký tự thành ký tự hoa
        $newArr1 = array_map('convertToUpper', $arr1);
        $newArr2 = array_map('convertToUpper', $arr2);
        $newArr3 = array_map('convertToUpper', $arr3);

        // In mảng đã chuyển
        echo "Mảng 1 sau khi chuyển: <br>";
        print_r($newArr1);
        echo "<br>";

        echo "Mảng 2 sau khi chuyển: <br>";
        print_r($newArr2);
        echo "<br>";

        echo "Mảng 3 sau khi chuyển: <br>";
        print_r($newArr3);
        echo "<br>";
    ?>
</body>
</html>
