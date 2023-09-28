

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Delete Item Confirmation</h4>
 
        </button>
      </div>
      <div class="modal-body">
        <h3> Are you sure you want to Delete the Data ?</h3>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal"  id="confirmDelete" href="<?=base_url()?>item/delete/<?php $uid; ?>">Yes</button> -->
        <a type="button" class="btn btn-primary" data-dismiss="modal" onclick="deleteData()" id="btnDelete">Yes</a>
        <button type="button" class="btn btn-warning" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>