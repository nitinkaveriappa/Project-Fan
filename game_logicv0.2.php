<?php
/**
 * Created by PhpStorm.
 * User: Paurav & Nitin
 * Date: 9/18/2016
 * Time: 10:09 PM
 */
$s1 = "111111111";
$s1 .="111111111";
$s1 .="121201212";
$s1 .="222222222";
$s1 .="222222222";

$s2 = "111111111";
$s2 .="111111111";
$s2 .="121201212";
$s2 .="222222222";
$s2 .="222222222";

$pos=0;
$new=0;
$old=0;
$player=0;
// To read the change in the state
for($i=0;$i<45;$i++)
{

    if($s1[$i] != $s2[$i])
    {
        if($s1[$i] < $s2[$i])
        {
            $new = $i;
        }
        else
            $old = $i;
    }

}
$pos = $new - $old;
if($s2[$new]!=$s2[$old])
    $player = $s2[$new]+$s2[$old];

$validate = false;
//To validate if legal move
$valid = array("-10","-9","-8","-1","1","8","9","10");
for($i=0;$i<8;$i++)
{
    if($pos == $valid[$i])
    {
        $validate = true;
        echo "$valid[$i]<br/>";
    }
}
// To validate if pawn has moved to a empty slot
if($validate)
{
    if( $player > 0 && $player < 3)
    {
        $validate = true;
        echo "valid move";
    }
    else
    {
        $validate = false;
        echo "invalid move";
    }
}
echo "	new =$new <br/>
		old = $old<br/>
		pos= $pos <br/>
		player=$player<br/>
		old.= $s1<br/>
		mov= $s2<br/>";
//Removes the pawns related
if($validate)
{
    for($i = $new+$pos;$i>=0&&$i<45;)
    {
        if($s2[$i] != 0 && $s2[$i] != $player)
        {
            $s2[$i] = 0;
            $i += $pos;
        }
        else
            break;
    }
    echo "curr= $s2";
}
else {
    if ($new == 0 && $old == 0) {
        echo "No Move Made";
    } else {
        echo "Invalid Move";
    }
}
?>
