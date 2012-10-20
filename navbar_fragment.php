<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-fluid">
    <a class="brand" href="#">
  CJ Bus Booking
</a>
      

<div class="btn-group pull-right">
  <button class="btn btn-success">
    <?php if(isset($_SESSION['user'])) { ?>
<p>Welcome <?php echo $_SESSION['user']; ?></p>
<? } 
else
{
?>
<a href="login.php">Login</a>
<ul class="dropdown-menu">
    <!-- dropdown menu links -->
    <li><a href="#k-modal" role="button" data-toggle="modal">Launch demo modal</a></li>
              <li class="divider"></li>
              <li><a href="#">Sign Out</a></li>
  </ul>
<? }?>
</button>
</div>

<div class="nav-collapse">
            <ul class="nav">
            <li class="divider-vertical"></li>
              <li><a href="home.php"><i class="icon-home icon-white" id="k-menu-icon"></i> Home</a></li>
              <li class="divider-vertical"></li>
              <li><a href="cancel_ticket.php"><i class="icon-wrench icon-white" id="k-menu-icon"></i> Cancel</a></li>
              <li class="divider-vertical"></li>
              <li><a href="sign_up.php"><i class="icon-user icon-white" id="k-menu-icon"></i> Register</a></li>
              <li class="divider-vertical"></li>
              <?php if(isset($_SESSION['user'])) { ?>
              <li><a href="logout.php"><i class="icon-user icon-white" id="k-menu-icon"></i> Log out</a></li>
              <li class="divider-vertical"></li>
              <? } ?>
            </ul>
          </div><!--/.nav-collapse --> 

    </div>
  </div>
</div>