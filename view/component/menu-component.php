  <nav class="navbar navbar-expand-lg band">
    <img class="logo" src="assets/img/logo-black.png">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="?page=home">Home<span class="sr-only"><?php $page ?></span></a>
        <a class="nav-item nav-link" href="?page=invoices">Invoices</a>
        <a class="nav-item nav-link" href="?page=compagnies">Compagnies</a>
        <a class="nav-item nav-link" href="?page=contacts">Contacts</a>


        <!-- ONLY for admin -->
        <?php if ($_SESSION['rights'] === 'god') :?> 
        <div class="btn-group dropright">
        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</button>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="?page=dashboard">Dashboard</a>
            <a class="dropdown-item" href="?page=invoices-create">New invoice</a>
            <a class="dropdown-item" href="?page=compagnies-create">New company</a>
            <a class="dropdown-item" href="?page=contacts-create">New contact</a>
          </div>
        </div>
        <?php endif ?>
        <!---->
      </div>

      
    </div>
  </nav>
  
  <div class="btn-group dropright">
          <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a class="nav-item nav-link" href="?page=dashboard"><?=$_SESSION['username']?></a></button>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a href="#" data-toggle="modal" data-target="#logoutModal">logout</a>
            </div>
        </div>