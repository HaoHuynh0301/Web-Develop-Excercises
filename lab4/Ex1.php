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

    if (isset($_POST['add'])) {
        if (!empty($_POST['tieude']) || !empty($_POST['ma_tgia']) || !empty($_POST['baihat']) || !empty($_POST['ma_tloai'])) {
            echo "Done";
        }
    }

    function getMaxValue($conn) {
        $sql = "SELECT MAX(ma_bviet) AS max from baiviet";
        $resGetMax = $conn->query($sql);
        if($resGetMax->num_rows > 0) {
            echo $resGetMax->fetch_assoc()['max'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">

        .form-addsong {
            margin-bottom: 30px;
        }
        .div-title {
            margin-bottom: 40px;
        }

        .text-note {
            display: inline-block;
        }

        .text-input {
            border: solid 1px;
            height: 20px;
            font-size: 15px;
        }

        .div-text-note {
            text-align: right;
        }

        .table-td {
            padding: 10px;
        }

        .btn-submit {
            width: 150px;
            font-size: 20px;
        }
    </style>
    <title>Add Song</title>
</head>
<body>
    <div class="container">
        <div class="div-title"><h1><strong>THÊM BÀI VIẾT</strong></h1></div><hr/>

        <div class="div-form">
            <form class="form-addsong" method="POST" action="Ex1.php">
                <table class="table-insert-form">
                    <tr>
                        <td class="table-td div-text-note"><label class="text-note" for="ma_bviet">Mã bài viết</label></td>
                        <td class="table-td div-text-input"><input class="text-input" value="<?php getMaxValue($conn) ?>" id="ma_bviet" name="ma_bviet" type="text" style="width: 75px;"></td>
                    </tr>

                    <tr>
                        <td class="table-td div-text-note"><label class="text-note" for="ma_bviet">Tiêu đề</label></td>
                        <td class="table-td div-text-input"><input class="text-input" id="ma_bviet" name="ma_bviet" type="text" style="width: 500px;"></td>
                    </tr>

                    <tr>
                        <td class="table-td div-text-note"><label class="text-note" for="ma_tgia">Mã tác giả</label></td>
                        <td class="table-td div-text-input"><input class="text-input" id="ma_tgia" name="ma_tgia" type="text" style="width: 75px;"></td>
                    </tr>

                    <tr>
                        <td class="table-td div-text-note"><label class="text-note" for="ngayviet">Ngày viết</label></td>
                        <td class="table-td div-text-input"><input class="text-input" id="ngayviet" name="ngayviet" type="text" style="width: 125px;"></td>
                    </tr>

                    <tr>
                        <td class="table-td div-text-note"><label class="text-note" for="baihat">Bài hát</label></td>
                        <td class="table-td div-text-input"><input class="text-input" id="baihat" name="baihat" type="text" style="width: 300px;"></td>
                    </tr>

                    <tr>
                        <td class="table-td div-text-note"><label class="text-note" for="ma_tloai">Mã thể loại</label></td>
                        <td class="table-td div-text-input"><input class="text-input" id="ma_tloai" name="ma_tloai" type="text" style="width: 75px;"></td>
                    </tr>

                    <tr>
                        <td class="table-td div-text-note"><label class="text-note" for="tomtat">Tóm tắt</label></td>
                        <td class="table-td div-text-input" style="padding-bottom: 0 auto;"><input class="text-input" id="tomtat" name="tomtat" type="text" style="width: 500px; height: 50px;"></td>
                    </tr>

                    <tr>
                        <td class="table-td div-text-note"></td>
                        <td class="table-td div-text-input" style="padding-bottom: 0 auto;"><input class="btn-submit" type="submit" value="Thêm bài viết" name="add"></td>
                    </tr>
                </table>
            </form>
            <hr/>
        </div>
    </div>
</body>
</html>