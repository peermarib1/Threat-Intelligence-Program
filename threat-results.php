
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Threat Intelligence Program</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">




  <style>
    
        body {
            background-image: linear-gradient(to right, #2195f2, #ff6e87);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .container-1 {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            /* width: 400px; */
            text-align: center;
        }

        .form-heading {
            font-size: 30px;
            margin-bottom: 20px;
            color: #fff;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #fff;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #15ffff;
            border-radius: 5px;
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        }

        .g-recaptcha {
            margin-bottom: 20px;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            background: #27ae60;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-primary:hover {
            background: #219f54;
        }

        .form-link {
            text-align: center;
        }

        .btn-success {
            padding: 10px 20px;
            background: #e74c3c;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .btn-success:hover {
            background: #c0392b;
        }
        .table-bordered {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        background-color: #fff;
    }

    .th, .td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    .th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .tr:hover {
        background-color: #f2f2f2;
    }
    table.table-bordered {
        width: 100% !important;
        border-collapse: collapse !important;
        margin-bottom: 20px !important;
        border: 1px solid #ddd !important;
        background-color: #fff !important;
    }

    table.table-bordered th,
    table.table-bordered td {
        border: 1px solid #ddd !important;
        padding: 8px !important;
        text-align: left !important;
    }

    table.table-bordered th {
        background-color: #f2f2f2 !important;
        font-weight: bold !important;
    }

    table.table-bordered tr:nth-child(even) {
        background-color: #f9f9f9 !important;
    }

    table.table-bordered tr:hover {
        background-color: #f2f2f2 !important;
    }
    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">GDC-Ganderbal</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
         
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#services">Our Services</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    


<br><br><br><br><br>
  <div class="container-1">
        <h2 class="form-heading">Safe Site Checker</h2>
        
        <?php
$showForm = true;
$apiKey = '260cacac039198e7f00744e8c2968445ee159b0a97242de1d4e5f039bb68cfb2';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $urlToCheck = $_POST['urlInput'];
    $apiEndpoint = 'https://www.virustotal.com/vtapi/v2/url/report';
    $params = array(
        'apikey' => $apiKey,
        'resource' => $urlToCheck
    );

    $requestURL = $apiEndpoint . '?' . http_build_query($params);
    $response = file_get_contents($requestURL);

    if ($response === false) {
        echo "<p>Error: Unable to fetch data right now</p>";
    } else {
        $decodedResponse = json_decode($response, true);

        if (isset($decodedResponse['positives'])) {
            $positives = $decodedResponse['positives'];
            $totalScans = $decodedResponse['total'];

            if ($positives > 0) {
                echo "<p style='color: red'><strong>$positives security vendor(s) flagged this URL as malicious.</strong></p>";
                $showForm = false;
            } else {
                echo "<p style='color: green'>No security vendors flagged this URL as malicious.</p>";
                $showForm = false;
            }
        } else {
            echo "<p>No security vendors flagged this URL as malicious <strong>$urlToCheck</strong>.</p>";
            $showForm = false;
        }
    }
}
?>

<?php if (!$showForm && isset($decodedResponse['positives'])): ?>
                <table class="table-bordered">
                    <!-- Table header -->
                    <thead>
                        <tr class="tr">
                            <th class="th">Scanner</th>
                            <th class="th">Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Table rows based on the response -->
                        <?php foreach ($decodedResponse['scans'] as $scanner => $result): ?>
                            <tr class="tr">
                                <td class="td"><?php echo $scanner; ?></td>
                                <td class="td">
                                    <?php
                                    if ($result['detected']) {
                                        echo "<span style='color:red;'>{$result['result']}</span>";
                                    } else {
                                        echo "<span style='color:green;'>Clean</span>";
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
      
        <br>
        <!-- <div class="form-link">
            <a href="register.html" class="btn btn-success">Generate Access Key</a>
        </div> -->
    </div>

    </main>
  

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
