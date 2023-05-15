<?php require '../header.php'; ?>
<?php require '../nav.php'; ?>
<?php require '../banner.php'; ?>

<main>
    <?php foreach($notes as $note):  ?>
    <li> <?=$note['body'] ?></li>
    <?php endforeach;  ?>
</main>

<?php require '../footer.php'; ?>