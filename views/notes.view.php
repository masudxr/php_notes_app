<?php require ('./partials/header.php') ?>
<?php require ('./partials/nav.php') ?>
<?php require ('./partials/banner.php') ?>


<main>
    <?php foreach($notes as $note):  ?>
    <li> <?=$note['body'] ?></li>
    <?php endforeach;  ?>
</main>

<?php require ('./partials/footer.php') ?>