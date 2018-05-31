<?php
header("Content-Type: text/html; charset=UTF-8")  //UTF-8 설정
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="naver-site-verification" content="8c72b94136c7d4f2e7e07ce9f8307cbf10ca62a5"/>

    <title>SCCC Homepage</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />

</head>

<body>

  <!-- Navigation -->
  <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand page-scroll" href="#page-top">SCCC Home</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                  <li class="hidden">
                      <a href="#page-top"></a>
                  </li>
                  <li>
                      <a class="page-scroll" href="index.php#services">SCCC</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="index.php#activity">Activity</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="index.php#portfolio">Portfolio</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="index.php#team">Team</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="problem_crawler_for_SCCC_boj/src/sccc_solved_problem.html">Solved Problem</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="https://www.acmicpc.net/group/543">BOJ Group</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="index.php#contact">Contact</a>
                  </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
  </nav>

  <!-- Header -->
  <header>
      <div class="container">
          <div class="intro-text">
              <div class="intro-lead-in">Welcome to SCCC Homepage</div>
              <div class="intro-heading">We Study, We Solve</div>
              <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
          </div>
      </div>
  </header>

<div>
  <div class="text-center">
    SCCC 명단
  </div>

<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  //db연결
  $con=mysqli_connect("127.0.0.1","root","sccc2016!","db");

  // 연결 오류 발생 시 스크립트 종료
  if (mysqli_connect_errno($con)){
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  mysqli_set_charset($con,"utf8");

  // DB에서 데이터를 불러오기 위한 쿼리문 입니다. CASE문이 쓰여서 조금 어렵게 느껴지실 수도 있겠네요.
  // CASE 문법에 대해서 살펴보시고 넘어가시기 바랍니다. 저는 MSSQL과 문법이 달라 조금 헤멨습니다.
  /*
  $sql = "SELECT id,
          name,
          address
          FROM Person";
    $result = mysql_query( $sql ) or die (mysql_error());
*/
    // 쿼리문 전송
  echo "<table class='table table-striped'>
          <tr>
            <td width='20%' align='center'>학번</td>
            <td width='20%' align='center'>이름</td>
            <td width='10%' align='center'>전공</td>
            <td width='50%' align='center'>BOJ 핸들</td>
          </tr>";
  if ($result = mysqli_query($con, "SELECT left(number,4) as num,name,major,handle FROM users ", MYSQLI_USE_RESULT)) {
      // 레코드 출력
      while ($row = mysqli_fetch_object($result)) {
          echo '<tr> <td>'.$row->num.'</td> <td> '.$row->name.' </td> <td> '.$row->major.'</td> <td> <a href=https://www.acmicpc.net/user/'.$row->handle.'>'.$row->handle.'</a></td> </tr>';
      }

      // 메모리 정리
      mysqli_free_result($result);
  }
  echo "</table>";

  // 접속 종료
  mysqli_close($con);

?>
</div>

</body>
