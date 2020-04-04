<?php
    include 'temp/head.php';
    include 'temp/navigate.php';
?>
    
    <div id="container">
        <div id="content">
            <h1>Dodaj nową podstronę</h1>
            <?php if(isset($_SESSION['message'])) echo $_SESSION['message']; ?>
            <form action="index" method="post">

                <p>Nazwa w menu</p>
                <textarea name="menu_text" cols="75" rows="4"></textarea>

                <p>Nagłówek h1:</p>
                <textarea name="h1_text" cols="75" rows="4"></textarea>

                <p>Zawartość:</p>
                <textarea name="content_text" cols="75" rows="4"></textarea>

                <p>Znacznik tytułowy dla SEO:</p>
                <textarea name="meta_title" cols="75" rows="4"></textarea>

                <p>Opis dla SEO:</p>
                <textarea name="meta_desc" cols="75" rows="4"></textarea>

                <p>Znacznik meta index:</p>
                <input type="radio" name="meta_index" value="index" checked="checked">index<br/>
                <input type="radio" name="meta_index" value="noindex">noindex<br/><br/><br/>
                
                <p>Znacznik meta follow:</p>
                <input type="radio" name="meta_follow" value="follow" checked="checked">follow<br/>
                <input type="radio" name="meta_follow" value="nofollow">nofollow<br/><br/><br/>

                <br/><br/><br/>
                <input type="submit" value="Dodaj">

            </form>
        </div>
    </div>
</body>
</html>