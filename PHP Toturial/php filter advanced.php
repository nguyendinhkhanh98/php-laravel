// filter_var 
<?php
&int=122;
&min=1;
&max=200;

If (filter_var(&int, FILTER_VARLIDATE_INT, array("option"=>("min_range"=>&min, "max_range"=>&max))) === false)
{
    echo("Variable value is not within  the legal range");
}
else
{
    echo("variable value is within the legal range");
}
?>