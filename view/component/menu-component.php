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
  
