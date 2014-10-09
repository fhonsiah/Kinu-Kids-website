<?php

    $connector = mysql_connect('localhost', 'root', 'root') or die(mysql_error());
    mysql_select_db('kinu_kids',$connector) or die(mysql_error());
