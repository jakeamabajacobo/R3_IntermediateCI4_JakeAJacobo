<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Tools Inventory</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>tool/index">Home <span class="sr-only"></span></a>
      </li>
   
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" href="<?=base_url()?>tool/index" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tools
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="<?=base_url()?>tool/add">Inventory</a>
          <a class="dropdown-item" href="<?=base_url()?>tool/add">Add</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">User</a>
      </li>
    </ul>
  
  </div>
</nav>
