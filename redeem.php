<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>

    <div class="row">
        <div class="row-cover">
            <div class="action_result_page">
                <div class="cover">
                    <form action="https://www.party8.my/a_coupon.php" method="post" name="checkredeem">
                        <div class="redeem_code">

                            <div class="title">Redeem Code!</div>
                            <div class="input-form">
                                <p class="note">
                                    Enter your product code below to redeem your reward
                                </p>
                                <div class="input-cover">
                                    <input name="redeemcode" type="text" class="input-field"
                                        placeholder="Enter your redeem code" required="">
                                </div>

                                <div class="input-other button">
                                    <input type="hidden" name="a" value="check_redeem">
                                    <input type="hidden" name="csrftoken"
                                        value="MTczMzg5MzA2NWM2NGJiMmVhNGFkMjk2MjEyMDkzNTAxZjAwOTE3NThmMDliY2RmOGZZanEwM0hTaXFZbG1hOHpCMUdxU0lORmlhQkEwWWdtTQ==">
                                    <input type="submit" class="submit" value="Continue">
                                </div>
                            </div>

                            <div class="howtouse-code">
                                <div class="title">Where to Find Your Code</div>
                                <p>Product code example: UUYY321-23-12345 or UUYY3212312345</p>
                                <div class="guideimage"><img src="images/redeemcode.png"></div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <?php include 'footer.php'; ?>


    <?php include 'page-script.php'; ?>

</body>

</html>