<?php
$hostname = "localhost"; // Hostname of the database server
$username = "mskim0344"; // Your database username
$password = "vip970205*"; // Your database password
$dbname = "mskim0344"; // Your database name

// Create a connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("서버접속실패이유 :  " . $conn->connect_error);
}

    $query = "SELECT * FROM `KMS_menu`";
    $result = $conn->query($query);


    //echo "총".$result->num_rows."개의 게시글이 있습니다.";
    
    // if ($result->num_rows > 0) {
    //     // while ($row = $result->fetch_assoc()) { // for, map
    //     //     // 한행 한행 
    //     //     echo "<li><a href=" . $row["me_link"] . " >" . $row["me_name"] . "</a></li>";
    //     // }
    //     foreach( $result as $row ){
    //         echo "<li><a href=" . $row["me_link"] . " >" . $row["me_name"] . "</a></li>";
    //     }
    // } else {
    //     echo "검색결과가 없습니다.";
    // }


    

$data = array(); 


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        //자바스크립트 map기능과 동일
        $data[] = array("link" => $row['me_link'], "text" => $row['me_name']);
        // key가 있는 array -> json화 할 준비를 이미 php에서 

        // 하나씩 값으로 옮겨가면서 필드를 옮겨서 담는다.
        // array안의 객체가 대상
        // [{A : "", Q:"" },...] -> 이런식으로 만들어주는 거임
    }
}



header('Content-Type: application/json');
//테이터의 타입을 정의해주는 거임 외부파일끼리 이렇게 통성명 해야함
echo json_encode(array("strong" => $data));
    
    // Close the connection when done
    $conn->close();
    ?>
  