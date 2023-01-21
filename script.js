function calculate(event) {
    var mouse_amnt = document.getElementById("mouse_amount").innerHTML,
        mouse_qty = document.getElementById("mouse_quantity").value,
        mouse_result = mouse_amnt * mouse_qty;
    document.getElementById('mouse_total').setAttribute('value', mouse_result);

    var pendrive_amnt = document.getElementById("pendrive_amount").innerHTML,
        pendrive_qty = document.getElementById("pendrive_quantity").value,
        pendrive_result = pendrive_amnt * pendrive_qty;
    document.getElementById('pendrive_total').setAttribute('value', pendrive_result);

    var keyboard_amnt = document.getElementById("keyboard_amount").innerHTML,
        keyboard_qty = document.getElementById("keyboard_quantity").value,
        keyboard_result = keyboard_amnt * keyboard_qty;
    document.getElementById('keyboard_total').setAttribute('value', keyboard_result);

    var table_amnt = document.getElementById("table_amount").innerHTML,
        table_qty = document.getElementById("table_quantity").value,
        table_result = table_amnt * table_qty;
    document.getElementById('table_total').setAttribute('value', table_result);

    var overall_total = mouse_result + pendrive_result + keyboard_result + table_result;
    document.getElementById('total').setAttribute('value', overall_total);
    document.getElementById('formtotal').setAttribute('value', overall_total);
}