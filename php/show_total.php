<?php
include('connect.php');

$sql = "SELECT * FROM products";
$stmt = $conn->query($sql);

$total = 0;
while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $total = $total + $result['product_price']
?>
    <tr>
        <td><?php $result['product_price'] ?></td>
    </tr>
<?php
}
echo number_format($total);


?>