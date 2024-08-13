<!-- file này chứa code giải pt bậc 2 -->
<?php
function pt_bac2($a, $b, $c)
{
    if ($a === 0) //nếu hệ số a =0 thì nó là pt bậc nhất:bx+c=0
    {
        if ($b === 0) {  //nếu hệ số b=0 thì ta ktra tiếp hệ số tự do c
            if ($c === 0) //c=0 => 0=0(luôn đúng)
                echo "pt có vô số nghiệm";
            else  //c!=0 => 1=0 (sai)
                echo "phương trình vô nghiệm";
        } else  //nếu b!=0 thì nó là pt bậc nhất => 1 nghiệm kq=-c/b
            echo (-$c) / $b;
    } else  //a!=0 => pt bậc 2 ax^2+bx+c=0
    {
        $delta = ($b * $b) - 4 * $a * $c;
        if ($delta < 0) {
            echo "pt vô nghiệm";
        } else if ($delta === 0) {
            echo "pt có 1 nghiệm kép là: x1=x1=" . (-$b) / 2 * $a;
        } else {
            echo "pt có 2 nghiệm pb:<br>";
            echo "x1= " . (-$b + sqrt($delta)) / 2 * $a;
            echo "x2= " . (-$b - sqrt($delta)) / 2 * $a;
        }
    }
}
?>