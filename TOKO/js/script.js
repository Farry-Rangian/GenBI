// increment jumlah pembelian barang
function incrementValue() {
  var value = parseInt(document.getElementById("number").value, 10);
  value = isNaN(value) ? 0 : value;
  if (value < 5) {
    value++;
    document.getElementById("number").value = value;
  }
}
function decrementValue() {
  var value = parseInt(document.getElementById("number").value, 10);
  value = isNaN(value) ? 0 : value;
  if (value > 1) {
    value--;
    document.getElementById("number").value = value;
  }
}
