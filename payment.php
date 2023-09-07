<?php include_once 'dbfun.php'; ?>
<?php include_once 'newheader.php'; ?>
<style>
    th,h4,label{
        color:var(--theme-title);
    }
</style>

<div class="container" style="margin-top: 70px;">
    <div class="creditCardForm">    
        <h2 class="heading">Confirm Purchase</h2>
    <div class="payment row">
        <div class="col-sm-6">
        <form action="">
            <div class="form-group owner">
                <label for="owner">Name on Card</label>
                <input type="text" class="form-control" id="owner">
            </div>
            <div class="form-group CVV">
                <label for="cvv">CVV</label>
                <input type="text" class="form-control" id="cvv">
            </div>
            <div class="form-group" id="card-number-field">
                <label for="cardNumber">Card Number</label>
                <input type="text" class="form-control" id="cardNumber">
            </div>
            <div class="form-group row" id="expiration-date">
                <label class="col-sm-4">Expiration Date</label>
                <div class="col-sm-4">
                <select class="form-control">
                    <option value="01">January</option>
                    <option value="02">February </option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                </div>
                <div class="col-sm-4">
                <select class="form-control">
                    <option value="16"> 2016</option>
                    <option value="17"> 2017</option>
                    <option value="18"> 2018</option>
                    <option value="19"> 2019</option>
                    <option value="20"> 2020</option>
                    <option value="21"> 2021</option>
                </select>
                </div>
            </div>
            <div class="form-group" id="credit_cards">
                <img src="images/visa.jpg" id="visa">
                <img src="images/mastercard.jpg" id="mastercard">
                <img src="images/amex.jpg" id="amex">
            </div>
            <div class="form-group" id="pay-now">
                <?php
                $bid=$_GET["id"];
                ?>
                <a href="showticket.php?id=<?= $bid ?>" class="btn btn-primary" id="confirm-purchase">Confirm Order</a>
            </div>
        </form>
        </div>
    </div>
</div>
</div>
<?php include_once 'newfooter.php'; ?>