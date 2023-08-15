<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title><?= self::title; ?></title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;1,300&display=swap" rel="stylesheet">
        <link href="<?= INCLUDE_PATH_FULL ?>css/style.css" rel="stylesheet" type="text/css" />
</head>
<body> 
    <header>
        <div class="center">
            <div class="logo">
                <h2 title="">Studio Web Solutions</h2>
            </div>
            <nav class="menu">
                <?php
                    foreach ($this->menuItems as $key => $value) {
                        echo '<a title="'.$value.'" href="'.INCLUDE_PATH. strtolower($value).'">'.$value.'</a>';
                    }
                ?>
            </nav>
            <div class="clear"></div>
        </div>
    </header>