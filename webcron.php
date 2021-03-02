<?php
# The Nextcloud app news requires a real cron job. With some providers like all-inkl it is not possible to create one.
# This is what this script is for.
#
# In the Nextcloud simply activate cron and call this script with a webcron job for example every 15 minutes.
#
# Put this file in the web root of your domain, where nextcloud is hosted.
#
exec("/usr/bin/php cron.php 2>&1", $out, $result);
?>
