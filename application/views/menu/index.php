<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$activeLink = (isset($activeLink)) ? $activeLink :  "";?>

<nav class=" nav navbar navbar-expand-md fixed-top">
  
  <a class="navbar-brand" href="<?php echo base_url();?>welcome">
    <img  src="<?php echo base_url();?>assets/images/logoL.png" alt="Logo" style="width:150px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span> 
  </button>

  <div class=" collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo ($activeLink=='Company'?'active':'');?>">
        <a class="nav_link nav-link" href="<?php echo base_url();?>Welcome_IF/company">Company</a>
      </li>
      <li class="nav-item <?php echo ($activeLink=='Tutor'?'active':'');?>">
        <a class="nav_link nav-link" href="<?php echo base_url();?>Welcome_IF/tutor">Tutor</a>
      </li>
      <li class="nav-item <?php echo ($activeLink=='supervisor'?'active':'');?>">
        <a class="nav_link nav-link" href="<?php echo base_url();?>Welcome_IF/supervisor"></i>Supervisor</a>
      </li>
      <li class="nav-item <?php echo ($activeLink=='student'?'active':'');?>">
        <a class="nav_link nav-link" href="<?php echo base_url();?>Welcome_IF/student"></i>Student</a>
      </li>
      <li class="nav-item <?php echo ($activeLink=='calendar'?'active':'');?>">
        <a class="nav_link nav-link" href="<?php echo base_url();?>Welcome_IF/calendar"></i>Calendar
        </a>
      </li>
    </ul>
  </div>
  <div class="navbar-collapse collapse navbar-right">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="mdi mdi-24px mdi-bell " data-toggle="tooltip" title="Notification" id="iconBell"> </i>
            </a>
              <ul class="dropdown-menu menu-dropdown">
                <li class="head text-light bg-info">
                  <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12">
                      <span>Notifications (3)</span>
                      <a href="" class="float-right text-light">Mark all as read</a>
                    </div>
                </li>
                <li class="notification-box">
                  <div class="row">
                    <div class="col-lg-3 col-sm-3 col-3 text-center">
                      <a class="dropdown-item text-dark" href="#"><img class="logo" src="<?php echo base_url();?>assets/images/logo.png">  <strong>Rith.Nhil</strong> <br>conmment on <strong>Toch.Ban</strong></b></a>   
                  </div>
                </li>
                <li class="notification-box">
                  <div class="row">
                    <div class="col-lg-3 col-sm-3 col-3 text-center">
                      <a class="dropdown-item text-dark" href="#"><img class="logo" src="<?php echo base_url();?>assets/images/logo.png">  <strong>Rith.Nhil</strong> <br>conmment on <strong>Toch.Ban</strong></b></a>
                    </div>     
                  </div>
                </li>
                <li class="footer bg-info text-center">
                  <a href="" class="text-light">View All</a>
                </li>
              </ul>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#userprofile">       
              <b class="colorTextMenu">  
                <span class="mdi mdi-account-circle mdi-24px" data-toggle="tooltip" title="Username"></span>   
              </b>
           </a>
          </li>
          <li class="nav-item">
              <a title="logout" class="nav-link" href="<?php echo base_url();?>connection/logout">
                 <i class="mdi mdi-power mdi-24px"></i>
              </a>
          </li>
      </ul>
  </div>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>
