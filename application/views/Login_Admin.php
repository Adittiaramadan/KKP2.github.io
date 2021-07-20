    <?php echo $this->load->view('share/author', '', TRUE);?>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/reset.css">
    <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/style.css">
    <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/color.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="<?php echo site_url(); ?>assets/Gambar/polri.png">
<!-- <div class="content"> -->
<!-- <div class="main-register-wrap "> -->
    <!-- <div class="reg-overlay"></div> -->
    <?php echo $this->load->view('share/menu', '', TRUE);?>
    <div class="main-register-holder tabs-act">
        <div class="main-register fl-wrap ">
            <div class="main-register_title">Selamat Datang <span><strong>Aplikasi</strong> Pengaduan<strong>.</strong></span></div>
          <!--   <div class="close-reg"><i class="fal fa-times"></i></div> -->
            <ul class="tabs-menu fl-wrap no-list-style">
                <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
            </ul>
            <!--tabs -->
            <div class="tabs-container">
                <div class="tab">
                    <!--tab -->
                    <div  class="tab-content first-tab">
                        <div class="custom-form">
                             <form class="login-form" method="post" action="<?php echo site_url(); ?>Halaman_Admin/proses_login">
                                <label>Username or Email Address <span>*</span> </label>
                                <input name="username" type="text"   onClick="this.select()" value="">
                                <label >Password <span>*</span> </label>
                                <input name="password" type="password"   onClick="this.select()" value="" >
                                <button type="submit"  class="btn float-btn color2-bg"> Log In <i class="fas fa-caret-right"></i></button>
                                <div class="clearfix"></div>

                            </form>

                        </div>
                    </div>
                    <!--tab end -->

                </div>
                <!--tabs end -->
            </div>
        </div>
    </div>
<!-- </div> -->
<!-- </div>
 -->