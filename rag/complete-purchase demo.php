<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Purchase</title>
</head>
<body>
    <section>
            <h2>Complete the spaces to process your shipment</h2>
            <div>
                <label for="names">Names</label>
                <input type="text" class="names" id="form-name" placeholder="Enter your name" required>

                <label for="email">E-mail</label>
                <input type="text" class="email" id="form-email" placeholder="Enter your email" required>

                <label for="phone">Cell Phone</label>
                <input type="text" class="phone" id="form-phone" placeholder="Enter you phone number">
                <div class="elements">
                    <label for="items">Select your products</label><br>

                    <input type="checkbox" id="items-gray">Gray Puffer 
                    <label for="itemsnumber">Number of elements</label>
                    <input type="number" id="items-number-gray">

                    <input type="checkbox" id="items-shearling">Shearling Jacket
                    <label for="itemsnumber">Number of elements</label>
                    <input type="number" id="items-number-shearling">

                    <input type="checkbox" id="items-black">Black Jacket 
                    <label for="itemsnumber">Number of elements</label>
                    <input type="number" id="items-number-black">

                    <input type="checkbox" id="items-purple">Purple Jacket 
                    <label for="itemsnumber">Number of elements</label>
                    <input type="number" id="items-number-purple">
                </div>
                <h3>Address</h3>
                <label for="line1">Line 1</label>
                <input type="text" class="address" id="form-line1" placeholder="Line 1 Address" required>
                
                <label for="line2">Line 2</label>
                <input type="text" class="address" id="form-line2" placeholder="Line 2 Address" required>

                <label for="paypal">PayPal Transaction ID</label>
                <input type="text" minlength="17" maxlength="17" class="ppid" id="form-paypalid" placeholder="Transacction ID IMPORTANT" required>
                
                <button value="Finish Purchase" class="submit" onclick="enviarcorreo()">

            </div>

    </section>
    <script>  
        function enviarcorreo(){
            var Email = $("#form-email").val();
            var CellPhone = $("#form-phone").val();
            var GrayPuffer = $("#items-gray").val();
            var GrayNumberOf = $("#items-number-gray").val();
            var ShearlingJacket = $("#items-shearling").val();
            var ShearlingNumberOf = $("#items-number-shearling").val();
            var BlackJacket = $("#items-black").val();
            var BlackNumberOf = $("#items-number-black").val();
            var PurpleJacket = $("#items-purple").val();
            var PurpleNumberOf = $("#items-number-purple").val();
            var AddressLine1 = $("#form-line1").val();
            var AddressLine2 = $("#form-line2").val();
            var PayPalID = $("#ppid").val();
            alert("gracias");


        }
    </script>
</body>


</html>