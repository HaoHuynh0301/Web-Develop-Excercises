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

    $displayFlag = FALSE;

    if (isset($_POST['btn-search'])) {
        if (!empty($_POST['txt-search'])) {
            $displayFlag = TRUE;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style type="text/css">
        .text-input {
            width: 200px;
            height: 20px;
            border: solid 0.5px;
        }

        .btn-search {
            height: 20px;
        }
        
        .div-title {
            margin-bottom: 30px;
        }

        .form-search {
            margin-top: 10px;
        }

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
    <title>Lab3_Exercise 4</title>
</head>
<body>
    <div class="contaner">
        <div class="div-title"><h1><strong>DANH SÁCH BÀI VIẾT</strong></div><hr/>
        <form action="searching.php" method="POST" class="form-search">
            <input name="txt-search" type="text" class="text-input" value="<?php $_POST["txt-search"] ?>"/>
            <input name="btn-search" type="submit" class="btn-search" value="Tìm kiếm"/>
        </form>
        
        <div class="content">
            <?php
                if($displayFlag == TRUE) {
                    $arrKey = explode(" ", $_POST["txt-search"]);
                    $arrExist = array();
                    foreach ($arrKey as $key) {
                        $sql = "SELECT * FROM baiviet WHERE tieude LIKE '%$key%'";
                        $resSearching = $conn->query($sql);
                        if ($resSearching->num_rows > 0) {
                            while($row = $resSearching->fetch_assoc()) {
                                $ma_tgia = $row['ma_tgia'];
                                $ma_tloai = $row['ma_tloai'];
                                $sql_gettg = "SELECT * from tacgia where ma_tgia = '$ma_tgia'";
                                $sql_gettheloai = "SELECT * from theloai where ma_tloai = '$ma_tloai'";
                                $resultTenTgia = $conn -> query($sql_gettg);
                                $resultTheLoai = $conn -> query($sql_gettheloai);
                                echo "        
                                    <table>
                                        <tr>
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
                        }
                    }
                } 
            ?>
        </div>
    </div>
</body>
</html>