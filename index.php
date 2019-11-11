<?php
    $images = scandir('uploads');
    $images = array_diff($images, array('.', '..'));
?>

<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title>multiple file</title>
    </head>
    <body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple>
            <input type="submit" value="<Upload">
        </form>
        <div>
        <?php
        foreach ($images as $image)
        {
        ?>
            <div class="text-center">
                <img src="uploads/<?= $image; ?>" class="rounded" width="20%" alt="<?= $image ?>">
                <p><?= $image ?></p>
                <a href="delete.php?id=<?= $image ?>"><button type="submit" >Delete</button></a>
            </div>
        <?php
        }
        ?>
        </div>
    </body>

</html>