<?php 
global $version;
    if(!isset($_COOKIE['apps'])) {
        $json = file_get_contents("https://raw.githubusercontent.com/ezAppsDev/Application-System/master/version.json");
        $curVer = json_decode($json);
        $newVer = $curVer->version;
        if ($newVer > $version) {
            phpAlert("Update me daddy");
            $vernotif = "<h3>This version is out of date (<?php echo $version; ?>). The latest version is <?php echo $newVer; ?> Install the new one</h3>";
        }
        
$vernotif = "<h3>Currently Installed Version: <?php echo $version; ?> . No need to update yet</h3>";
    } ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Secret Version Page</title>
    </head>
    <body>
        <h3><?php echo $vernotif; ?></h3>
    </body>
</html>