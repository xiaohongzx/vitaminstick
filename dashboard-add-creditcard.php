<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>

    <div class="row">
        <div class="dashboard">
            <div class="dashcover">
                <?php include 'dashboard-menu.php'; ?>
                <div class="content">
                    <div class="account">
                        <div class="title">Add Card Credit</div>
                        <div class="form">
                            <div class="row">
                                <div>Name</div>
                                <input type="text" id="chkcard_name" class="input-field" placeholder="Card holder Name"
                                    required />
                            </div>
                            <div class="row">
                                <div>Card Number</div>
                                <input type="text" id="chkcard_number" class="input-field"
                                    placeholder="Credit Card Number" required />
                            </div>
                            <div class="row">
                                <div>Expired Date (MM/YY)</div>
                                <input type="text" id="expiry-date" maxlength="5" placeholder="MM/YY"
                                    class="input-field" required />
                                <div id="error-message" class="error"></div>
                            </div>
                            <div class="row">
                                <div>CVV</div>
                                <input type="text" id="chkcard_cvv" class="input-field" placeholder="3-digit CVV"
                                    required />
                            </div>

                            <div class="clear-row"></div>
                        </div>
                        <div class="btn">
                            <a href="#">Add Card</a>
                        </div>
                    </div>
                </div>
                <div class="clear-row"></div>
            </div>
        </div>
    </div>

    <script>
    function checkccinfo() {
        var card_name = document.getElementById("card_name").value;
        var card_number = document.getElementById("card_number").value;
        var card_expired = document.getElementById("card_expired").value;
        var card_cvv = document.getElementById("card_cvv").value;

        if (card_name == "" || card_number == "" || card_expired == "" || card_cvv == "") {
            alert("Credit Card info not complete. Please insert again");
        } else {
            document.form1.submit();
        }
    }

    $("#chkcard_name").change(function() {
        var card_name = $(this).val();
        document.getElementById("card_name").value = card_name;
    });
    $("#chkcard_cvv").change(function() {
        var card_cvv = $(this).val();
        document.getElementById("card_cvv").value = card_cvv;

    });
    $("#expiry-date").change(function() {
        var card_expired = $(this).val();
        document.getElementById("card_expired").value = card_expired;

    });

    $("#chkcard_number").change(function() {
        var number = $(this).val();
        let multiplier = "2121212121212121"; // One more character added...
        let multipliedNumber;
        let sum = 0 // Initialise it as a number.

        if (number.length != 16) {
            $("#error-message2")
                .text("Please enter a Credit Card number that is 16 digits in length.")
                .css("visibility", "visible");
            $(this).focus();
            return false;
        } else {
            for (count = 0; count < number.length; count++) { // Include last digit in loop
                multipliedNumber = number[count] * multiplier[count];
                if (multipliedNumber > 9) {
                    // Use arithmetic to add the two digits
                    multipliedNumber = multipliedNumber % 10 + Math.floor(multipliedNumber / 10);
                }
                sum += multipliedNumber;
            }
            let check = sum % 10; // Simpler now because all digits were processed
            if (check == 0) { // Sum is multiple of 10
                $("#error-message2").css("visibility", "hidden"); // Hide error on input
                document.getElementById("card_number").value = number;
                return true;
            } else {
                $("#error-message2")
                    .text(number + " is not a valid Credit Card number.")
                    .css("visibility", "visible");
                $(this).focus();
                return false;
            }
        }
    });
    // script.js
    $(document).ready(function() {









        $("#expiry-date").on("input", function(e) {
            let input = $(this).val();

            // Automatically add the slash after the month
            if (input.length === 2 && !input.includes("/")) {
                $(this).val(input + "/");
            }

            // Allow deleting the slash with backspace
            if (
                e.originalEvent.inputType === "deleteContentBackward" &&
                input.length === 3 &&
                input.includes("/")
            ) {
                $(this).val(input.slice(0, 2)); // Remove the slash if it's the third character
            }

            $("#error-message").css("visibility", "hidden"); // Hide error on input
        });

        // Validate the input when it loses focus
        $("#expiry-date").on("blur", function() {
            let input = $(this).val();
            if (!validateExpiryDate(input)) {
                $("#error-message")
                    .text("Invalid expiration date.")
                    .css("visibility", "visible");
                $(this).focus();
            }
        });

        // Function to validate the expiry date
        function validateExpiryDate(date) {
            if (!/^\d{2}\/\d{2}$/.test(date)) {
                return false; // Invalid format
            }
            const [month, year] = date.split("/").map(Number);
            if (month < 1 || month > 12) {
                return false; // Invalid month
            }

            // Get current month and year
            const now = new Date();
            const currentMonth = now.getMonth() + 1;
            const currentYear = now.getFullYear() % 100; // Get last two digits of the year
            const maxYear = currentYear + 10; // Set maximum allowed year (10 years in the future)

            // Check if the date is in the past or too far in the future
            if (
                year < currentYear ||
                (year === currentYear && month < currentMonth) ||
                year > maxYear
            ) {
                return false; // Expired or exceeds the max year
            }

            return true; // Valid date
        }
    });
    </script>


    <?php include 'footer.php'; ?>


    <?php include 'page-script.php'; ?>

</body>

</html>