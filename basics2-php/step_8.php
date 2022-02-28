<?php
function power($input)
{
   if(($input & ($input - 1)) == 0)
    {
		return "$input is power of 2";
    }
   else
    {
      return "$input is not power of 2";
    }
}
echo(Power(4)."\n");

?>