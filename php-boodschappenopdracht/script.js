const tables = document.getElementById("table")
const productPrices = document.getElementsByClassName("productPrice");
const productQuantities = document.getElementsByClassName("productQuantity");
const productTotalCosts = document.getElementsByClassName("productTotalCost");
const totalCost = document.getElementById("totalCost");

function productChange() {
    let totals = 0;
    for (let i = 0; i < productPrices.length; i++) {
        let subTotal = productPrices[i].innerHTML * (productQuantities[i].value);
        totals += subTotal;
        productTotalCosts[i].innerHTML = subTotal.toFixed(2);
    }
    totalCost.innerHTML = totals.toFixed(2);
}

tables.addEventListener('input', productChange);
