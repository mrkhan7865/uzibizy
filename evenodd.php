<?php

$a=11;
$no=evenodd($a);
echo "number is $no";
function evenodd($c)
{
  if($c %2==0)
  {
  return "even";
  }
  else
  {
    return "odd";
  }
  return $c;
  }
  ?>