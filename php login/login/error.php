<?php
define("PAGE", "Error");
include("layouts/header.php");
?>

<div class="container">
    <div class="box error">

        <h1>accesso fallito</h1>

        <!-- ERROR -->
        <?php
        echo $_GET['error'];
        ?>

    </div>
</div>

<?php
include("layouts/footer.php");
?>