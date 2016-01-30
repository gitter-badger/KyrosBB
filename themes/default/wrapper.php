<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $site_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='vendor/font-awesome/css/font-awesome.min.css'>
    <link rel='stylesheet' href='themes/default/css/style.css'>
  </head>
  <body>
    <div class='header-xs'>
      <div class='logostrip'>
        <a class='logo' href='./'>
          <?php echo $site_name; ?>
        </a>
        <a class='navlink'>
          [ Menu ]
        </a>
      </div>
      <div class='userbar'>
        Currently viewing as a guest.
      </div>
    </div>
    <?php echo $content; ?>
    <div class='copyright'>
      Powered by <a href='http://www.avestri.co'>KyrosBB</a>.
    </div>
  </body>
</html>