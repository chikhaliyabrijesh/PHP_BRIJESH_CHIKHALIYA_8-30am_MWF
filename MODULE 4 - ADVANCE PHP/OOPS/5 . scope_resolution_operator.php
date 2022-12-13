<?php

// Scope Resolution Operator : 

// The Scope Resolution Operator or in Simple terms , the double colon(::) is a token that allows access to static , constant and overriden properties or methods of a class.

class pattern
{
    public static function num_pattern()
    {
        $k = 7;
        for($i=1;$i<=7;$i++)
        {
            $k--;
            for($j=1;$j<=13;$j++)
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
        for($i=6;$i>=1;$i--)
        {
            for($j=1;$j<=13;$j++)
            {
                if($j<=0+$i || $j>=14-$i)
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
pattern::num_pattern();

?>