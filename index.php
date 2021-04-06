<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="author" content="luongtrithanh" />
    <link href="/1711061849_LuongTriThanh_Lab1/site.css" rel="stylesheet" />
    <title>Xếp loại kết quả tuyển sinh_HaiDo</title>
</head>
<body>
    <div id="wrapper">
        <h2>Xếp loại tuyển sinh</h2>
        <form action="#" method="post">
            <div class="row">
                <div class="lbltitle">
                    <label>Điểm môn Toán</label>
                </div>
                <div class="lblinput">
                    <input type="number" name="Toan" value="<?php echo isset($_POST["Toan"]) ?
                    $_POST["Toan"] : "" ; ?> "/>
                </div>
            </div>
            <div class="row">
                <div class="lbltitle">
                    <label>Điểm môn Lý</label>
                </div>
                <div class="lblinput">
                    <input type="number" name="Ly" value="<?php echo isset($_POST["Ly"]) ?
                    $_POST["Ly"] : "" ; ?> "/>
                </div>
            </div>
            <div class="row">
                <div class="lbltitle">
                    <label>Điểm môn Hóa</label>
                </div>
                <div class="lblinput">
                    <input type="number" name="Hoa" value="<?php echo isset($_POST["Hoa"]) ?
                    $_POST["Hoa"] : "" ; ?> "/>
                </div>
            </div>
            <div class="row">
                    <div class="lbltitle">
                        <label>Chọn khu vực</label>
                    </div>
                    <div class="lblinput">
                        <select name="KhuVuc">
                            <option value="">--Chọn khu vực--</option>
                            <option value="1">Khu vực 1</option>
                            <option value="2">Khu vực 2</option>
                            <option value="3">Khu vực 3</option>
                            <option value="4" selected>Khu vực 4</option>
                            <option value="5">Khu vực 5</option>
                        </select>
                            
                    </div>
                </div>
            <div class="row">
                <div class="submit">
                    <input type="submit" name="btnsubmit" value="Xếp loại">
                </div>
            </div>
        </form>
        <form>
            <div id="result">
                <h2>Kết quả xếp loại</h2>
                <div class="row">
                    <div class="lbltitle">
                        <label>Tổng điểm</label>
                    </div>
                    <div class="lbloutput">
                        <?php
                            echo isset($_POST["btnsubmit"]) ? $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"]
                            : "" ;
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="lbltitle">
                        <label>Xếp loại</label>
                    </div>
                    <div class="lbloutput">
                        <?php
                            if (isset($_POST["btnsubmit"])) {
                                $TongDiem = $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"];
                                if($TongDiem >=24)
                                    echo "Giỏi";
                                else if($TongDiem >=21)
                                    echo "Khá";
                                else if($TongDiem >=24)
                                    echo "Trung bình";
                                else
                                echo "Yếu";
                            }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="lbltitle">
                    <label>Điểm ưu tiên</label>
                    </div>
                    <div class="lbloutput">
                        <?php
                            if (isset($_POST["btnsubmit"])) {
                                $DiemUuTien = empty($_POST["KhuVuc"]) ? 0 : $_POST["KhuVuc"];
                                switch ($DiemUuTien) {
                                    case 0:
                                    case 4:
                                    case 5:
                                        echo "0";
                                        break;
                                    case 1:
                                    case 2:
                                        echo "5";
                                        break;
                                    case 3:
                                        echo "3";
                                        break;
                                    default:
                                        echo "0";
                                        break;
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
