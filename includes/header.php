<?php
  if (!isset($pageTitle)) {
    $pageTitle = "Retrosheet";
  }
?>
<html>
  <head>
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" type="text/css" href="/includes/styles/style.css">
    <link rel="stylesheet" type="text/css" href="/menubar/menubar.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script type="text/javascript" src="menubar/menubar.js"></script>
    <!--
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252"><
    <meta content="MSHTML 6.00.2600.0" name=GENERATOR>-->
  </head>
  <body>
    <header>
      <div class="logo">
        <a href=/retrosheet>
          <img src="/menubar/retro-logo.gif" alt="Retrosheet" width="400" height="46" class="logocenter">
        </a>
      </div>
      <div class="mbcenter">
        <ul class="nav">
          <li>
            <a href="/calendar.php">
              Calendar
            </a>
          </li>
          <li>
            <a href="#">
              People &darr;
            </a>
            <ul>
              <li>
                <a href="/people.php">
                  Overview
                </a>
              </li>
              <li>
                <a href="/players/index.php">
                  Players
                </a>
              </li>
              <li>
                <a href="/coaches/index.php">
                  Managers & Coaches
                </a>
              </li>
              <li>
                <a href="/umpires/index.php">
                  Umpires
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="/seasons.php">
              Seasons
            </a>
          </li>
          <li>
            <a href="#">
              Teams & Ballparks &darr;
            </a>
            <ul>
              <li>
                <a href="/teams&bp.php">
                  Overview
                </a>
              </li>
              <li>
                <a href="/teams/index.php">
                  Teams
                </a>
              </li>
              <li><a href="/parks/index.php">
                  Ballparks
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">
              Game Collections &darr;
            </a>
            <ul>
              <li>
                <a href="/notables/index.php">
                  Overview
                </a>
              </li>
              <li>
                <a href="/notables/allstargames.php">
                  All-Star Games
                </a>
              </li>
              <li>
                <a href="/notables/championships.php">
                  Championship Games
                </a>
              </li>
              <li>
                <a href="/notables/other.php">
                  Other Collections
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="/resources.php">
              Outside Resources
            </a>
          </li>
          <li>
            <a href="#">
              Downloads &darr;
            </a>
            <ul>
              <li>
                <a href="/downloads/index.php">
                  Overview
                </a>
              </li>
              <li>
                <a href="/downloads/seasonindex.php">
                  By Season
                </a>
              </li>
              <li>
                <a href="/downloads/typeindex.php">
                  By File Type
                </a>
              </li>
              <li>
                <a href="/downloads/everything.zip">
                  Everything
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </header>
