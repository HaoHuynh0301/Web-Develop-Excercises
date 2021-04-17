<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "music";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style type="text/css">
        .txt-content {
            white-space: nowrap;
            border: solid 0px;
            width: 500px;
            height: 18px;
            text-overflow: ellipsis;
            overflow: hidden;
        }
        .row-label {
            width: 100px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>Document</title>
</head>
<body>
    <div class="contaner">
        <div class="title"><h1><strong>DANH SÁCH BÀI VIẾT</strong></div><hr/>
        <div class="display">
        <?php
            $sql = "SELECT * FROM baiviet";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $ma_tgia = $row['ma_tgia'];
                    $ma_tloai = $row['ma_tloai'];
                    $sql_gettg = "SELECT * from tacgia where ma_tgia = '$ma_tgia'";
                    $sql_gettheloai = "SELECT * from theloai where ma_tloai = '$ma_tloai'";
                    $resultTenTgia = $conn -> query($sql_gettg);
                    $resultTheLoai = $conn -> query($sql_gettheloai);
                    echo "        
                        <table>
                            <tr >
                                <td class='row-label'>
                                    <p>Mã bài viết: </p>
                                    <p>Tiêu đề: </p>
                                    <p>Tác giả: </p>
                                    <p>Ngày viết: </p>
                                    <p>Bài hát: </p>
                                    <p>Thể loại: </p>
                                    <p>Tóm tắt: </p>
                                </td>
                                <td>
                                    <p>" . $row['ma_bviet'] . "</p>
                                    <p>" .$row['tieude'] . "</p>
                                    <p>" .$resultTenTgia->fetch_assoc()['ten_tgia']. "</p>
                                    <p>" . $row['ngayviet'] . "</p>
                                    <p>" . $resultTheLoai->fetch_assoc()['ten_tloai'] . "</p>
                                    <p>" . $row['ngayviet'] . "</p>
                                    <p class='txt-content'>" . $row['tomtat'] . "</p>
                                </td>
                            </tr>
                        </table><hr/>
                        ";
                        
                }
            } else {
                echo "0 results";
            }
        ?>

        </div>
    </div>
</body>
</html>