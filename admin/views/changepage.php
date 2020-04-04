<?php
    include 'temp/head.php';
    include 'temp/navigate.php';
?>
    <br/><br/>
        <div id="header">
            <div id="header-menu">
                <ul>
                    <?php foreach($this->nav as $item) {
                        echo '<li><a href="/mvc_cms/admin/changepage/index?id='.$item['id'].'">'.$item['menu_nav'].'</a></li>';
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
                <textarea name="menu_text" cols="75" rows="4"><?= $this->menu_nav; ?></textarea>

                <p>Nagłówek h1:</p>
                <textarea name="h1_text" cols="75" rows="4"><?= $this->h1; ?></textarea>

                <p>Zawartość:</p>
                <textarea name="content_text" cols="75" rows="4"><?= $this->content; ?></textarea>

                <p>Znacznik tytułowy dla SEO:</p>
                <textarea name="meta_title" cols="75" rows="4"><?= $this->title; ?></textarea>

                <p>Opis dla SEO:</p>
                <textarea name="meta_desc" cols="75" rows="4"><?= $this->desc; ?></textarea>

                <p>Znacznik meta index</p>
                    <?php
                        if($this->index == "index"){
                            echo '<input type="radio" name="index" value="index" checked="checked">index<br/>';
                            echo '<input type="radio" name="index" value="noindex">noindex<br/><br/><br/>';
                        }
                        else{
                            echo '<input type="radio" name="index" value="index">index<br/>';
                            echo '<input type="radio" name="index" value="noindex" checked="checked">noindex<br/><br/><br/>';
                        }
                    ?>
                
                <p>Znacznik meta follow:</p>
                    <?php
                        if($this->follow == "follow"){
                            echo '<input type="radio" name="follow" value="follow" checked="checked">follow<br/>';
                            echo '<input type="radio" name="follow" value="nofollow">nofollow<br/><br/><br/>';
                        }
                        else{
                            echo '<input type="radio" name="follow" value="follow">follow<br/>';
                            echo '<input type="radio" name="follow" value="nofollow" checked="checked">nofollow<br/><br/><br/>';
                        }
                    ?>

                <br/><br/><br/>
                <input type="submit" value="Edytuj">

            </form>
        </div>
    </div>
</body>
</html>