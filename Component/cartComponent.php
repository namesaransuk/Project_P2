<?php if (isset($_SESSION['id'])) { ?>
    <ul class="shopping-cart-container">
      <li class="shopping-cart user">
        <i class="fa fa-shopping-cart"></i>
        <a class="text-white" data-toggle="modal" data-target="#noti">คลิกเพื่อดูสินค้าในตะกร้า</a>
      </li>
    </ul>
  <?php } ?>