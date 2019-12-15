<?php
include 'config.php';
                        $query1 = "SELECT `id`, `name`,`url`, `bgname` FROM `bloodbanks` ";
                        $sql1 = mysqli_query($con,$query1);
                        while($sql2 = mysqli_fetch_assoc($sql1)) {
                        $urls = $sql2;
                        $url2=$urls['url'];
                        echo "'".$urls['url']."'";
                        echo ",";
                        echo($urls['bgname']);
                        }
                ?>
