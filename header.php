<div class="container">
    <nav>
        <ul>
            <?php
                foreach ($result as $array) {
                    echo '<li><a href="index.html?pages='.$array["id"].'">'.$array["name"].'</a></li>';
                }
            ?>
        </ul>
    </nav>
</div>