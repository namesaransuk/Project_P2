<div class="modal fade right" id="noti" tabindex="-1" role="dialog" aria-labelledby="noti" aria-hidden="true">

  <!-- Add class .modal-frame and then add class .modal-top (or other classes from list above) to set a position to the modal -->
  <div class="modal-dialog modal-fluid modal-full-height modal-right modal-notify modal-info" role="document">

    <div class="modal-content">
      <div class="modal-body">
        <div class="row justify-content-center align-items-center">

          <?php
          include('php/connect.php');
          $sql = "SELECT * FROM products";
          $result = $conn->query($sql);
          $num = $result->rowCount();

          if ($num == 0) {
          ?>
            <div class="col">
              <h3 class="text-center my-auto">ไม่มีสินค้า</h3>
            </div>
          <?php } else {
            $sql = "SELECT * FROM products";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
          ?>
            <div class="table-wrapper">
              <!--Table-->
              <table class="table mb-0">

                <!--Table head-->
                <thead>
                  <tr align="center">
                    <th>รูปสินค้า</th>
                    <th>ชื่อสินค้า</th>
                    <th>จำนวน</th>
                    <th>ราคา</th>
                    <th>&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $total_price = 0;
                  while ($meResult = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $total_price = $total_price + $meResult['product_price'];
                  ?>
                    <tr align="center">
                      <td class="align-middle"><img style="width:80px;" src="products/<?php echo $meResult['product_img_name']; ?>" border="0"></td>
                      <td class="align-middle"><?php echo $meResult['product_name']; ?></td>
                      <td class="align-middle"><?php echo $meResult['product_num']; ?></td>
                      <td class="align-middle"><?php echo number_format($meResult['product_price']); ?>.-</td>
                      <td class="align-middle"></td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
                <!--Table body-->
              </table>
              <!--Table-->
              <hr>
              <h4 class="text-right mr-3">ยอดรวม : <?php echo number_format($total_price); ?> บาท</h4>
              <hr>
            </div>
          <?php } ?>
        </div>
      </div>
      <button type="button" class="btn peach-gradient" data-dismiss="modal" onclick="window.location.href='order1.php'">สั่งซื้อต่อ</button>
      <button type="button" class="btn purple-gradient" onclick="window.location.href='selectcart.php'">ตะกร้า</button>
    </div>

  </div>
</div>