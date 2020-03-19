<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mvc_cms/views/css/style.css" type="text/css" >
    <title><?= $this->title; ?></title>
    <meta name="description" content="<?= $this->desc; ?>">
</head>
<body>
    <div id="main-container">
        <div id="header">
            <div id="header-menu">
                <ul>
                    <?php foreach($this->nav as $item) {
                        echo '<li><a href="/mvc_cms/index?id='.$item['id'].'">'.$item['h1'].'</a></li>';
                    } ?>
                </ul>
            </div>
        </div>