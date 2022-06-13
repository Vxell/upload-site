<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include 'navbar.html';
    ?>
<form method="post" action="upload.php" enctype="multipart/form-data">
    <div class="custom-file">
        <input type="file" name="fichier" id="fichier" class="custom-file-input">
        <label for="fichier" class="custom-file-label">Choisissez le pdf a téléchargé :</label>
    </div>
    <div class="form-group">
        <label for="TagUp">Genre :</label>
        <select name="tag" id="TagUp" class="custom-select">
            <option value="Hacking">Hacking</option>
        </select><br>
    </div>
        <input type="submit" name="submit" value="Envoyer" class="btn btn-primary mb-2">
</form>
</body>
</html>