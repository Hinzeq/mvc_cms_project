<?php
    include 'temp/head.php';
    include 'temp/navigate.php';
?>

    <div id="container">
        <div id="content">
            <h1>Usuń podstronę</h1>
            <form action="deletepage" method="post">
                <select name="id" onchange="this.form.submit();">
                <?php foreach($this->nav as $item) {
                        echo '<option value='.$item['id'].'>'.$item['h1'].'</options>';
                } ?>
                </select>
            </form>
        </div>
    </div>
</body>
</html>