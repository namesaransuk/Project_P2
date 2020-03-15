<!-- <div class="table-wrapper">
                                <table class="table table-striped mb-0">

                                    <thead>
                                        <tr align="center">
                                            <th>รูปสินค้า</th>
                                            <th>ชื่อสินค้า</th>
                                            <th>จำนวน</th>
                                            <th width="20%">ราคา</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody> -->
<!-- <tr align="center">
                                                <td class="align-middle">
                                                    <img style="width:130px;" src="products/<?php echo $meResult['product_img_name']; ?>" border="0">
                                                </td>
                                                <td class="align-middle">
                                                    <div>
                                                    <?php echo $meResult['product_name']; ?>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="form-row">
                                                        <div class="col-sm-8 text-center">
                                                            <select type="text" class="ml-auto col-sm-9 browser-default custom-select" id="quantity<?php echo $meResult['product_code'] ?>" name="<?php echo $meResult['product_code'] ?>" OnChange="finalsum<?php echo $meResult['product_code']; ?>(); do_selectchange(this); sendPrice();">
                                                                <option selected disabled value="<?php echo $meResult['product_num']; ?>"><?php echo $meResult['product_num']; ?></option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                        </div>
                                                        <label class="col-sm-4 text-left col-form-label" for="">ชิ้น</label>
                                                    </div>

                                                    <input class="hide-on-screen" id="p_pond<?php echo $meResult['product_code']; ?>" name="p_pond" OnChange="finalsum<?php echo $meResult['product_code']; ?>();" value=<?php echo $meResult['product_pond'] ?>>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="form-row">
                                                        <div class="col-sm-8 text-center">
                                                            <input type="text" class="form-control col-sm-8 ml-auto text-center" name="<?php echo $meResult['product_code'] ?>" id="p_price<?php echo $meResult['product_code']; ?>" onclick="do_selectchange2(this)" value="<?php echo $meResult['product_price'] ?>" readonly>
                                                        </div>
                                                        <label class="col-sm-4 text-left col-form-label" for="">บาท</label>
                                                    </div>
                                                <td class="align-middle">
                                                    <a class="btn btn-info" href="php/deletecart.php?product_code=<?php echo $meResult['product_code']; ?>" onClick="return confirm('คุณต้องการลบข้อมูลที่เลือก ?')" role="submit">
                                                        <span class="glyphicon glyphicon-shopping-cart"></span>
                                                        ลบออกจากตะกร้า</a>
                                                </td>
                                            </tr> -->