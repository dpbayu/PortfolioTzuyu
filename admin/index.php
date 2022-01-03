<!-- PHP -->
<?php
require('../include/db.php');
if(!isset($_SESSION['isUserLoggedIn'])){
echo "<script>window.location.href='login.php';</script>";                    
}
$query = "SELECT * FROM home,section_control,social_media,about,contact,site_background,seo,admin";
$run = mysqli_query($db,$query);
$user_data = mysqli_fetch_array($run);
?>
<!-- PHP -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../include/logout.php">
                        Logout
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">
                        Website
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">Admin Panel</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar User Panel -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../assets/img/<?=$user_data['admin_profile']?>" class="img-circle" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?=$user_data['fullname']?></a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Section Control -->
                        <li class="nav-item menu-open">
                            <a href="index.php" class="nav-link">
                                <i class="fa fa-th-large" aria-hidden="true"></i>
                                <p>
                                    Section Control
                                </p>
                            </a>
                        </li>
                        <!-- Section Control -->
                        <!-- Home Setting -->
                        <li class="nav-item menu-open">
                            <a href="index.php?homesetting=true" class="nav-link">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <p>Home Setting</p>
                            </a>
                        </li>
                        <!-- Home Setting -->
                        <!-- About Setting -->
                        <li class="nav-item menu-open">
                            <a href="index.php?aboutsetting=true" class="nav-link">
                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                                <p>About Setting</p>
                            </a>
                        </li>
                        <!-- About Setting -->
                        <!-- Resume Setting -->
                        <li class="nav-item menu-open">
                            <a href="index.php?resumesetting=true" class="nav-link">
                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                                <p>Resume Setting</p>
                            </a>
                        </li>
                        <!-- Resume Setting -->
                        <!-- Portfolio Setting -->
                        <li class="nav-item menu-open">
                            <a href="index.php?portfoliosetting=true" class="nav-link">
                                <i class="fa fa-desktop" aria-hidden="true"></i>
                                <p>Portfolio Setting</p>
                            </a>
                        </li>
                        <!-- Portfolio Setting -->
                        <!-- Contact Setting -->
                        <li class="nav-item menu-open">
                            <a href="index.php?contactsetting=true" class="nav-link">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <p>Contact Setting</p>
                            </a>
                        </li>
                        <!-- Contact Setting -->
                        <!-- Change Background Setting -->
                        <li class="nav-item menu-open">
                            <a href="index.php?changebackground=true" class="nav-link">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <p>Change Background</p>
                            </a>
                        </li>
                        <!-- Change Background Setting -->
                        <!-- SEO Setting -->
                        <li class="nav-item menu-open">
                            <a href="index.php?seosetting=true" class="nav-link">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <p>SEO Setting</p>
                            </a>
                        </li>
                        <!-- SEO Setting -->
                        <!-- Account Setting -->
                        <li class="nav-item menu-open">
                            <a href="index.php?accountsetting=true" class="nav-link">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <p>Account Setting</p>
                            </a>
                        </li>
                        <!-- Account Setting -->
                    </ul>
                </nav>
                <!-- Sidebar User Panel -->
            </div>
            <!-- Sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <br>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Main row -->
                    <div class="row">
                        <?php
                        if(isset($_GET['homesetting'])){ 
                        ?>
                        <!-- Update Home -->
                        <div class="card card-primary col-lg-12">
                            <div class="card-header">
                                <h3 class="card-title">Update Home</h3>
                            </div>
                            <form role="form" action="../include/admin.php" method="post">
                                <div class="card-body">
                                    <!-- Title -->
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title"
                                            value="<?=$user_data['title']?>" placeholder="Enter Title">
                                    </div>
                                    <!-- Title -->
                                    <!-- Subtitle -->
                                    <div class="form-group">
                                        <label>Subtitle</label>
                                        <input type="text" class="form-control" name="subtitle"
                                            value="<?=$user_data['subtitle']?>" placeholder="Enter Subtitle">
                                    </div>
                                    <!-- Subtitle -->
                                    <!-- Show Icon -->
                                    <div class="form-check">
                                        <input type="checkbox" name="showicons" class="form-check-input" <?php
                                            if($user_data['showicons']){
                                            echo "checked";
                                            }
                                            ?>>
                                        <label class="form-check-label">Show Social Icons</label>
                                    </div>
                                    <!-- Show Icon -->
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="update-home" class="btn btn-primary">Save
                                        Changes</button>
                                </div>
                            </form>
                        </div>
                        <!-- Update Home -->
                        <?php
                        }else if (isset($_GET['aboutsetting'])){
                        ?>
                        <!-- Update About -->
                        <div class="card card-primary col-lg-12">
                            <div class="card-header">
                                <h3 class="card-title">Update About</h3>
                            </div>
                            <!-- Update About Info -->
                            <br>
                            <img src="../assets/img/<?=$user_data['profile_pic']?>" class="col-2">
                            <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>About Profile Picture</label>
                                        <input type="file" class="form-control" name="profile">
                                    </div>
                                    <div class="form-group">
                                        <label>About Title</label>
                                        <input type="text" class="form-control" name="abouttitle"
                                            value="<?=$user_data['about_title']?>" placeholder="Enter Title">
                                    </div>
                                    <div class="form-group">
                                        <label>About Subtitle</label>
                                        <input type="text" class="form-control" name="aboutsubtitle"
                                            value="<?=$user_data['about_subtitle']?>" placeholder="Enter Subtitle">
                                    </div>
                                    <div class="form-group">
                                        <label>About Description</label><br>
                                        <textarea style="resize: none;" cols="141" rows="3"
                                            name="aboutdesc"><?=$user_data['about_desc']?></textarea>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" name="update-about" class="btn btn-primary">Save
                                            Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Update About Info -->
                        <!-- Update Skills -->
                        <div class="card card-primary col-lg-12">
                            <div class="card-header">
                                <h3 class="card-title">Manage Skills</h3>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Skills</h3>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Skill Name</th>
                                                <th>Skill Level</th>
                                                <th style="width: 40px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $q = "SELECT * from skills";
                                                $r=mysqli_query($db,$q);
                                                $c =1;
                                                while($skill=mysqli_fetch_array($r)){
                                                ?>
                                            <tr>
                                                <td><?=$c?></td>
                                                <td><?=$skill['skill_name']?></td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-danger"
                                                            style="width: <?=$skill['skill_level']?>%"></div>
                                                    </div>
                                                    <span class="badge bg-danger"><?=$skill['skill_level']?>%</span>
                                                </td>
                                                <td>
                                                    <a href="../include/deleteskill.php?id=<?=$skill['id']?>">Delete</a>
                                                </td>
                                            </tr>
                                            <?php
                                        $c++;
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Form Skill -->
                            <form role="form" action="../include/admin.php" method="post">
                                <div class="card-body">
                                    <div class="form-group col-6">
                                        <label>Skill Name</label>
                                        <input type="text" class="form-control" name="skillname">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Skill Level</label>
                                        <input type="range" min="1" max="100" class="form-control" name="skilllevel">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="add-skill" class="btn btn-primary">Add Skill</button>
                                </div>
                            </form>
                            <!-- Form Skill -->
                        </div>
                        <!-- Update Skill -->
                        <!-- Update Personal Info -->
                        <div class="card card-primary col-lg-12">
                            <div class="card-header">
                                <h3 class="card-title">Manage Personal Info</h3>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Personal Info</h3>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Label</th>
                                                <th>Value</th>
                                                <th style="width: 40px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $q = "SELECT * from personal_info";
                                            $r=mysqli_query($db,$q);
                                            $c =1;
                                            while($pi=mysqli_fetch_array($r)){
                                            ?>
                                            <tr>
                                                <td><?=$c?></td>
                                                <td><?=$pi['label']?></td>
                                                <td><?=$pi['value']?></td>
                                                <td>
                                                    <a href="../include/deletepi.php?id=<?=$pi['id']?>">Delete</a>
                                                </td>
                                            </tr>
                                            <?php
                                            $c++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Form Personal Info -->
                            <form role="form" action="../include/admin.php" method="post">
                                <div class="card-body">
                                    <div class="form-group col-6">
                                        <label>Label Name</label>
                                        <input type="text" class="form-control" name="label">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Label Value</label>
                                        <input type="text" class="form-control" name="value">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="add-pi" class="btn btn-primary">Add Personal
                                        Info</button>
                                </div>
                            </form>
                            <!-- Form Personal Info -->
                        </div>
                        <!-- Update Personal Info -->
                        <?php
                        } else if(isset($_GET['resumesetting'])){
                        ?>
                        <!-- Update Resume -->
                        <div class="card card-primary col-lg-12">
                            <div class="card-header">
                                <h3 class="card-title">Manage Resume</h3>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Education & Work</h3>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Type</th>
                                                <th>Title</th>
                                                <th>Time</th>
                                                <th>Institute/Company</th>
                                                <th>About</th>
                                                <th style="width: 40px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $q = "SELECT * from resume";
                                            $r=mysqli_query($db,$q);
                                            $c =1;
                                            while($pi=mysqli_fetch_array($r)){
                                            ?>
                                            <tr>
                                                <td><?=$c?></td>
                                                <td><?=$pi['type']?></td>
                                                <td><?=$pi['title']?></td>
                                                <td><?=$pi['time']?></td>
                                                <td><?=$pi['org']?></td>
                                                <td><?=$pi['about_exp']?></td>
                                                <td>
                                                    <a href="../include/deleteresume.php?id=<?=$pi['id']?>">Delete</a>
                                                </td>
                                            </tr>
                                            <?php
                                            $c++;
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Form Resume -->
                            <form role="form" action="../include/admin.php" method="post">
                                <div class="card-body">
                                    <div class="form-group col-6">
                                        <label>Select Type</label><br>
                                        <select name="type" class="form-control">
                                            <option value="e">Education</option>
                                            <option value="p">Professional</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Institute/Company</label>
                                        <input type="text" class="form-control" name="org">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Time</label>
                                        <input type="text" class="form-control" name="time">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>About</label>
                                        <input type="text" class="form-control" name="about">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="add-resume" class="btn btn-primary">Add Details</button>
                                </div>
                            </form>
                            <!-- Form Resume -->
                        </div>
                        <!-- Update Resume -->
                        <?php
                        }else if(isset($_GET['portfoliosetting'])){
                        ?>
                        <!-- Update Portfolio -->
                        <div class="card card-primary col-lg-12">
                            <div class="card-header">
                                <h3 class="card-title">Manage Portfolio</h3>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Your Projects</h3>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Project Type</th>
                                                <th>Project Image</th>
                                                <th>Project Name</th>
                                                <th>Project Link</th>
                                                <th style="width: 40px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $q = "SELECT * from portfolio";
                                            $r=mysqli_query($db,$q);
                                            $c =1;
                                            while($portfolio=mysqli_fetch_array($r)){
                                            ?>
                                            <tr>
                                                <td><?=$c?></td>
                                                <td><?=$portfolio['project_type']?></td>
                                                <td><img src="../assets/img/portfolio/<?=$portfolio['project_pic']?>"
                                                        style="width:150px" height="150px" /></td>
                                                <td><?=$portfolio['project_name']?></td>
                                                <td><a href="<?=$portfolio['project_link']?>" target="_blank">Open
                                                        Link</a></td>
                                                <td>
                                                    <a
                                                        href="../include/deleteportfolio.php?id=<?=$portfolio['id']?>">Delete</a>
                                                </td>
                                            </tr>
                                            <?php
                                            $c++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Form Portfolio -->
                            <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group col-6">
                                        <label>Select Type</label><br>
                                        <select name="type" class="form-control">
                                            <option value="Portrait">Portrait</option>
                                            <option value="Sing">Sing</option>
                                            <option value="Visual">Visual</option>
                                            <option value="Dance">Dance</option>
                                            <option value="Model">Model</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Project Image</label>
                                        <input type="file" class="form-control" name="project_pic">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Project Name</label>
                                        <input type="text" class="form-control" name="project_name">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Project Link</label>
                                        <input type="text" class="form-control" name="project_link">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="add-project" class="btn btn-primary">Add
                                        Project</button>
                                </div>
                            </form>
                            <!-- Form Portfolio -->
                        </div>
                        <!-- Update Portfolio -->
                        <?php
                        }elseif(isset($_GET['contactsetting'])){
                        ?>
                        <!-- Update Contact -->
                        <div class="card card-primary col-lg-12">
                            <div class="card-header">
                                <h3 class="card-title">Update Contact Details</h3>
                            </div>
                            <form role="form" action="../include/admin.php" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address"
                                            value="<?=$user_data['address']?>" placeholder="Enter address">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email"
                                            value="<?=$user_data['email']?>" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" class="form-control" name="mobile"
                                            value="<?=$user_data['mobile']?>" placeholder="Enter mobile">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="update-contact" class="btn btn-primary">Save
                                        Changes</button>
                                </div>
                            </form>
                        </div>
                        <!-- Update Social Media -->
                        <div class="card card-primary col-lg-12">
                            <div class="card-header">
                                <h3 class="card-title">Update Social Media Details</h3>
                            </div>
                            <!-- Form Social Media -->
                            <form role="form" action="../include/admin.php" method="post">
                                <div class="card-body">
                                    <!-- Twitter -->
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="text" class="form-control" name="twitter"
                                            value="<?=$user_data['twitter']?>" placeholder="Enter username">
                                    </div>
                                    <!-- Twitter -->
                                    <!-- Facebook -->
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" class="form-control" name="facebook"
                                            value="<?=$user_data['facebook']?>" placeholder="Enter Username">
                                    </div>
                                    <!-- Facebook -->
                                    <!-- Instagram -->
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" class="form-control" name="instagram"
                                            value="<?=$user_data['instagram']?>" placeholder="Enter username">
                                    </div>
                                    <!-- Instagram -->
                                    <!-- Skype -->
                                    <div class="form-group">
                                        <label>Skype</label>
                                        <input type="text" class="form-control" name="skype"
                                            value="<?=$user_data['skype']?>" placeholder="Enter username">
                                    </div>
                                    <!-- Skype -->
                                    <!-- Linkedin -->
                                    <div class="form-group">
                                        <label>Linkedin</label>
                                        <input type="text" class="form-control" name="linkedin"
                                            value="<?=$user_data['linkedin']?>" placeholder="Enter username">
                                    </div>
                                    <!-- Linkedin -->
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="update-socialmedia" class="btn btn-primary">Save
                                        Changes</button>
                                </div>
                            </form>
                            <!-- Form Social Media -->
                        </div>
                        <!-- Update Social Media -->
                        <?php
                        } else if(isset($_GET['changebackground'])){
                        ?>
                        <!-- Update Background -->
                        <div class="card card-primary col-lg-12">
                            <div class="card-header">
                                <h3 class="card-title">Change Site Background</h3>
                            </div>
                            <br>
                            <!-- Form Change Background -->
                            <img src="../assets/img/<?=$user_data['background_img']?>" class="col-6">
                            <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Choose Background Image</label>
                                        <input type="file" class="form-control" name="background">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="update-background" class="btn btn-primary">Update
                                        Background</button>
                                </div>
                            </form>
                            <!-- Form Change Background -->
                        </div>
                        <!-- Update Background -->
                        <?php
                        }else if(isset($_GET['seosetting'])){
                        ?>
                        <!-- Update SEO -->
                        <div class="card card-primary col-lg-12">
                            <div class="card-header">
                                <h3 class="card-title">Update SEO</h3>
                            </div>
                            <br>
                            <!-- Form SEO -->
                            <img src="../assets/img/<?=$user_data['siteicon']?>" class="col-2">
                            <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Siteicon</label>
                                        <input type="file" class="form-control" name="siteicon">
                                    </div>
                                    <div class="form-group">
                                        <label>Page Title</label>
                                        <input type="text" class="form-control" name="page_title"
                                            value="<?=$user_data['page_title']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Keywords (separte with ,)</label>
                                        <input type="text" class="form-control" name="keyword"
                                            value="<?=$user_data['keywords']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control" name="description"
                                            value="<?=$user_data['description']?>">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="update-seo" class="btn btn-primary">Save
                                        Changes</button>
                                </div>
                            </form>
                            <!-- Form SEO -->
                        </div>
                        <!-- Update SEO -->
                        <?php
                        }else if(isset($_GET['accountsetting'])){
                        ?>
                        <!-- Update Account -->
                        <div class="card card-primary col-lg-12">
                            <div class="card-header">
                                <h3 class="card-title">Update Account Setting</h3>
                            </div>
                            <br>
                            <!-- Form Account -->
                            <img src="../assets/img/<?=$user_data['admin_profile']?>" class="col-2">
                            <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Profile Picture</label>
                                        <input type="file" class="form-control" name="profilepic">
                                    </div>
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" name="fullname"
                                            value="<?=$user_data['fullname']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="Email"
                                            value="<?=$user_data['email']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control" name="password"
                                            value="<?=$user_data['password']?>">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="update-account" class="btn btn-primary">Update
                                        Account</button>
                                </div>
                            </form>
                            <!-- Form Account -->
                        </div>
                        <!-- Update Account -->
                        <?php
                        } else {
                        ?>
                        <form method="post" action="../include/admin.php">
                            <!-- Switch Home -->
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input type="checkbox" name="home" class="custom-control-input" id="customSwitch1" <?php
                                if($user_data['home_section']){
                                echo "checked";
                                }
                                ?>>
                                <label class="custom-control-label" for="customSwitch1">Home Section</label>
                            </div>
                            <!-- Switch Home -->
                            <!-- Switch About -->
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input type="checkbox" name="about" class="custom-control-input" id="customSwitch2" <?php
                                if($user_data['about_section']){
                                echo "checked";
                                }
                                ?>>
                                <label class="custom-control-label" for="customSwitch2">About Section</label>
                            </div>
                            <!-- Switch About -->
                            <!-- Switch Resume -->
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input type="checkbox" name="resume" class="custom-control-input" id="customSwitch3" <?php
                                if($user_data['resume_section']){
                                echo "checked";
                                }
                                ?>>
                                <label class="custom-control-label" for="customSwitch3">Resume Section</label>
                            </div>
                            <!-- Switch Resume -->
                            <!-- Switch Portfolio -->
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input type="checkbox" name="portfolio" class="custom-control-input" id="customSwitch4" <?php
                                if($user_data['portfolio_section']){
                                echo "checked";
                                }
                                ?>>
                                <label class="custom-control-label" for="customSwitch4">Portfolio Section</label>
                            </div>
                            <!-- Switch Portfolio -->
                            <!-- Switch Contact -->
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input type="checkbox" name="contact" class="custom-control-input" id="customSwitch5" <?php
                                if($user_data['contact_section']){
                                echo "checked";
                                }
                                ?>>
                                <label class="custom-control-label" for="customSwitch5">Contact Section</label>
                            </div>
                            <!-- Switch Contact -->
                            <input type="submit" class="btn btn-sm btn-primary" name="update-section"
                                value="Save Changes">
                        </form>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <strong>Copyright &copy; 2021 <a href="http://adminlte.io">Chou Tzuyu</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.5
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark"></aside>
        <!-- Control Sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>

</html>