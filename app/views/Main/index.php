<?php

echo "<br><h2><b>THIS IS INDEX VIEW FOR MAINCONTROLLER</b></h2><br>";

foreach ($posts as $post)
{
    echo "id: " . $post['id'] . "<br>Header: " . $post['header'] ."<br>" .
        "Content: " . $post['content'] . "<br>Date: " . $post['date']."<br><hr>";
}