<?php
    include 'temp/head.php';
    include 'temp/navigate.php';
?>
    <br/><br/>
        <div id="header">
            <div id="header-menu">
                <ul>
                    <?php foreach($this->nav as $item) {
                        echo '<li><a href="/mvc_cms/admin/changepage/index?id='.$item['id'].'">'.$item['h1'].'</a></li>';
                    } ?>
                </ul>
            </div>
        </div>

    <div id="container">
        <div id="content">
            <h1>Tutaj możesz zmienić stronę</h1>
            <?php if(isset($_SESSION['message'])) echo $_SESSION['message']; ?>
            <form action="index?id=<?= $_GET['id']; ?>" method="post">

                <p>Nazwa w menu:</p>
                <textarea name="h1_text" cols="75" rows="4"><?= $this->h1; ?></textarea>

                <p>Zawartość:</p>
                <textarea name="content_text" cols="75" rows="4"><?= $this->content; ?></textarea>

                <p>Znacznik tytułowy dla SEO:</p>
                <textarea name="meta_title" cols="75" rows="4"><?= $this->title; ?></textarea>

                <p>Opis dla SEO:</p>
                <textarea name="meta_desc" cols="75" rows="4"><?= $this->desc; ?></textarea>

                <br/><br/><br/>
                <input type="submit" value="Edytuj">

            </form>
        </div>
    </div>
</body>
</html>