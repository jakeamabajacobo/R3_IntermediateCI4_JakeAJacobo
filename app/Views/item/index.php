<!DOCTYPE html>
<html>
<head>
    <title>Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>




<?=$this->include('item/include/navbar') ?>

<?= $this->section('content'); ?>




<?=$this->include('item/include/modal') ?>





<div class="container">
<br />
<a type="button" class="btn btn-primary" href="<?=base_url()?>item/add" role="button">Add</a>

    <div class="row">
        <h3>List of  Item  </h3>
        <table id="tbl"  class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php foreach($items  as $item): ?>
                <tr data-item-id="<?= $item->id ?>">         
                    <td id="<?= $item->id ?>" data-item-id="<?= $item->id ?>"><?= $item->id ?></td>
                    <td><?= $item->name ?></td>
                    <td><?= $item->price ?></td>
                    <td>
                        <a type="button" class="btn btn-primary" href="<?=base_url()?>item/view/<?=$item->id;?>" role="button">View</a>
                        <a type="button" class="btn btn-info"  href="<?=base_url()?>item/view/<?=$item->id?>&mode=view">Edit</a>
                        <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Delete</button> 
                    </td>
                </tr>
            <?php endforeach ?> 
        </table> 

    </div>
</div>





<script>
      var itemId;
var tableRows = document.querySelectorAll('tbody tr');
tableRows.forEach(function(row) {
    row.addEventListener('click', function() {
         itemId = this.getAttribute('data-item-id');
        console.log('Item ID:', itemId)
    });
});

function deleteData() {
    window.location.href = '<?= base_url('item/delete/') ?>' + itemId;
}
</script>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<!-- FOR MODAL PURPOSES -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</body>
</html> 

