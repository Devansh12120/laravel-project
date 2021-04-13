<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payment Checkout Form</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
</head>
<style>
  @import  url('https://fonts.googleapis.com/css?family=Baloo+Bhaijaan|Ubuntu');

  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Ubuntu', sans-serif;
  }

  body{
    background: #2196F3;
    margin: 0 10px;
  }

  .payment{
    background: #f8f8f8;
    max-width: 450px;
    margin: 80px auto;
    height: auto;
    padding: 35px;
    padding-top: 70px;
    border-radius: 5px;
    position: relative;
  }

  .payment h2{
    text-align: center;
    letter-spacing: 2px;
    margin-bottom: 40px;
    color: #0d3c61;
  }

  .form .label{
    display: block;
    color: #555555;
    margin-bottom: 6px;
  }

  .input{
    padding: 13px 0px 13px 25px;
    width: 100%;
    text-align: center;
    border: 2px solid #dddddd;
    border-radius: 5px;
    letter-spacing: 1px;
    word-spacing: 3px;
    outline: none;
    font-size: 16px;
    color: #555555;
  }

  .card-grp{
    display: flex;
    justify-content: space-between;
  }

  .card-item{
    width: 48%;
  }

  .space{
    margin-bottom: 20px;
  }

  .icon-relative{
    position: relative;
  }

  .icon-relative .fas,
  .icon-relative .far{
    position: absolute;
    bottom: 12px;
    left: 15px;
    font-size: 20px;
    color: #555555;
  }

  .btn{
    margin-top: 40px;
    background: #2196F3;
    padding: 12px;
    text-align: center;
    color: #f8f8f8;
    border-radius: 5px;
    cursor: pointer;
  }


  .payment-logo{
    position: absolute;
    top: -50px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 100px;
    background: #f8f8f8;
    border-radius: 50%;
    box-shadow: 0 0 5px rgba(0,0,0,0.2);
    text-align: center;
    line-height: 85px;
  }

  .payment-logo:before{
    content: "";
    position: absolute;
    top: 5px;
    left: 5px;
    width: 90px;
    height: 90px;
    background: #2196F3;
    border-radius: 50%;
  }

  .payment-logo p{
    position: relative;
    color: #f8f8f8;
    font-family: 'Baloo Bhaijaan', cursive;
    font-size: 58px;
  }


  @media  screen and (max-width: 420px){
    .card-grp{
      flex-direction: column;
    }
    .card-item{
      width: 100%;
      margin-bottom: 20px;
    }
    .btn{
      margin-top: 20px;
    }
  }
  .grid{
    display:grid;
    grid-template-columns:50% 50%;
  }

</style>
<body>
	


<div class="wrapper">
  <div class="payment">
    <div class="payment-logo">
      <p>p</p>
    </div>   
    <h2>Payment Gateway</h2>
    <form action="#" class="form" name="payment" method="POST">
      <div class="card space icon-relative">
          <input type="text" class="input" name="name" placeholder=" Card holder name">
          <i class="fas fa-user"></i>
        </div>
        <div class="card space icon-relative">
          <input type="text" class="input" name="residence" placeholder="Complete Address">
          <i class="fas fa-building"></i>
        </div>
        <div class="card-grp space">
          <div class="card-item icon-relative">
            <input type="text" name="contact" class="input" placeholder="Contact">
            <i class="fas fa-phone"></i>
          </div>
          <div class="card-item icon-relative">
            <input type="text" class="input" name="useremail" placeholder="User mail">
            <i class="fas fa-envelope"></i>
          </div>
        </div>
    
        <div class="card space icon-relative">
          <input type="text" class="input" name="cardnumber" placeholder="Card Number">
          <i class="far fa-credit-card"></i>
        </div>
        <div class="card-grp space">
          <div class="card-item icon-relative">
            <input type="text" name="cardexpiry" class="input" placeholder="mm / yy">
            <i class="far fa-calendar-alt"></i>
          </div>
          <div class="card-item icon-relative">
            <input type="text" class="input" name="cvv" placeholder="CVV">
            <i class="fas fa-lock"></i>
          </div>
        </div>
          
        <input type="submit" value="Pay" class="btn" onclick="return validate()" >
                 
    </form>
  </div>
</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    function validate() 
    {
        var name = document.payment.name;
        var residence = document.payment.residence;
        var contact = document.payment.contact;
        var useremail = document.payment.useremail;
        var cardnumber = document.payment.cardnumber;
        var cardexpiry = document.payment.cardexpiry;
        var cvv = document.payment.cvv;
        if (name.value == "" && residence.value == "" && contact.value == "" && useremail.value == "" && cardnumber.value == "" && cardexpiry.value == ""&& cvv.value == "") {
        alert("Fill all the details");
        return false;
        } 

        if (contact.value.length !=10 ) {
        alert("contact is of 10 digits");
        return false;
      }
      if (contact.value=="" ) {
        alert("contact required");
        return false;
      }
      if (residence.value == "" ) {
        alert("residence required");
        return false;
      }
      if (name.value == "" ) {
        alert("name required");
        return false;
      }
      if (useremail.value=="" ) {
        alert("useremail required");
        return false;
      }
      
      if (cardnumber.value=="" ) {
        alert("cardnumber required");
        return false;
      }
      if (cardnumber.value.length !=16 ) {
        alert("cardnumber length should be 16 digits");
        return false;
      }
      if (cardexpiry.value=="" ) {
        alert(" required");
        return false;
      }
      if (cardexpiry.value.length !=5 ) {
        alert("cardexpiry is of 5 digits");
        return false;
      }
      if (cvv.value=="" ) {
        alert("cvv required");
        return false;
      }
      if (cvv.value.length !=3 ) {
        alert("cvv is of 3 digits");
        return false;
      }

      else 
      {alert("are your sure to make the pament");
      alert("Transaction compleated successfully");
        return true;
      }
    }  
</script>
</body>
</html><?php /**PATH G:\laravelproject\resources\views/payment.blade.php ENDPATH**/ ?>