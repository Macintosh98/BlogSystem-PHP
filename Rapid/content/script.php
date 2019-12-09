<?php
    $blogs = dbQuery("SELECT * FROM blog where Publish_Status='1' limit 10 OFFSET 0");
?>