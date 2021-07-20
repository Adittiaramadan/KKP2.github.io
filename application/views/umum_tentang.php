<!DOCTYPE HTML>
<html lang="en">

<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Tentang </title>
        <?php echo $this->load->view('share/author', '', TRUE);?>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/reset.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/style.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="<?php echo site_url(); ?>assets/Gambar/polri.png">
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="loader-inner">
                <div class="loader-inner-cirle"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- main start  -->
        <div id="main">
            <!-- header -->
              <?php echo $this->load->view('share/menu', '', TRUE);?>
            <!-- header end-->
            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">

                    <!--  section  -->
                    <section class="parallax-section single-par" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="<?php echo site_url(); ?>assets/umum/images/bg/18.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay op7"></div>
                        <div class="container">
                            <div class="section-title center-align big-title">
                                <h2><span>Polres Metro Tangerang Kota<BR>Informasi Beserta Pengaduan</span></h2>
                                <span class="section-separator"></span>

                            </div>
                        </div>
                        <div class="header-sec-link">
                            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
                        </div>
                    </section>
                    <!--  section  end-->
                    <section   id="sec1" data-scrollax-parent="true">
                        <div class="container">

                            <!--about-wrap -->
                            <div class="about-wrap">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="list-single-main-media fl-wrap" style="box-shadow: 0 9px 26px rgba(58, 87, 135, 0.2);">
                                            <img src="<?php echo site_url(); ?>assets/Gambar/2.jpg" class="respimg" alt="">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ab_text">
                                            <div class="ab_text-title fl-wrap">
                                                <h3>Polres Metro Tangerang Kota</h3>

                                            <span class="section-separator fl-sec-sep"></span>
                                            </div>
                                            <p>Visi & Misi<BR>
                                             Meningkatkan stabilitas Kamtibmas dengan didukung oleh seluruh komponen masyarakat. Menyelenggarakan penegakan hukum yang berkeadilan dan menjamin kepastian hukum dengan menjunjung tinggi hak asasi manusia
                                             
                                            </p>
                                            <BR>
                                            <div class="ab_text-title fl-wrap">
                                                <h3>Tugas & Fungsi </span></h3>

                                            <span class="section-separator fl-sec-sep"></span>
                                            <p>
                                            Peran dan Fungsi Kepolisian Negara Republik Indonesia. Kepolisian dinegara manapun selalu berada dalam sebuah dilema kepentingan kekuasaan yang selalu menjadi garda terdepan perbedaan pendapat antara kekuasaan dengan masyarakatnya. Sistem Kepolisian suatu Negara sangat dipengaruhi oleh Sistem Politik serta control social yang diterapkan. Berdasarkan Penetapan Pemerintah No. 11/S.D Kepolisian beralih status menjadi Jawatan tersendiri dibawah langsung Perdana Menteri. Ketetapan Pemerintah tersebut menjadikan kedudukan Polisi setingkat dengan Departemen dan kedudukan Kepala Kepolisian Negara Republik Indonesia (Kapolri) setingkat dengan Menteri.

                                            Dengan Ketetapan itu, Pemerintah mengharapkan Kepolisian dapat berkembang lebih baik dan merintis hubungan vertikal sampai ketingkat plaing kecil seperti pada wilayah kecamatan-kecamatan.
                                            Kedudukan kepolisian dalam sebuah Negara selalu menjadi kepentingan banyak pihak untuk duduk dan berada dibawah kekuasan. Pada masa pemerintahan Orde Baru Kepolisian RI dibenamkan dalam sebuah satuan Angkatan Bersenjata Republik Indonesia (ABRI) yang bergerak dalam pengaruh budaya militer. Militeristik begitu mengikat karena masa lebih dari 30 tahun kepolisian di balut dengan budaya militer tersebut. Tahun 1998 tuntutan masyarakat bgitu kuat dalam upaya membangun sebuah pemerintahan yang bersih dan mempunyai keberpihakan terhadap kepentingan masyarakat.
                                            
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- about-wrap end  -->

                        </div>
                    </section>
                    <!--section end-->

                </div>
                <!--content end-->
            </div>
            <!-- wrapper end-->
            <!--footer -->
              <?php echo $this->load->view('share/footer', '', TRUE);?>
            <!--footer end -->
            <!--register form -->
                <?php echo $this->load->view('share/login', '', TRUE);?>
            <!--register form end -->
            <a class="to-top"><i class="fas fa-caret-up"></i></a>
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="<?php echo site_url(); ?>assets/umum/js/jquery.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/umum/js/plugins.js"></script>
        <script src="<?php echo site_url(); ?>assets/umum/js/scripts.js"></script>
        <script src="<?php echo site_url(); ?>assets/umum/js/map-single.js"></script>
</html>
