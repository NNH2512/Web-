<?php ;
include 'includes/functions.php';
include 'header.php';
//$show_bank_type_list = show_bank_type_list();

?>
<script src="js/Data.js"></script>

<div class="container">
    <div class="alert alert-success" role="alert">
         <h1 style="text-align: center">消費システム</h1>
    </div>
    <div class="row">
        <div class="col border rounded">
            <a class="btn btn-info btn-lg btn-block active" data-toggle="collapse" href="#Bank" aria-expanded="false" aria-controls="collapseExample">Bank</a>
            <div class="collapse" id="Bank">
                <form class="px-4 py-4">
                    <div class="form-group" id="viet">
                        <h5>Bank Type:</h5>
                        <select id="Bank_Type123" class="form-control">
                            <option value="" disabled selected style="display:none;">Choose A Bank</option>
                            <option name="Mizuho" value="10000">Mizuho</option>
                            <option name="UFJ" value="20000" >UFJ</option>
                            <option name="Yucho" value="30000" >Yucho</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <a href="new-account.php"><img src="image/plus-button.png"/><p>Add an account</p></a>
<!--                        <button type="submit" id="confirm" class="btn btn-primary border rounded">Confirm</button>-->
                     </div>
                    <div id="divCheckbox" >
                        <div class="input-group px-1 py-1" >
                            <span class="input-group-addon">Wallet</span>
                            <span id="amount_of_money" class="input-group-addon unique"></span>
                            <span class="input-group-addon">JPY</span>
                        </div>
<!--
                        <div class="input-group px-1 py-1">
                            <span class="input-group-addon">Total:</span>
                            <span id="amount_money_total" class="input-group-addon"></span>
                            <span class="input-group-addon">JPY</span>
                        </div>
-->
                    </div>
                </form>

            </div>
        </div>
        <div class="col border rounded">
            <a class="btn btn-info btn-lg btn-block active" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">Chi</a>
            <div class="collapse" id="collapseExample2">
                <form action="includes/Payment.inc.php" method="get" class="px-4 py-4" id="Payment" >
                    <div class="form-group">
                        <h5>Bank Type:</h5>
                        <select class="form-control" id="Bank">
                            <option value="Mizuho" selected="selected">Mizuho</option>
                            <option value="UFJ" >UFJ</option>
                            <option value="Yucho" >Yucho</option>
                        </select>
                        <div class="d-inline py-1"><h5>Payment Type</h5></div>
                        <select class="bg-white text-dark" name="payment_type">
                            <option value="Type" selected="selected">Type</option>
                            <option value="Food">Food</option>
                            <option value="House-Rent">House-Rent</option>
                            <option value="Other">Other</option>
                        </select>
                        <h5 class="py-1">Amount of Money</h5>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" name="amount" aria-label="Text input with checkbox" id="PaymentValue">
                            <span class="input-group-addon">JPY</span>
                        </div>
                        <h5 class="py-1">Detail</h5>
                        <textarea placeholder="Enter The Detail in here" name="detail"></textarea><br>
                        <label><h5 class="py-1">Date: </h5></label>
                        <input type="date" name="date"><br>
                        <button type="submit" name="submit" class="btn btn-primary m-4 border rounded">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col border rounded">
            <a class="btn btn-info btn-lg btn-block active" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">Nhan</a>
            <div class="collapse" id="collapseExample3">
                <form action="includes/Received.inc.php" method="get" class="px-4 py-4" id="Receive">
                    <div class="form-group">
                        <h5>Bank Type:</h5>
                        <select class="form-control" id="Bank">
                            <option value="Mizuho" selected="selected">Mizuho</option>
                            <option value="UFJ" >UFJ</option>
                            <option value="Yucho" >Yucho</option>
                        </select>
            <div class="d-inline py-1"><h5>Received Type</h5></div>
            <select class="bg-white text-dark" name="receive_type">
                <option value="Type">Type</option>
                <option value="Salary">Salary</option>
                <option value="Other">Other</option>
            </select>
            <h5 class="py-1">Amount of Money</h5>
            <div class="input-group">
                <span class="input-group-addon">$</span>
                <input type="text" name="amount" class="form-control" aria-label="Text input with checkbox" id="ReceiveValue">
                <span class="input-group-addon">JPY</span>
            </div>
            <h5 class="py-1">Detail</h5>
            <textarea placeholder="Enter The Detail in here" name="detail"></textarea><br>
            <label><h5 class="py-1">Date: </h5></label>
            <input type="date" name="date"/><br>
            <button type="submit" name="submit" class="btn btn-primary m-4 border rounded">Submit</button>
        </div>
        </form>
    </div>
</div>
        <div class="col">
            <a class="btn btn-info btn-lg btn-block active" data-toggle="collapse" href="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">TietKiem</a>
            <div class="collapse" id="collapseExample4">

            </div>
        </div>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleControls" data-slide-to="1"></li>
            <li data-target="#carouselExampleControls" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="image/Main.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="image/Main2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="image/Main3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>



<?php include 'footer.php'; ?>