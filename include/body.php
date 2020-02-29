                                        <?php 
                                            $id = $_SESSION['id'];
                                            $sql  = "SELECT * FROM users WHERE id = {$id} ";
                                            $res = mysqli_query($connection,$sql);
                            
                                            while($row = mysqli_fetch_assoc($res)){
                                         

                                         ?>
<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../../images/<?php echo $row['image'];?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $row['name']," ",$row['lastname'];?></div>
                    <div class="email">ID NUMBER: <?php echo $row['identitynumber'];?></div>
                    <?php } ?>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="Profile.php"><i class="material-icons">person</i>Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
       <?php 
            if ($_SESSION['role'] == 'Dean' ) {
        ?>
                    <li>
                        <a href="http://localhost/tes/pages/dean/dean.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
        <?php 
           }
        ?>
        <?php 
            if ($_SESSION['role'] == 'Dean' ) {
        ?>
                    <li>
                        <a href="http://localhost/tes/pages/dean/information_management.php">
                            <i class="material-icons">home</i>
                            <span>Information management</span>
                        </a>
                    </li>
        <?php 
           }
        ?>
        <?php 
            if ($_SESSION['role'] == 'Dean' || $_SESSION['role'] == 'Teacher' || $_SESSION['role'] == 'Chair Person' ) {
        ?>
                    <li>
                        <a href="http://localhost/tes/pages/dean/Clearance.php">
                            <i class="material-icons">home</i>
                            <span>Clearance</span>
                        </a>
                    </li>
        <?php 
           }
        ?>
         <?php 
            if ($_SESSION['role'] == 'Teacher') {
        ?>
                    <li>
                        <a href="http://localhost/tes/pages/Teacher/teacher_subject.php?id=<?php echo $_SESSION['identitynumber'] ?>">
                            <i class="material-icons">home</i>
                            <span>Add Subject</span>
                        </a>
                    </li>
        <?php 
           }
        ?>
                    <li>
                        <a href="http://localhost/tes/pages/dean/Calendar.php">
                            <i class="material-icons">home</i>
                            <span>Calendar</span>
                        </a>
                    </li>
         <?php 
            if ($_SESSION['role'] == 'Student') {
        ?>
                    <li>
                        <a href="http://localhost/tes/pages/student/student_subject.php?id=<?php echo $_SESSION['identitynumber'] ?>">
                            <i class="material-icons">home</i>
                            <span>Add Subject</span>
                        </a>
                    </li>
        <?php 
           }
        ?>
        <?php 
            if ($_SESSION['role'] == 'Dean' ) {
        ?>
                    <li <?php 
                           // Program to display complete URL 
                           
                           $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] 
                                           === 'active' ? "https" : "http") . "://" . 
                                   $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
                           
                           $active = 'http://localhost/tes/pages/dean/Question_Categories.php';
                           $active2 = 'http://localhost/tes/pages/dean/View_Question.php';
                           // Display the complete URL 
                           
                           
                           
                           if ($link === $active || $link === $active2) {
                               ?>
                               class="active"
                               <?php
                           }else{
                           ?>
                               class=""
                               <?php
                           }
                            ?>
                                     >
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span>Manage Questionaire</span>
                        </a>
                        <ul class="ml-menu">
                            <li <?php 
                                    // Program to display complete URL 
                                    
                                    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] 
                                                    === 'active' ? "https" : "http") . "://" . 
                                            $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
                                    
                                    $active = 'http://localhost/tes/pages/dean/Question_Categories.php';
                                    // Display the complete URL 
                                    
                                    
                                    
                                    if ($link === $active) {
                                        ?>
                                        class="active"
                                        <?php
                                    }else{
                                    ?>
                                        class=""
                                        <?php
                                    }
                                     ?>
                                     >
                                <a href="Question_Categories.php">Question Categories</a>
                            </li>
                            <li <?php 
                                    // Program to display complete URL 
                                    
                                    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] 
                                                    === 'active' ? "https" : "http") . "://" . 
                                            $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
                                    
                                    $active = 'http://localhost/tes/pages/dean/View_Question.php';
                                    // Display the complete URL 
                                    
                                    
                                    
                                    if ($link === $active) {
                                        ?>
                                        class="active"
                                        <?php
                                    }else{
                                    ?>
                                        class=""
                                        <?php
                                    }
                                     ?>
                                     >
                                <a href="View_Question.php">View Question</a>
                            </li>
                        </ul>
        <?php 
           }
        ?>
        <?php 
            if ($_SESSION['role'] == 'Dean' ) {
        ?>
                        <li>
                            <a href="http://localhost/tes/pages/dean/Session.php">
                                <i class="material-icons">home</i>
                                <span>Session</span>
                            </a>
                        </li>
         <?php 
           }
        ?>
        <?php 
            if ($_SESSION['role'] == 'Student' ) {
        ?>
                        <li>
                            <a href="http://localhost/tes/pages/student/Student_Session_Evaluate.php">
                                <i class="material-icons">home</i>
                                <span>Session</span>
                            </a>
                        </li>
         <?php 
           }
        ?>
        <?php 
            if ($_SESSION['role'] == 'Dean' ) {
        ?>
                        <li>
                            <a href="http://localhost/tes/pages/dean/report.php">
                                <i class="material-icons">home</i>
                                <span>Report</span>
                            </a>
                        </li>
        <?php 
           }
        ?>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
          <!--   <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div> -->
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li class="pull-right" style="list-style: none;"><a href="logout.php"> <button type="button" class="btn btn-danger waves-effect">Sign out</button></a></li>
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink" >
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                
            </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">