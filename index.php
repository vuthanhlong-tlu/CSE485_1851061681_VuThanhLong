<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LongThanhVuCV</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/ba1.jpg" rel="icon">
  <link href="assets/img/ba1.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume - v2.2.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav class="nav-menu">
      <ul>
        <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Trang Chủ</span></a></li>
        <li><a href="#about"><i class="bx bx-user"></i> <span>Thông tin</span></a></li>
        <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Sơ yếu lí lịch</span></a></li>
        <li class="login.php"><a href="login.php"><i class="bx bx-server"></i> <span>Quản Trị</span></a></li>
        <li><a href="#contact"><i class="bx bx-envelope"></i> <span>Liên Hệ</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Long Thanh Vu</h1>
      <p>Tôi là <span class="typed" data-typed-items="Sinh Viên, Sinh Viên"></span></p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Thông tin cơ bản</h2>
          <p>Dưới đây là 1 số thông tin cơ bản về tôi.</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/ba.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Sinh Viên &amp; Người Chỉnh Sửa Ảnh</h3>
            <p class="font-italic">
             
            </p>
            <div class="row">
              <div class="col-lg-6">
              <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT ten, ngaysinh, diachi, email, sdt FROM thongtincanhan WHERE id='1'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "-Họ và Tên: " . $row["ten"]."<br>";
                            echo "-Ngày Sinh: " . $row["ngaysinh"]."<br>";
                            echo "-Địa Chỉ: " . $row["diachi"]."<br>";
                            echo "-Email: " . $row["email"]."<br>";
                            echo "-Số : " . $row["sdt"]."<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                     
                   
                    ?>
                    <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT sothich, ghichu FROM sothich WHERE id='1'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "-Sở Thích : " . $row["sothich"]."-".$row["ghichu"]."<br>";
                          
                        }
                    } else {
                        echo "0 results";
                    }
                     
                   

                    ?>
                     <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT diemmanh FROM diemmanh WHERE id='1'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "-Điểm Mạnh : " . $row["diemmanh"]."<br>";
                          
                        }
                    } else {
                        echo "0 results";
                    }
                     
                   
                    ?>
                    
              
              
              </div>
              <div class="col-lg-6">
               
              </div>
            </div>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Đánh Giá</h2>
          <p>Một số đánh giá về khả năng của tôi.</p>
        </div>

        <div class="row">
       

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT ghichu FROM danhgia WHERE id='1'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["ghichu"]."<br>";
                         
                        }
                    } else {
                        echo "0 results";
                    }
                     
                   
                    ?>
              <span data-toggle="counter-up">22</span>
              
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT ghichu FROM danhgia WHERE id='2'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["ghichu"]."<br>";
                         
                        }
                    } else {
                        echo "0 results";
                    }
                     
                   
                    ?>
              <span data-toggle="counter-up">4</span>
             
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT ghichu FROM danhgia WHERE id='3'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["ghichu"]."<br>";
                         
                        }
                    } else {
                        echo "0 results";
                    }
                     
                   
                    ?>
              <span data-toggle="counter-up">2</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT ghichu FROM danhgia WHERE id='4'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["ghichu"]."<br>";
                         
                        }
                    } else {
                        echo "0 results";
                    }
                     
                   
                    ?>
              <span data-toggle="counter-up">15</span>
             
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kĩ Năng</h2>
          <p>Dưới đây là một số kĩ năng mềm mà tôi đã và đang học.</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">
          <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT kynang,ghichu FROM kynang WHERE id='1'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["kynang"].":". $row["ghichu"]."<br>";
                         
                        }
                    } else {
                        echo "0 results";
                    }
                     
                   
                    ?>

            <div class="progress">
           
           
              <span class="skill">HTML <i class="val">50%</i></span>
              
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT kynang,ghichu FROM kynang WHERE id='2'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["kynang"].":". $row["ghichu"]."<br>";
                         
                        }
                    } else {
                        echo "0 results";
                    }
                     
                   
                    ?>

            <div class="progress">
              <span class="skill">CSS <i class="val">30%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT kynang,ghichu FROM kynang WHERE id='3'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["kynang"].":". $row["ghichu"]."<br>";
                         
                        }
                    } else {
                        echo "0 results";
                    }
                     
                   
                    ?>
            <div class="progress">
              <span class="skill">JavaScript <i class="val">15%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
          <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT kynang,ghichu FROM kynang WHERE id='4'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["kynang"].":". $row["ghichu"]."<br>";
                         
                        }
                    } else {
                        echo "0 results";
                    }
                     
                   
                    ?>
            <div class="progress">
              <span class="skill">PHP <i class="val">40%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT kynang,ghichu FROM kynang WHERE id='5'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["kynang"].":". $row["ghichu"]."<br>";
                         
                        }
                    } else {
                        echo "0 results";
                    }
                     
                   
                    ?>
            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">10%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT kynang,ghichu FROM kynang WHERE id='6'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["kynang"].":". $row["ghichu"]."<br>";
                         
                        }
                    } else {
                        echo "0 results";
                    }
                     
                   
                    ?>
            <div class="progress">
              <span class="skill">Photoshop <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sơ yếu lí lịch</h2>
          <p>Tôi là một cậu bé nhà quê đầy tham vọng .</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Tóm Tắt</h3>
            <div class="resume-item pb-0">
              <h4>VTL</h4>
              <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT truoc18,sau18 FROM tomtat WHERE id='1'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "- " . $row["truoc18"]."<br>";
                            echo "." . $row["sau18"]."<br>";
                           
                        }
                    } else {
                        echo "0 results";
                    }
                     
                   
                    ?>
              <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT ten,diachi,email,sdt,website FROM truong WHERE id='1'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "-Tên trường: " . $row["ten"]."<br>";
                            echo "-Địa Chỉ: " . $row["diachi"]."<br>";
                            echo "-Email: " . $row["email"]."<br>";
                            echo "-Số Điện Thoại: " . $row["sdt"]."<br>";
                            echo "-Website: " . $row["website"]."<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                     
                   
                    ?>
            </div>

            <h3 class="resume-title">Học Vấn</h3>
            <div class="resume-item">
              <h4>Đại Học</h4>
              <h5>2018 - Hiện Tại</h5>
              <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT tentruong, tenkhoa, tenlop, ngayvao, ngayra, chuthich FROM hocvan WHERE id='1'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["tentruong"]."<br>";
                            echo "-Khoa: " . $row["tenkhoa"]."<br>";
                            echo "-Lớp: " . $row["tenlop"]."<br>";
                            echo "-Ngày vào: " . $row["ngayvao"]."<br>";
                            echo "-Ngày ra:" . $row["ngayra"]."<br>";
                            echo "-" . $row["chuthich"]."<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                     
                   
                    ?>
              
            </div>
            <div class="resume-item">
              <h4>Trung Học Phổ Thông</h4>
              <h5>2010 - 2016</h5>
              <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT tentruong, tenkhoa, tenlop, ngayvao, ngayra, chuthich FROM hocvan WHERE id='2'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["tentruong"]."<br>";
                            echo "-Khoa: " . $row["tenkhoa"]."<br>";
                            echo "-Lớp: " . $row["tenlop"]."<br>";
                            echo "-Ngày vào: " . $row["ngayvao"]."<br>";
                            echo "-Ngày ra:" . $row["ngayra"]."<br>";
                            echo "-" . $row["chuthich"]."<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                     
                   
                    ?>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Kinh Nghiệm</h3>
            <div class="resume-item">
              <h4>Kinh nghiệm</h4>
              <h5>2018-Hiện Tại </h5>
              <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT congviec,ghichu FROM kinhnghiem WHERE id='1'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["congviec"]."<br>";
                            echo "-" . $row["ghichu"]."<br>";
                         
                        }
                    } else {
                        echo "0 results";
                    }
                     
                   
                    ?>
              <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT congviec,ghichu FROM kinhnghiem WHERE id='2'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["congviec"]."<br>";
                            echo "-" . $row["ghichu"]."<br>";
                         
                        }
                    } else {
                        echo "0 results";
                    }
                     
                   
                    ?>
              </ul>
            </div>
           
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    
   

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Brandon Johnson</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>