<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Islam Akef Ebeid</title>
        <link rel="shortcut icon" href="images/ebeid.ico" type="image/x-icon" />
        <style>@import url(css/style.css);</style>
    </head>
    <body>
        <header>
            <div style="float: left; width: 200px; height:150px; margin: 0px; padding: 0px;"> <img width="150px" height="150px" src="images/personal/islam.jpg"/> </div>
            <div style="float: left; width: 500px; height:150px; margin: 0px; padding: 0px;"> <p>Islam Akef Ebeid</p> 
                <div id="logo">
                    <script src="js/three.min.js"></script>
                    <script src="js/logo.js"></script>
                    <script>main();</script>
                </div>
            </div>
            <div style="float: left; width: 200px; height:150px; margin: 0px; padding: 0px; text-align: left;">
                <button type="button" onclick="window.location.href = 'index.php';">Home</button><br/>
                <button type="button" onclick="window.location.href = 'research.php';">Research</button><br/>
                <button type="button" onclick="window.location.href = 'professional.php';">Professional</button><br/>
                <button type="button" onclick="window.open('http://mindmitter.blogspot.com/');">Blog</button><br/>
                <button type="button" onclick="window.open('docs/resume.pdf');">Resume</button><br/>
            </div>
        </header>
        <section>
            <div id="content" class="module"><h1>Recent</h1>
                <?php
                $username = "ebeid";
                $password = "ebeid";
                $database = "ebeid";
                $mysqli = new mysqli("localhost", $username, $password, $database);
                if ($mysqli->connect_errno) {
                    printf("Connect failed: %s\n", $mysqli->connect_error);
                    exit();
                }
                if ($result = $mysqli->query("SELECT * FROM projects where id in (15,20)")) {
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<fieldset style='border: 0;'>";
                            echo "<div style='width: 800px; height: 100px;'>";
                            echo "<div style='width: 100px; height: 100px; float: left;'><img width='100px' height='100px' src='" . $row['thumbnail'] . "'/></div>";
                            echo "<div style='width: 680px;  height: 20px; float: right;'><b>" . $row['title'] . "</b></div>";
                            echo "<div style='width: 680px;  height: 70px; float: right;'>" . $row['short_description'] . "</div>";
                            echo "<div style='width: 680px;  height: 10px; float: right;'><a target='_blank' href='" . $row['url'] . "'>github</a>";
                            if ($row['video'] != NULL) {
                                echo "  <a target='_blank' href='" . $row['video'] . "'>video</a>";
                            }
                            if ($row['paper'] != NULL) {
                                echo "  <a target='_blank' href='" . $row['paper'] . "'>paper</a></div>";
                            }
                            echo "</div>";
                            echo "</fieldset>";
                        }
                    }
                    $result->close();
                    mysqli_more_results($mysqli);
                }
                ?>
            </div>
        </section>
        <section>
            <hr/>
            <div id="content" class="module"><h1>Intel</h1>
                <?php
                if ($result = $mysqli->query("SELECT * FROM projects where type = 'Academic' and organizations_id = 2")) {
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<fieldset style='border: 0;'>";
                            echo "<div style='width: 800px; height: 100px;'>";
                            echo "<div style='width: 100px; height: 100px; float: left;'><img width='100px' height='100px' src='" . $row['thumbnail'] . "'/></div>";
                            echo "<div style='width: 680px;  height: 20px; float: right;'><b>" . $row['title'] . "</b></div>";
                            echo "<div style='width: 680px;  height: 70px; float: right;'>" . $row['short_description'] . "</div>";
                            echo "<div style='width: 680px;  height: 10px; float: right;'><a target='_blank' href='" . $row['url'] . "'>github</a>";
                            if ($row['video'] != NULL) {
                                echo "  <a target='_blank' href='" . $row['video'] . "'>video</a>";
                            }
                            if ($row['paper'] != NULL) {
                                echo "  <a target='_blank' href='" . $row['paper'] . "'>paper</a></div>";
                            }
                            echo "</div>";
                            echo "</fieldset>";
                        }
                    }
                    $result->close();
                    mysqli_more_results($mysqli);
                }
                ?>
            </div>
        </section>
        <section>
            <hr/>
            <div id="content" class="module"><h1>University of Arkansas at Little Rock</h1>
                <?php
                if ($result = $mysqli->query("SELECT * FROM projects where type = 'Academic' and organizations_id = 12")) {
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<fieldset style='border: 0;'>";
                            echo "<div style='width: 800px; height: 100px;'>";
                            echo "<div style='width: 100px; height: 100px; float: left;'><img width='100px' height='100px' src='" . $row['thumbnail'] . "'/></div>";
                            echo "<div style='width: 680px;  height: 20px; float: right;'><b>" . $row['title'] . "</b></div>";
                            echo "<div style='width: 680px;  height: 70px; float: right;'>" . $row['short_description'] . "</div>";
                            echo "<div style='width: 680px;  height: 10px; float: right;'><a target='_blank' href='" . $row['url'] . "'>github</a>";
                            if ($row['video'] != NULL) {
                                echo "  <a target='_blank' href='" . $row['video'] . "'>video</a>";
                            }
                            if ($row['paper'] != NULL) {
                                echo "  <a target='_blank' href='" . $row['paper'] . "'>paper</a></div>";
                            }
                            echo "</div>";
                            echo "</fieldset>";
                        }
                    }
                    $result->close();
                    mysqli_more_results($mysqli);
                }
                ?>
            </div>
        </section>
        <section>
            <hr/>
            <div id="content" class="module"> <h1>Masters - Arkansas Tech University</h1>
                <?php
                if ($result = $mysqli->query("SELECT * FROM projects where type = 'Academic' and organizations_id = 11")) {
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<fieldset style='border: 0;'>";
                            echo "<div style='width: 800px; height: 100px;'>";
                            echo "<div style='width: 100px; height: 100px; float: left;'><img width='100px' height='100px' src='" . $row['thumbnail'] . "'/></div>";
                            echo "<div style='width: 680px;  height: 20px; float: right;'><b>" . $row['title'] . "</b></div>";
                            echo "<div style='width: 680px;  height: 70px; float: right;'>" . $row['short_description'] . "</div>";
                            echo "<div style='width: 680px;  height: 10px; float: right;'><a target='_blank' href='" . $row['url'] . "'>github</a>";
                            if ($row['video'] != NULL) {
                                echo "  <a target='_blank' href='" . $row['video'] . "'>video</a>";
                            }
                            if ($row['paper'] != NULL) {
                                echo "  <a target='_blank' href='" . $row['paper'] . "'>paper</a></div>";
                            }
                            echo "</div>";
                            echo "</fieldset>";
                        }
                    }
                    $result->close();
                    mysqli_more_results($mysqli);
                }
                ?>
            </div>
        </section>
        <section>
            <hr/>
            <div id="content" class="module"><h1>Undergraduate - Ain Shams University</h1>
                <?php
                if ($result = $mysqli->query("SELECT * FROM projects where type = 'Academic' and organizations_id = 10")) {
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<fieldset style='border: 0;'>";
                            echo "<div style='width: 800px; height: 100px;'>";
                            echo "<div style='width: 100px; height: 100px; float: left;'><img width='100px' height='100px' src='" . $row['thumbnail'] . "'/></div>";
                            echo "<div style='width: 680px;  height: 20px; float: right;'><b>" . $row['title'] . "</b></div>";
                            echo "<div style='width: 680px;  height: 70px; float: right;'>" . $row['short_description'] . "</div>";
                            echo "<div style='width: 680px;  height: 10px; float: right;'><a target='_blank' href='" . $row['url'] . "'>github</a>";
                            if ($row['video'] != NULL) {
                                echo "  <a target='_blank' href='" . $row['video'] . "'>video</a>";
                            }
                            if ($row['paper'] != NULL) {
                                echo "  <a target='_blank' href='" . $row['paper'] . "'>paper</a></div>";
                            }
                            echo "</div>";
                            echo "</fieldset>";
                        }
                    }
                    $result->close();
                    mysqli_more_results($mysqli);
                }
                ?>
            </div>
        </section>
        <section>
            <hr/>
            <div id="content" class="module"> <h1>High School</h1>
                <?php
                if ($result = $mysqli->query("SELECT * FROM projects where type = 'Academic' and organizations_id = 9")) {
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<fieldset style='border: 0;'>";
                            echo "<div style='width: 800px; height: 100px;'>";
                            echo "<div style='width: 100px; height: 100px; float: left;'><img width='100px' height='100px' src='" . $row['thumbnail'] . "'/></div>";
                            echo "<div style='width: 680px;  height: 20px; float: right;'><b>" . $row['title'] . "</b></div>";
                            echo "<div style='width: 680px;  height: 70px; float: right;'>" . $row['short_description'] . "</div>";
                            echo "<div style='width: 680px;  height: 10px; float: right;'><a target='_blank' href='" . $row['url'] . "'>github</a>";
                            if ($row['video'] != NULL) {
                                echo "  <a target='_blank' href='" . $row['video'] . "'>video</a>";
                            }
                            if ($row['paper'] != NULL) {
                                echo "  <a target='_blank' href='" . $row['paper'] . "'>paper</a></div>";
                            }
                            echo "</div>";
                            echo "</fieldset>";
                        }
                    }
                    $result->close();
                    mysqli_more_results($mysqli);
                }
                $mysqli->close();
                ?>
            </div>
        </section>
        <footer>
            <div id="logo"><br/><br/>
                <br/><br/><br/><br/><br/><br/>                <p>
                <fieldset style="border: 0;">
                    <a href="https://www.facebook.com/i3akef" target="_blank"><img width="30px" height="30px" src="images/social/1481140735_facebook.png"/></a>
                    <a href="https://twitter.com/i3akef" target="_blank"><img width="30px" height="30px" src="images/social/1481140753_twitter.png"/></a>
                    <a href="https://plus.google.com/+IslamAkefEbeid" target="_blank"><img width="30px" height="30px" src="images/social/1481140811_google.png"/></a>
                    <a href="https://www.instagram.com/i3akef/" target="_blank"><img width="30px" height="30px" src="images/social/1481140739_instagram.png"/></a>
                    <a href="https://www.quora.com/profile/Islam-Akef-Ebeid" target="_blank"><img width="30px" height="30px" src="images/social/1481153253_quora.png"/></a>
                    <a href="https://www.linkedin.com/in/i3akef" target="_blank"><img width="30px" height="30px" src="images/social/1481153224_linkedin_circle_black.png"/></a>
                    <a href="https://www.youtube.com/channel/UCI1m48CMEqYyD2MoLsHhDjw" target="_blank"><img width="30px" height="30px" src="images/social/1481140818_youtube.png"/></a>
                </fieldset>
                </p>
                <p>
                    Copyright © 2016 <a href="mailto:islam.akef@gmail.com">Islam Akef Ebeid</a></p>
            </div>
        </footer>
    </body>
</html>