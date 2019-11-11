<?php
require"DBDA.class.php";
require"db_function.php";
$order="time";
$SID=$_GET['SID'];
$cid=$_GET['ID'];


$select2 = array( 'senduid' => $SID,'getuid' => $SID);
$result2 = selectordao("message", $select2,$order);
$length2=count($result2);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Canvas</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <style type="text/css">
        p {font-size:15px;font-weight:bold;color:gray;}
    </style>
      <style>
 
        #login_click{ margin-top:32px; margin-left: 40px; height:40px;}
        #login_click login 
        {


            text-decoration:none;
            background:#2f435e;
            color:#f2f2f2;

            padding: 10px 30px 10px 30px;
            font-size:16px;
            font-family: 微软雅黑,宋体,Arial,Helvetica,Verdana,sans-serif;
            font-weight:bold;
            border-radius:3px;

            -webkit-transition:all linear 0.30s;
            -moz-transition:all linear 0.30s;
            transition:all linear 0.30s;
            
            width:500px;
            height:300px;
            }
           #login_click login:hover { background:#385f9e; }

        </style>
  </head>
  <body>
    <!-- Side Navbar -->
       <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Shuihan Zhang</h2><span>Beautiful girl</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
         <div class="main-menu">
          <!--<h5 class="sidenav-heading">Main</h5>-->
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="account_teacher.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-user"></i>Account                             </a></li>
            <li><a href="dashboard_teacher.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-form"></i>Dashboard                      </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Courses </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li class="active"><a href="homeTea.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Home</a></li>
                <li><a href="syllabust.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Syllabus</a></li>
                <li><a href="modulest.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Modules</a></li>
                <li><a href="discussion_teacher.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Discussions</a></li>
                <li><a href="gradest.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Grades</a></li>
                <li><a href="assignmentsTea.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Assignment</a></li>
              </ul>
            </li>
            <li><a href="calendart.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="fa fa-bar-chart"></i>Calendar                    </a></li>
            
            <!--<li><a href="login.html"> <i class="icon-interface-windows"></i>Login page                             </a></li>-->
            <li class="active"> <a href="inboxt.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-mail"></i>Inbox
                <div class="badge badge-warning">6 News</div></a></li>
            <li ><a href="helpt.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-search"></i>Help                             </a></li>
            <li><a href="contactt.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-rss-feed"></i>Contact                          </a></li>
          </ul>
        </div>
      </div>
    </nav>
   <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="#" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Canvas</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->
               
                <!-- Messages dropdown-->
               
                <!-- Log out-->
                <li class="nav-item"><a href="login.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Inbox      </li>
          </ul>
        </div>
      </div>
      <div class="container-fluid">
       <div class="row">
       <div class="col-lg-4">
              <!-- Daily Feed Widget-->
              <div id="daily-feeds" class="card updates daily-feeds">
                <div id="feeds-header" class="card-header d-flex justify-content-between align-items-center">
                  <h2 class="h5 display"><a data-toggle="collapse" data-parent="#daily-feeds" href="#feeds-box" aria-expanded="true" aria-controls="feeds-box">Inbox </a></h2>
                  <div class="right-column">
                    <div class="badge badge-primary">messages</div><a data-toggle="collapse" data-parent="#daily-feeds" href="#feeds-box" aria-expanded="true" aria-controls="feeds-box"><i class="fa fa-angle-down"></i></a>
                  </div>
                </div>
                <div id="feeds-box" role="tabpanel" class="collapse show">
                  <div class="feed-box">
                    <ul class="feed-elements list-unstyled">
                      <!-- List-->
                     <?php
                       
                        for($x=0;$x<$length2;$x++){
                            echo'  
                           <li class="clearfix" >
                        <div class="feed d-flex justify-content-between">
                          <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="img/xinfeng.jpg" alt="person" class="img-fluid rounded-circle"></a>
                            <div class="content"><a href="messaget.php?ID='; echo $cid;echo'&SID=';echo $SID;echo'&XID='; echo $x;echo'"><strong>';
                            if($result2[$x]['senduid']==$SID){
                                $select3 = array( 'SID' =>$result2[$x]['getuid']);
                                $result3 = select("student", $select3);
                                if(empty($result3)){
                                    $select4 = array( 'TID' =>$result2[$x]['getuid']);
                                    $result4 = select("teacher", $select4);
                                     echo "Teacher "; echo $result4[0]['name']; 
                                }
                                else{
                                    echo "Student ";echo $result3[0]['name']; 
                                }
                            }
                            else{
                                $select5 = array( 'SID' =>$result2[$x]['getuid']);
                                $result5 = select("student", $select5);
                                if(empty($result5)){
                                    $select6 = array( 'TID' =>$result2[$x]['getuid']);
                                    $result6 = select("teacher", $select4);
                                     echo "Teacher ";echo $result6[0]['name']; 
                                }
                                else{
                                    echo "Student ";echo $result5[0]['name']; 
                                }
                                
                            }
                               
                            
                            echo'</strong></a>
                              <div class="full-date"><small>';echo $result2[$x]['content'];echo'</small></div>
                            </div>
                          </div>
                          <div class="date"><small>';echo $result2[$x]['time'];echo'</small></div>
                           </div>
                          
                      </li>
                        
                       
                       
                            
                            ';
                        }
                        ?>
                            
                    </ul>
                  </div>
                </div>
              </div>

     </div>
     <div class="col-lg-8">
        <div class="card">
            <div class="card-header" align="right">
                <li><a href="inboxWritet.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"><i class="icon-ios-email">Write</i></a></li>
            </div>
            <div class="card-body" align="middle">
                
                <table border="0" style="valign:center">
                    <form action='' method='post'>

                  <tr>
                    <th> <p>Receiver ID: </p></th>
                      <th><input type='text' name='text' style="background:none;border:none;border-bottom:1px solid #808080;"></th>
                  </tr>
                </table>
                <textarea name='sub' style="width:700px;height:385px;"></textarea>  
                 <div id="login_click">
                    <input type='submit' name='send' value='发送'>
                </div>
                </form>
            </div>
           <?php
            if(!empty($_POST['send'])){
              
                $db=new DBDA();
                $in=$_POST['text'];
                
                $da=date('Y.m.d.h:i');
              
                $sql = "insert into message values('{$SID}','{$in}','{$_POST['sub']}','{$da}','0')";
                                
              echo' <div>'; echo $_POST['sub'];echo'</div>';
                $a=$db->query($sql);
                
              
                 

            }

?>
        </div>
     </div>
     </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>