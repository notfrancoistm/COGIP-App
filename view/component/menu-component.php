  <nav class="navbar navbar-expand-lg band">
    <img class="logo" src="assets/img/logo-black.png">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" style="color:white" href="?page=home">Home<span class="sr-only"><?php $page ?></span></a>
        <a class="nav-item nav-link" style="color:white" href="?page=invoices">Invoices</a>
        <a class="nav-item nav-link" style="color:white" href="?page=compagnies">Compagnies</a>
        <a class="nav-item nav-link" style="color:white" href="?page=contacts">Contacts</a>
        <div class="btn-group dropdown">
        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white"><?=$_SESSION['username']?></button>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php if ($_SESSION['rights'] === 'god') :?>
          <a class="dropdown-item" href="?page=dashboard">Dashboard</a>
          <a class="dropdown-item" href="?page=user-manager">User manager</a>
          <a class="dropdown-item" href="?page=invoices-create">New invoice</a>
          <a class="dropdown-item" href="?page=compagnies-create">New company</a>
          <a class="dropdown-item" href="?page=contacts-create">New contact</a>
          <?php endif ?>
          <a class="dropdown-item" href="?page=logout">Log out</a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  
