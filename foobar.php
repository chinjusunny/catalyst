<?php
for($i=0;$i<=100;$i++)
{
  if($i%3==0 && $i%5==0)
  {
    echo "foobar\n";
  }
  else if($i%3==0)
  {
    echo "foo\n";
  }
  else if($i%5==0)
  {
    echo "bar\n";
  }
  else
  {
    echo $i."\n";
  }
}
?>
