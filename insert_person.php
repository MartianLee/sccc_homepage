<?php
header("Content-Type: text/html; charset=UTF-8")  //UTF-8 설정
?>
PHP START
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
  echo "<head>
        <style>
          table {
            width: 100%;
          }
          th {
              background-color: #4CAF50;
              color: white;
          }
          tr:nth-child(even) {background-color: #f2f2f2}
        </style>
        </head>
        <table id="table" border='1'>
          <th>
            <td width='20%' align='center'>ID</td>
            <td width='30%' align='center'>이름</td>
            <td width='50%' align='center'>주소</td>
          </th>";
  if ($result = mysqli_query($con, "SELECT id,name,address FROM Person ", MYSQLI_USE_RESULT)) {
      // 레코드 출력
      while ($row = mysqli_fetch_object($result)) {
          echo '<tr> <td>'.$row->id.'</td> <td> '.$row->name.' </td> <td> '.$row->address.'</td> </tr>';
      }

      // 메모리 정리
      mysqli_free_result($result);
  }
  echo "</table>";

  // 접속 종료
  mysqli_close($con);

?>

