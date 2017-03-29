<?php

/* 
 * Author: MD. ANWAR JAHID.
 * Email: ajr.jahid@gmail.com
 * FB: www.fb.com/ringkud
 */
if(isset($message))
{
    echo $message."<hr/>";
}
echo '<pre>';
if(isset($data))
{
    foreach ($data as $dat)
    {
        var_dump($dat);
    }
}
echo '</pre>';
echo '<hr/>this is first view';
?>
<form method="post" action="">
    <input type="text" name="text"/>
    <input type="submit" name="submit" value="Submit"/>
</form>