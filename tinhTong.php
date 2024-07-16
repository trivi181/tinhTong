<?php
    //khai báo mảng
    $arr= array(7,19,120,189,200,381);
    //khai báo biến sum để nhận giá trị khi cộng
    $sum = 0;

    //dùng foreach để duyệ qua ừng phần tử
    foreach($arr as $num){
        $sum += $num;
    }
    echo "Tổng các phần tử trong mảng là:". $sum;
    ?>