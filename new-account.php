<?php include 'header.php'; ?>
<script src="js/new-account.js"></script>
<div class="container">
	<div class="alert alert-success" role="alert">
		<h1 style="text-align: center">MiniBank</h1>
	</div>
	<form action="includes/new-account.inc.php" method="post">
        <div class="input-group w-50 py-3 px-3">
            <label for="Bank-Amount">Bank Amount: </label><br>
            <span class="input-group-addon">$</span>
            <input type="text" class="form-control" name="bank_amount" aria-label="Text input with checkbox">
            <span class="input-group-addon">JPY</span>
        </div>
        <label for="Bank-Type">Bank Type: </label>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="Bank" id="yucho" value="Yucho"> ゆうちょ
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="Bank" id="UFJ" value="UFJ"> UFJ
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="Bank" id="Mizuho" value="Mizuho"> みずほ
            </label>
        </div>
<!--        <div id="newBank" class="form-check form-check-inline mx-2 px-2" style="display: none;">-->
<!---->
<!--        </div>-->
        <div class="form-check form-check-inline">
<!--            <div class="input-group">-->
<!--                <label for="unique" class="form-check-label">-->
<!--                    <input class="form-check-input" type="radio" name="Other" id="Other" value="Other">Other-->
<!--                </label>-->
<!--                <input type="text" class="form-control" id="unique" aria-label="Text input with radio button" disabled>-->

                <div class="btn-group" role="group" aria-label="Basic example">
<!--                    <button type="button" class="btn btn-success ml-2 border rounded-right" id="Add">Add</button>-->
<!--                    <button type="button" class="btn btn-success border rounded" id="Remove">Remove</button>-->
                    <button type="submit" class="btn btn-primary ml-3 border rounded" name="submit">Submit</button>
                </div>
            </div>
<!--        </div>-->
	</form>
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
