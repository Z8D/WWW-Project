<?php
require_once('common.php');
include('masterpage.php');

// enable this code if we don't want non-admin users to view this page
// if (!UserUtils::is_admin())
// {
//   HTTPUtils::redirect('mainPage.php');
//   exit(0);
// }
?>

<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="createDB.css">
        <title>
        Database Tools
        </title>
    </head>

    <body>
        <h1>Database Tools</h2>
        <ul class="dbtools">
            <li><a href="demo-userdb-create.php">Create DB</a></li>
            <li><a href="demo-userdb-usage-demo.php">DB Usage</a></li>
            <li><a href="demo-userdb-destroy.php">Destroy DB</a></li>
        </ul>
    </body>
</html>
