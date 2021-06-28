<?php

if (isset($_POST['save'])) {
    $err = [];
    $showGender = [
        "male" => "Nam",
        "female" => "Nữ"
    ];
    if (empty($_POST['gender'])) {
        $err[] = "Không được để trống lựa chọn ô giới tính!";
    } else {
        $gender = $_POST['gender'];
        echo $showGender[$gender];
        // Kĩ thuật form radio mới này rất hay, thay vì sử dụng if để xét các trương hợp nam nữ thì ta tạo mảng rồi gán giá trị từng key cho nó cho mọi loại trường hợp.
    }
    if (empty($error)) {
        print_r($err);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Form</title>
</head>

<body>

    <h1>Radio Form</h1>
    <form action="" method="POSt">
        <label for="male">Nam</label>
        <input type="radio" id="male" name="gender" value="male"><br> <br>

        <label for="female">Nữ</label>
        <input type="radio" id="female" name="gender" value="female"><br><br>
        <input type="submit" name="save" value="save">

    </form>
</body>

</html>