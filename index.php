<?php
define('PATH', realpath(dirname(__DIR__)));
$http = 'http';
define('ROOT_LINK', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['CONTEXT_PREFIX'] . '/publicatie/');
?>
<!doctype html>
<html lang='en'>
<head>
    <meta http-equiv='Content-Type' content='text/html' charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Publicatie</title>
    <link rel="stylesheet" href='<?php echo ROOT_LINK; ?>publicatie.css' />

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css' <?php echo '?' . mt_rand(); ?> />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js<?php echo '?' . mt_rand(); ?>"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js<?php echo '?' . mt_rand(); ?>'></script>
    <script type='text/javascript' src="<?php echo ROOT_LINK;?>publicatie.js<?php echo '?' . mt_rand(); ?>"></script>
</head>
<body>
    
    <div class="ui vertical stripe segment" id="segment_publicatie">
        <?php
        require_once PATH . '/publicatie/publicatie.php';
        ?>
    </div>
</body>
</html>
