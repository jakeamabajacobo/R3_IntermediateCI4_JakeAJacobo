<!DOCTYPE html>
<html>
<head>
    <title>View Tool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style type="text/css">
		body{
			background-image: url("https://preview.colorlib.com/theme/engineers/images/hero_1.jpg.webp");
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>

  </head>
<body>







<section class="vh-100`" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-12">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
    
          <div class="card-body p-5 text-center">
          <h1> Add New Tool</h1>
          
            <form action="<?=base_url()?>tool/update"  method="POST">

            <?php if(isset($validation)): ?>
                <div class="alert alert-danger" role="alert">
                    <?= $validation->listErrors() ?>
            </div>
            <?php endif; ?>
                


              <div class="form-group row">
                <label for="text" class="col-4 col-form-label">Name</label> 
                <div class="col-8">
                  <div class="input-group">
                
                    <input id="text" name="name" placeholder="Tool Name" type="text" class="form-control">
                  </div>
                </div>
              </div>
              <br />
              <div class="form-group row">
                <label for="price" class="col-4 col-form-label">Brand</label> 
                <div class="col-8">
                  <input id="price" name="brand" placeholder="Brand" type="text" class="form-control" >
                </div>
              </div>
              <br />
              <div class="form-group row">
                <label for="description" class="col-4 col-form-label">QTY</label> 
                <div class="col-8">
                  <input id="qty" name="qty" class="form-control" placeholder="0">
                </div>
              </div> 
              <br />
              <div class="form-group row">
                <div class="offset-4 col-12"><br />
                  <button name="submit" type="submit" class="btn btn-primary">Add</button>
                  <a type="button" class="btn btn-warning" role="button" a href="<?=base_url()?>">Cancel</a>

                </div>
              </div>
            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>















<?=$this->include('tool/include/navbar') ?>


<div class="container">



<div class="row">


<form action="<?=base_url()?>tool/update"  method="POST">

  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Tool Name</label> 
    <div class="col-8">
      <div class="input-group">
    
        <input id="text" name="name" value="<?= $tool->name ?>" placeholder="name" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="price" class="col-4 col-form-label">Brand</label> 
    <div class="col-8">
      <input id="price" name="brand"  value="<?= $tool->brand ?>" placeholder="brand" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="description" class="col-4 col-form-label">QTY</label> 
    <div class="col-8">
    <input id="QTY" name="QTY"  value="<?= $tool->qty ?>" placeholder="0" type="number" class="form-control">
    
      </textarea>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8"><br />
      <button name="submit" type="submit" class="btn btn-primary">Update</button>
      <a type="button" class="btn btn-warning" role="button" a href="<?=base_url()?>">Back</a>

    </div>
  </div>
  <input type="hidden" name="id" value="<?= $tool->id ?>">
</form>



    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html> 

