<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<?php

$name = $_GET['name'];
 $number = $_GET['number'];
 $email = $_GET['email'];
 $cost = 199 ;


// $pay_amt = $total + $gst; // Add the missing '$' before 'pay_amt'


?>


<form>
    <input type="hidden" name="number" id="number" value="<?php echo $number ?>" placeholder="Enter id" /><br /><br />
    <input type="hidden" name="name" id="name" value="<?php echo $name ?>" placeholder="Enter your name" /><br /><br />
    <input type="hidden" name="email" id="email" value="<?php echo $email ?>"
        placeholder="Enter your name" /><br /><br />
    <input type="hidden" name="amt" id="amt" value="<?php echo $cost ?>" placeholder="Enter amt" /><br /><br />

    <input type="button" id="rzp-button1" style="display: none;" name="btn" id="btn" value="Pay Now"
        onclick="pay_now()" />
</form>

<script>
function pay_now() {

    var name = jQuery('#name').val();
    var email = jQuery('#email').val();
    var amt = jQuery('#amt').val();
    var number = jQuery('#number').val();


    jQuery.ajax({
        type: 'post',
        url: 'payment_process.php',
        data: "amt=" + amt + "&name=" + name + "&email=" + email + "&number=" + number,
        success: function(result) {
            var options = {
                // "key": "rzp_live_Pkifgl5t3mRzSF", 
                "key": "rzp_live_T2y6qi0sFKvGOs",
                "amount": amt * 100,
                "currency": "INR",
                "name": "Enversity",
                "description": "Test Transaction",
                "image": "Enversity-Logo.jpg",
                "handler": function(response) {

                    jQuery.ajax({
                        type: 'post',
                        url: 'payment_process.php',
                        data: {
                            payment_id: response.razorpay_payment_id
                        },
                        success: function(result) {

                            if (result.trim() === 'success') {
                                window.location.href = 'thank_you.php';
                            } else {
                                alert(result);
                            }

                        }
                    });

                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
        }
    });


}
</script>
<script type="text/javascript">
window.onload = function() {

    document.getElementById('rzp-button1').click();

}
</script>