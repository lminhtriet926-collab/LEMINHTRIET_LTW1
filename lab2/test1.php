<?php
$menus = ["Trang chủ", "Tin tức", "Liên hệ", "Giới thiệu"];
$subjects = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];
$students = [
    $students =
        [
            "id" => "SV001",
            "name" => "Nguyễn Văn An",
            "gender" => "Nam",
            "class" => "CNTT1"
        ],
    [
        "id" => "SV002",
        "name" => "Trần Thị Bình",
        "gender" => "Nữ",
        "class" => "CNTT2"
    ],
    [
        "id" => "SV003",
        "name" => "Lê Văn Cường",
        "gender" => "Nam",
        "class" => "CNTT1"
    ],
    [
        "id" => "SV004",
        "name" => "Phạm Thị Dung",
        "gender" => "Nữ",
        "class" => "CNTT2"
    ]
];
$faculties = [
    "Công nghệ thông tin",
    "Quản trị kinh doanh",
    "Kế toán",
    "Ngôn ngữ Anh"
];
$classes = [
    "A1" => "CNTT1",
    "A2" => "CNTT2",
    "A3" => "CNTT3",
    "A4" => "CNTT4"
];
$genders = ["Nam", "Nữ", "Khác"];
$hobbies = [
    "LT" => "Lập trình",
    "DS" => "Đọc sách",
    "AN" => "Âm nhạc",
    "DL" => "Du lịch",
    "TT" => "Thể thao"
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav li {
            flex: 1;
            text-align: center;
        }

        nav a {
            text-decoration: none;
            display: block;
            background-color: blue;
            color: white;
            padding: 10px;
        }

        nav a:hover {
            background: red;
        }

        .s1 ul {
            margin-top: 20px;
            list-style: none;
            box-shadow: 0 0 10px gray;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            border-radius: 10px;
        }

        .s1 li {

            margin-bottom: 5px;
            border-left: 5px solid red;
            background-color: #0d6efd;
            padding: 10px;
            border-radius: 5px;
            transition: 0.2s;
        }

        .s1 h3 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;
        }

        .s1 li:hover {
            background-color: pink;
            transform: translateX(5px);
        }

        .s2 th,
        .s2 td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        .s2 table {
            border-collapse: collapse;
            width: 100%;

        }

        .s2 thead {
            background-color: blue;
            color: white;
        }

        .s2 tbody tr:nth-child(odd) {
            background-color: #0979e9;
        }

        .s2 {
            margin-top: 20px;
            box-shadow: 0 0 10px gray;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 5px;
            padding: 20px;
        }

        .s2 tbody tr:hover {
            background-color: #88b6e4;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <?php foreach ($menus as $item) { ?>
                <li>
                    <a href=""> <?= $item ?></a>
                </li>

            <?php } ?>
        </ul>
    </nav>
    <section class="s1">
        <ul>
            <h3>Danh sach ngon ngu su dung trong mon hoc</h3>
            <?php foreach ($subjects as $item) { ?>
                <li>
                    <?= $item ?>
                </li>
            <?php } ?>
        </ul>
    </section>
    <section class="s2">
        <h3> danh sach sinh vien</h3>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã sinh viên</th>
                    <th>Họ và tên</th>
                    <th>Giới tính</th>
                    <th>Lớp</th>
                </tr>
            </thead>



            <tbody>
                <?php foreach ($students as $index => $students) { ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $students["id"] ?></td>
                        <td><?= $students["name"] ?></td>
                        <td><?= $students["gender"] ?></td>
                        <td><?= $students["class"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </section>



    <section class="s3">
        <h2>ĐĂNG KÝ THÔNG TIN SINH VIÊN</h2>
        <from action="#" method="post">
            <div> <label for="hoten">Họ va tên</label>
                <input id="hoten" type="text">
            </div>
            <div> <label for="khoa">Khoa</label>
                <select name="khoa">
                    <?php foreach ($faculties as $facu) { ?>
                        <option id="khoa"><?= $facu ?></option>
                    <?php } ?>
                </select>
            </div>
            <div> <label for="lop">Lớp</label>
                <select name="lop">
                    <?php foreach ($classes as $clas => $classes) { ?>
                        <option value="<?= $clas ?>"><?= $classes ?>
                        </option>
                    <?php } ?>
                </select>
            </div><label >Giới tính</label>
            <?php foreach ($genders as $gender) {?>
            <label>
                <input type="radio">
                <?= $gender ?>
            </label>
             <?php } ?>
             <div> <label >Sở thích</label>
            
                    <?php foreach ($hobbies as $hob => $hobbies) { ?>
                    <label>
                        <input type="checkbox" name="hobbies[]" <?= $hob ?>>
                        <?= $hobbies ?>
                    </label>
                    <?php } ?>
                
            </div>
            <div>
                <input type="submit" name="submit" id="submit">
                <input type="reset" name="reset" id="reset">
            </div>
        </from>

    </section>
</body>

</html>