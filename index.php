<?php
    include 'getInfo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <?php include("navbar.html");?>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Taille</th>
      <th scope="col">Date d'upload</th>
      <th scope="col">Upload par</th>
      <th scope="col">Genre</th>
    </tr>
  </thead>
  <tbody>
      <?php 
        if(is_array($fetchData)){
            $sn=1;
      foreach($fetchData as $data){
    ?>
    
      <tr>
      
      <th scope="row"><?php echo $sn; ?></th>
      <td><a target="_blank" href="lecture.php?pdf=<?php echo 'uploads/'.$data['FileName']?>"><?php echo $data['FileName']??''; ?></a></td>
      <td><?php echo $data['FileSize']??''; ?> MB</td>
      <td><?php echo $data['FileUploDate']??''; ?></td>
      <td><?php echo $data['UserUpload']??''; ?></td>
      <td><?php echo $data['FileTagId']??''; ?></td>
       
     </tr>
     
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php } ?>
  </tbody>
</table>
    <!--
    
-->
</body>
</html>