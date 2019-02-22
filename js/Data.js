$(document).ready(function() {

    var PaymentForm = $("#Payment");
    var ReceiveForm = $("#Receive");
    var money_span = $("#amount_of_money");

    $('#Bank_Type123').change(function(event) {
        event.preventDefault();
        money_span.text($(this).val());
        getTotalValue();
    });

    PaymentForm.submit(function (event) {
        event.preventDefault();
        Add();
    });
    ReceiveForm.submit(function (event) {
        event.preventDefault();
        Minus()
    });
});

function getTotalValue() {
    var total_price = 0;
    $('#Bank_Type123 option').each(function() {
        if (parseInt($(this).val()) > 0) {
            total_price += parseInt($(this).val());
            $("#amount_money_total").text(total_price);
        }
    });
}

function Add() {
    var total_span = $("#amount_money_total");
    var money_span = $("#amount_of_money");
    var PaymentValue = $('input[id=PaymentValue]').val();
    var Number = parseInt(PaymentValue);
    var oldmoney = parseInt(money_span.text());
    var total_oldmoney = parseInt(total_span.text());
    if (isNaN(oldmoney)) {
        oldmoney = 0;
    }
    if (!isNaN(Number) && Number > 0) {
        oldmoney += Number;
        total_span += Number;
        money_span.text(oldmoney);
        total_span.text(total_oldmoney);

    }
}
function Minus() {
    var money_span = $("#amount_of_money");
    var ReceiveValue = $('input[id=ReceiveValue]').val();
    var Number = parseInt(ReceiveValue);
    var oldmoney = parseInt(money_span.text());
    if (!isNaN(Number) && Number > 0) {
        oldmoney -= Number;
        money_span.text(oldmoney);
    }
}