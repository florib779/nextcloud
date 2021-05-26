<?php
# The Nextcloud app news requires a real cron job. With some providers like all-inkl it is not possible to create one.
# This is what this script is for.
#
# In the Nextcloud simply activate cron and call this script with a webcron job for example every 5 minutes.
#
# https://all-inkl.com/wichtig/anleitungen/skripte/sonstiges/per-script/shellskripte-ausfuehren_304.html
#
# Put this file in the web root of your domain, where nextcloud is hosted.
#
exec("/usr/bin/php74 cron.php 2>&1", $out, $result);
echo "Returncode: " .$result ."<br>";
echo "Output: " ."<br>";
echo "<pre>"; print_r($out);
?>
