<?php 
function trim_text($string, $limit = 10, $dots = TRUE)
{    
    //echo $dots;
    $stringlen = strlen($string);
    

    if($stringlen > $limit)
    {
        if($dots)
        {
            $temp_string = substr($string, 0, ($limit - 3));
            $new_string = $temp_string."...";
            echo $new_string;
        }
        else
        {
            $temp_string = substr($string, 0, $limit);
            $new_string = $temp_string;
            echo $new_string;
        }
    }
    else
    {
        echo $string;
    }

}

?>