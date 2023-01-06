<?php

trait sort_asc
{
    public function asc()
    {
        $arr = array(1,4,5,6,9,7,8,10,2,3);
        sort($arr);

        $arr_len = count($arr);
        echo "The Array In Ascending Order Is : ";
        for($i=0 ; $i<$arr_len ; $i++)
        {
            echo $arr[$i]."&nbsp";
        }
        echo "<br><br>";
    }
    
}
trait sort_desc
{
    public function desc()
    {
        $arr = array(1,4,5,6,9,7,8,10,2,3);
        rsort($arr);

        $arr_len = count($arr);
        echo "The Array In Descending Order Is : ";
        for($i=0 ; $i<$arr_len ; $i++)
        {
            echo $arr[$i]."&nbsp";
        }
        echo "<br><br>";
    }
}
trait reverse
{
    public function rev_num()
    {
        $no = 15432;
        $rev = 0;

        while($no > 1)
        {
            $rem = $no % 10;
            $rev = ($rev * 10) + $rem;
            $no = $no/10;
        }
        echo "Reverse Number of 15432 is : ".$rev;
        echo "<br><br>";
    }
}
trait pattern
{
    public function num_pattern()
    {
        $k = 7;
        for($i=1 ; $i<=7 ; $i++)
        {
            $k--;
            for($j=1 ; $j<=13 ; $j++)
            {
                if($j<=7-$k || $j>=7+$k)
                {
                    echo "$i&nbsp";
                }
                else
                {
                    echo "&nbsp&nbsp&nbsp";
                }
            }
            echo "<br>";
        }
    }
}
class result
{
    use sort_asc,sort_desc,reverse,pattern;
}
$obj = new result;
$obj->asc();
$obj->desc();
$obj->rev_num();
$obj->num_pattern();


?>