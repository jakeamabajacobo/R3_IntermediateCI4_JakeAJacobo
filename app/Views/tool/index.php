<!DOCTYPE html>
<html>
<head>
    <title>Tools Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
  body{
        background-image: url("https://preview.colorlib.com/theme/engineers/images/hero_1.jpg.webp");
        background-repeat: no-repeat;
			background-size: cover;
      }
    </style>

</head>
<body>




<?=$this->include('tool/include/navbar') ?>

<?= $this->section('content'); ?>




<?=$this->include('tool/include/modal') ?>





<div class="container">
<br />
<a type="button" class="btn btn-primary" href="<?=base_url()?>tool/add" role="button">Add</a>

    <div class="row">
        <h3>Tool  List</h3>
    
        
    </div>
</div>







  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</body>
</html> 

