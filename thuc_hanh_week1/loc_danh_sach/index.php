<?php
$customer_list = array(
    "1" => array("name" => "Mai Văn Vàng",
        "date" => "1983-07-11",
        "address" => "Hà Nội",
        "img" => "../list_of_customers/pictures/cat1.jpg"),
    "2" => array("name" => "Trần Đình Trọng",
        "date" => "1983-07-23",
        "address" => "Nam Định",
        "img" => "../list_of_customers/pictures/cat2.jpg"),
    "3" => array("name" => "Nguyễn Công Phượng",
        "date" => "1983-07-18",
        "address" => "Lào Cai",
        "img" => "../list_of_customers/pictures/cat3.jpg"),
    "4" => array("name" => "Phan Văn Đức",
        "date" => "1983-07-09",
        "address" => "Ninh Bình",
        "img" => "../list_of_customers/pictures/cat4.jpg"),
    "5" => array("name" => "Lê Bảo Bình",
        "date" => "1983-07-20",
        "address" => "Hải Phòng",
        "img" => "../list_of_customers/pictures/cat5.jpg"),
);

?>
<?php
function searchByDate($customers, $from_date, $to_date)
{
    if (empty($from_date) && empty($to_date)) {
        return $customers;
    }
    $filtered_customers = [];
    foreach ($customers as $customer) {
        if (!empty($from_date) && (strtotime($customer['date']) < strtotime($from_date)))
            continue;
        if (!empty($to_date) && (strtotime($customer['date']) > strtotime($to_date)))
            continue;
        $filtered_customers[] = $customer;
    }
    return $filtered_customers;
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of customers</title>
    <link type="text/css" rel="stylesheet" href="css.css">
</head>
<body>
<?php
$from_date = NULL;
$to_date = NULL;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from_date = $_POST["from"];
    $to_date = $_POST["to"];
}
$filtered_customers = searchByDate($customer_list, $from_date, $to_date);
?>
<form method="post">
    Từ: <input id="from" type="text" name="from" placeholder="yyyyy/mm/dd"
               value="<?php echo isset($from_date) ? $from_date : ''; ?>">
    Đến: <input id="to" type="text" name="to" placeholder="yyyy/mm/dd"
                value="<?php echo isset($to_date) ? $to_date : ''; ?>">
    <input type="submit" id="submit" value="Lọc">
</form>
<table border="0">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php if (count($filtered_customers) === 0): ?>
        <tr>
            <td colspan="5" class="message">Không tìm thấy khách hàng nào</td>
        </tr>
    <?php endif; ?>

    <?php foreach ($filtered_customers as $index => $customer): ?>
        <tr>
            <td><?php echo $index + 1; ?></td>
            <td><?php echo $customer['name']; ?></td>
            <td><?php echo $customer['date']; ?></td>
            <td><?php echo $customer['address']; ?></td>
            <td>
                <div class="profile"><img src="<?php echo $customer['img']; ?>"/></div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>