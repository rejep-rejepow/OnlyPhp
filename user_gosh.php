
<script src="assets/js/sweetalert.js"></script>
<link rel="stylesheet"  href="assets/css/bootstrap-select.min.css"/>


<?php
require_once './blocks/mysql.php';
require_once './blocks/session.php';
require_once './blocks/html_bas.php';



if (isset 
($_POST['name']) &&
($_POST['login']) &&
($_POST['password']) &&
($_POST['bolum_id']) &&
($_POST['status']) &&
($_POST['hunari']) &&
($_POST['role_id']) &&
($_POST['etrap'])  &&
($_POST['welayat']) 
  ) 

{

  sleep(0.5);
  echo'<script>
  swal({
        title: "Taze ulanyjy gosuldy!",
        text: "",
        type: "success"
  }).then(function(){
     window.location = "admin.php";
  });
  </script>';
  
    $name=strip_tags(htmlspecialchars($_POST['name']));
    $login=strip_tags(htmlspecialchars($_POST['login']));
    $password=strip_tags(htmlspecialchars($_POST['password']));
    $bolum_id=strip_tags(htmlspecialchars($_POST['bolum_id']));
    $status=strip_tags(htmlspecialchars($_POST['status']));
    $hunari=strip_tags(htmlspecialchars($_POST['hunari']));
    $role_id=strip_tags(htmlspecialchars($_POST['role_id']));
    $welayat=strip_tags(htmlspecialchars($_POST['welayat']));
    $etrap=strip_tags(htmlspecialchars($_POST['etrap']));


       mysql_query("INSERT INTO users (      name,
                                            login,
                                            password,
                                            bolum_id,
                                            status,
                                            hunari,
                                            role_id,
                                            welayat,                                          
                                            etrap
                                           
                                      )

                                         VALUES (

                                                '$name',
                                                '$login',
                                                '$password',
                                                '$bolum_id',
                                                '$status',
                                                '$hunari',
                                                '$role_id',
                                                '$welayat',                                            
                                                '$etrap'
                                                
                                             )
                                             ");    

}

?>





  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="far fa-file-archive"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Archive <sup>code</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
        <i class="fas fa-home"></i>
          <span>BAŞ SAHYPA</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        
      </div>

<!-- Nav Item - Charts -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
         <i class="far fa-file-archive"></i>
          <span>ARHIWLER</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">ARHIW:</h6>
            <a class="collapse-item" href="cadets.php">Talyplar arhiwi</a>
             <a class="collapse-item" href="teacher.php">Mugallymlar arhiwi</a>
           
          </div>
        </div>
      </li>
      
     
     
    
    <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-lock"></i>
          <span>LOG</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">IP Screens:</h6>
            <a class="collapse-item" href="edit_ip.php">Giren ulanyjy</a>
            <a class="collapse-item" href="">Register</a>
            
           
        </div>
      </li>

      

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
      
      </div>

       <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="sazlama.php">
         <i class="fas fa-cog fa-spin"></i>
          <span>SAZLAMALAR</span>
        </a>
      </li>

     <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">
         <i class="fas fa-cog fa-spin"></i>
          <span>ADMIN IŞLERI</span>
        </a>
      </li>

         <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="logout.php">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          <span>ÇYKMAK</span></a>
      </li>
     
 <!-- Nav Item - Utilities Collapse Menu
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-paste"></i>
          <span>Registrasiya dokumenta</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Arhiwi gosmak:</h6>
            <a class="collapse-item" href="add_cadet.php">Talyp arhiwi</a>
            <a class="collapse-item" href="add_teacher.php">Mugallym arhiwi</a>
            
          </div>
        </div>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search 
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>-->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

           
             <li class="nav-item dropdown no-arrow" style="margin-top: 7%;">

             <i class="fa fa-users"></i> &nbsp 
                   <?php print $_SESSION['type'];print " : ".$_SESSION['name'];?></li> &nbsp &nbsp

            <script>
                function getDate()
                {
                    var date = new Date();
                    var hours = date.getHours();
                    var minutes = date.getMinutes();
                    var seconds = date.getSeconds();
                    //По надобности условие ниже повторить с minutes и hours
                    if(seconds < 10)
                    {
                        seconds = '0' + seconds;
                    }
                    document.getElementById('timedisplay').innerHTML = hours + ':' + minutes + ':' + seconds;
                }
                setInterval(getDate, 0);
                </script>
            <div id="timedisplay" style="margin-top: 7%; background : lightgreen;"></div> &nbsp  
           
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <p><h1 class="h3 mb-2 text-gray-800"></h1></p>




          <div class="card">   
             
        
        
        
        
        
        <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!-- Include the above in your HEAD tag -->



<script>
function goBack() {
    window.history.back();
}
</script>
        
        
        
        
        
        
            </div>



          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">Registrasiya sahypasy</h4>
            </div>
            <div class="card-body">

                 <!-- Text input -->
    <form method="POST" action="user_gosh.php" class="form-horizontal">
    <fieldset>
              <!-- Form Name -->


      <!-- Select Basic -->
     
       
       
           
          <!-- Text input-->


<div class="form-group">

            
            <div class="col-md-10 col-sm-10 ">
                <div class="input-group">
                  <label class="col-md-4 control-label" for="selectbasic">Role</label>
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                   <select name="role_id" id="selectbasic" class="form-control">
           <?php
        $sql=mysql_query("SELECT * FROM role");
       
        while($row=mysql_fetch_assoc($sql)){
          print '<option value="'.$row['id'].'">'.$row['name'].'</option>';
          ?> 
        
        
            <?php }?>
          </select>
                </div>
              </div>
            </div>



<div class="form-group"> <div class="col-md-10 col-sm-10">
                <div class="input-group">
                    <label class="col-md-4 control-label" for="selectbasic">F.A.A.a</label>
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="name" id="name" placeholder="">
                </div>
              </div>
                            </div>




<!-- Text input-->
<div class="form-group"> <div class="col-md-10 col-sm-10">
                <div class="input-group">
                    <label class="col-md-4 control-label" for="selectbasic">Login</label>
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="login" id="login" placeholder="">
                </div>
              </div>
                            </div>
    <!-- Text input-->
   <div class="form-group"> 
      <div class="col-md-10 col-sm-10">
                <div class="input-group">
                    <label class="col-md-4 control-label" for="selectbasic">Parol</label>
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="password" id="password" placeholder="">
                </div>
              </div>
            </div>

                 <!-- Text input-->
   <div class="form-group">
     <div class="col-md-10 col-sm-10">
       <div class="input-group">
  <label class="col-md-4 control-label" for="repit_calve">Status</label>
    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
  <select name="status" id="selectbasic" class="form-control">
  <option value="1">Active</option>
   <option value="0">Off</option>
  </select>
  </div>
</div>
</div>






<div class="form-group">
            
            <div class="col-md-10 col-sm-10 ">

                <div class="input-group">
                  <label class="col-md-4 control-label" for="selectbasic">Bolumi</label>
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                   
          <select name="bolum_id"  class="form-control"><option> </option>
           <?php
        $sql1=mysql_query("SELECT * FROM bolum");
       
        while($row=mysql_fetch_assoc($sql1)){
           
          print '<option value="'.$row['id'].'">'.$row['name'].'</option>';
          ?> 
        
        
            <?php }?>
          </select>
                </div>
              </div>
            </div>
 <!-- Select Basic -->
      



      <!-- Select Basic -->
      <div class="form-group">
            
            <div class="col-md-10 col-sm-10 ">

                <div class="input-group">
                  <label class="col-md-4 control-label" for="selectbasic">Hünäri</label>
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                   
          <select name="hunari"  class="form-control"><option> </option>
           <?php
        $sql1=mysql_query("SELECT * FROM hunar");
       
        while($row=mysql_fetch_assoc($sql1)){
           
          print '<option value="'.$row['name'].'">'.$row['name'].'</option>';
          ?> 
        
        
            <?php }?>
          </select>
                </div>
              </div>
            </div>

         <!-- Select Basic -->
      <div class="form-group">
            
            <div class="col-md-10 col-sm-10 ">

                <div class="input-group">
                  <label class="col-md-4 control-label" for="selectbasic">Welayaty</label>
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                   
          <select name="welayat"  class="form-control"><option> </option>
           <?php
        $sql1=mysql_query("SELECT * FROM welayat");
       
        while($row=mysql_fetch_assoc($sql1)){
           
          print '<option value="'.$row['name'].'">'.$row['name'].'</option>';
          ?> 
        
        
            <?php }?>
          </select>
                </div>
              </div>
            </div>

       <!-- Select Basic -->
       <div class="form-group">
            
            <div class="col-md-10 col-sm-10 ">

                <div class="input-group">
                  <label class="col-md-4 control-label" for="selectbasic">Etraby</label>
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                   
          <select name="etrap"  class="form-control"><option> </option>
           <?php
        $sql1=mysql_query("SELECT * FROM etrap");
       
        while($row=mysql_fetch_assoc($sql1)){
          
          print '<option value="'.$row['name'].'">'.$row['name'].'</option>';
          ?> 
        
        
            <?php }?>
     </select>
                </div>
              </div>
            </div>


     

        <!-- Button (Double) -->
      <div class="form-group">
  <label class="col-md-4 control-label" for="btn_registrar"></label>
  <div class="col-md-8">
    <input type="submit" id="btn_registrar" name="btn_registrar" class="btn btn-success" value="REGISTRASIÝA"/>
   <input type="button" id="btn_cancelar" name="btn_cancelar"  onclick="goBack()"class="btn btn-danger" value="YZA"/>
  </div>
</div>

</fieldset>
</form>


<script>
  function goBack(){
    window.history.back();
  }
</script>

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   
                  </thead>
                  <tfoot>
                    
                  </tfoot>
                  <tbody>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

   
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 
 <?php
 require_once './blocks/html_sony.php'?>
  