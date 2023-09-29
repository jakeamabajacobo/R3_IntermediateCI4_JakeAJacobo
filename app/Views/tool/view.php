<!DOCTYPE html>
<html>
<head>
    <title>Add Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>




<?=$this->include('item/include/navbar') ?>


<div class="container">



<div class="row">


<form action="<?=base_url()?>item/update"  method="POST">

  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Name</label> 
    <div class="col-8">
      <div class="input-group">
    
        <input id="text" name="name" value="<?= $item->name ?>" placeholder="name" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="price" class="col-4 col-form-label">price</label> 
    <div class="col-8">
      <input id="price" name="price"  value="<?= $item->price ?>" placeholder="0" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="description" class="col-4 col-form-label">description</label> 
    <div class="col-8">
      <textarea id="description" name="description" cols="40" rows="5" class="form-control">
      <?= $item->description ?>
      </textarea>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8"><br />
      <button name="submit" type="submit" class="btn btn-primary">Update</button>
      <a type="button" class="btn btn-warning" role="button" a href="<?=base_url()?>">Back</a>

    </div>
  </div>
  <input type="hidden" name="id" value="<?= $item->id ?>">
</form>



    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html> 

