<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>

    <div class="row" style="background:#f9f9f9">
        <div class="row-cover">
            <div class="checkout">
                <div class="cover">
                    <div class="left">
                        <!--
                        <div class="emptycart">
                            <div class="image"><img src="images/emptycart.png"></div>
                            <p>Your cart is currently empty,<br>
                                we recommend you check out our featured products. </p>
                            <a href="product.php">Shop Now</a>
                        </div>
-->

                        <div class="shoppingcart">
                            <div class="title">My Cart (2)</div>
                            <div class="cart_list">
                                <div class="item">
                                    <div class="image"><img
                                            src="https://www.party8.my/images/product/a432a2a26fbd93b4074d37af4777e1ec.png">
                                    </div>
                                    <div class="info">
                                        <div class="name">Party8 Vitamin Stick - Watermelon Ice</div>
                                        <p>
                                            Watermelon Ice <br>RM60.00</p>
                                    </div>
                                    <div class="amount">
                                        <div class="amountcover">
                                            <span id="minus467">-</span>
                                            <input type="text" id="amount467" name="amount467" value="1">
                                            <span id="plus467">+</span>
                                        </div>
                                    </div>
                                    <div class="remove">
                                        <a href="https://www.party8.my/a_cart.php?a=removeItem&amp;cartId=467"
                                            onclick="return confirm('Are you sure you want to remove this product?')"><span
                                                class="material-symbols-rounded"> delete </span></a>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="image"><img
                                            src="https://www.party8.my/images/product/93ae90e0eb577531c7c5050371001c72.png">
                                    </div>
                                    <div class="info">
                                        <div class="name">Party8 Vitamin Stick - Pink Lemonade</div>
                                        <p>
                                            Pink Lemonade <br>RM60.00</p>
                                    </div>
                                    <div class="amount">
                                        <div class="amountcover">
                                            <span id="minus173">-</span>
                                            <input type="text" id="amount173" name="amount173" value="1">
                                            <span id="plus173">+</span>
                                        </div>
                                    </div>
                                    <div class="remove">
                                        <a href="https://www.party8.my/a_cart.php?a=removeItem&amp;cartId=173"
                                            onclick="return confirm('Are you sure you want to remove this product?')"><span
                                                class="material-symbols-rounded"> delete </span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="buttons">
                                <a href="product.php" class="continue">Continue Shopping</a>
                                <a href="https://www.party8.my/a_cart.php?a=clearCart"
                                    onclick="return confirm('Are you sure you want to clear this cart?')"
                                    id="emptycart">Empty Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="voucher" id="selectVoucher">
                            <div class="text">Voucher Apply :</div>
                            <div class="selected" id="voucher_show">None</div>
                        </div>
                        <div class="sumup">
                            <div>
                                <div>Sub Total</div>
                                <span id="subtotal_show">RM120.00</span>
                            </div>
                            <div>
                                <div>Discount</div>
                                <span id="discount_show">- RM0.00</span>
                            </div>
                            <div class="total">
                                <div>Total</div>
                                <span id="total_show">RM120.00</span>
                            </div>
                            <a href="#">Next</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-title left">You Might Like</div>
        </div>
        <div class="product_showcase">

            <div class="swiper mySwiper cartSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="box" style="background: linear-gradient(180deg, #FD664C 0%, #FF8671 100%);">
                            <div class="image"><img src="images/vitaminstick-watermelon.png"></div>
                            <p>Watermelon Ice</p>
                            <a href="#">Add to cart</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box" style="background: linear-gradient(180deg, #FABD24 0%, #EA95BB 100%);">
                            <div class="image"><img src="images/vitaminstick-lemonade.png"></div>
                            <p>Pink Lemonade</p>
                            <a href="#">Add to cart</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box" style="background: linear-gradient(180deg, #FD664C 0%, #FF8671 100%);">
                            <div class="image"><img src="images/vitaminstick-watermelon.png"></div>
                            <p>Watermelon Ice</p>
                            <a href="#">Add to cart</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box" style="background: linear-gradient(180deg, #FABD24 0%, #EA95BB 100%);">
                            <div class="image"><img src="images/vitaminstick-lemonade.png"></div>
                            <p>Pink Lemonade</p>
                            <a href="#">Add to cart</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box" style="background: linear-gradient(180deg, #FD664C 0%, #FF8671 100%);">
                            <div class="image"><img src="images/vitaminstick-watermelon.png"></div>
                            <p>Watermelon Ice</p>
                            <a href="#">Add to cart</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box" style="background: linear-gradient(180deg, #FABD24 0%, #EA95BB 100%);">
                            <div class="image"><img src="images/vitaminstick-lemonade.png"></div>
                            <p>Pink Lemonade</p>
                            <a href="#">Add to cart</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box" style="background: linear-gradient(180deg, #FD664C 0%, #FF8671 100%);">
                            <div class="image"><img src="images/vitaminstick-watermelon.png"></div>
                            <p>Watermelon Ice</p>
                            <a href="#">Add to cart</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box" style="background: linear-gradient(180deg, #FABD24 0%, #EA95BB 100%);">
                            <div class="image"><img src="images/vitaminstick-lemonade.png"></div>
                            <p>Pink Lemonade</p>
                            <a href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="default-popup" id="voucher-popup">
        <div class="closethis">
            <span class="material-symbols-rounded"> close </span>
        </div>
        <div class="content">
            <div class="title">Select Voucher</div>
            <div class="voucher">
                <div class="search">
                    <a href="https://www.party8.my/redeem.html" target="_blank">Add Voucher</a>
                </div>
                <div class="list">
                    <div class="empty">
                        You have no vouchers available. <br>Click <a href="https://www.party8.my//redeem">here</a> if
                        you have redeem code
                    </div>
                    <div class="box">
                        <div class="image"><b>%</b></div>
                        <div class="content">
                            <div class="main">
                                10.00% off
                            </div>
                            <div class="sub"><span id="coupon1">aO1729649890bs</span></div>
                            <div class="note">Valid till : 18 Mar 2024 - 31 Aug 2024</div>
                            <div class="category">For Hangover Recovery Aid Only</div>
                        </div>
                        <div class="action"><span>Expired</span></div>
                        <div class="bar"></div>
                    </div>
                    <div class="box">
                        <div class="image"><b>%</b></div>
                        <div class="content">
                            <div class="main">
                                10.00% off
                            </div>
                            <div class="sub"><span id="coupon1">aO1729649890bs</span></div>
                            <div class="note">Valid till : 18 Mar 2024 - 31 Aug 2024</div>
                            <div class="category">For Hangover Recovery Aid Only</div>
                        </div>
                        <div class="action"><span>Expired</span></div>
                        <div class="bar"></div>
                    </div>
                    <div class="box">
                        <div class="image"><b>%</b></div>
                        <div class="content">
                            <div class="main">
                                10.00% off
                            </div>
                            <div class="sub"><span id="coupon1">aO1729649890bs</span></div>
                            <div class="note">Valid till : 18 Mar 2024 - 31 Aug 2024</div>
                            <div class="category">For Hangover Recovery Aid Only</div>
                        </div>
                        <div class="action"><span>Expired</span></div>
                        <div class="bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include 'footer.php'; ?>


    <?php include 'page-script.php'; ?>

</body>

</html>