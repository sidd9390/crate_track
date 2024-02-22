
const list = document.querySelectorAll('.list');
function activeLink() {
    list.forEach((item) =>
    item.classList.remove('active'));
    this.classList.add('active');
    console.log("ok");
}
list.forEach((item) =>
item.addEventListener('click',activeLink));



function f3(){
    document.getElementById("pilots").style.display ="block";
    document.getElementById("retail").style.display ="none";
    document.getElementById("distri").style.display ="none";
    document.getElementById("sales_cat").style.backgroundColor = "rgb(19, 109, 128)"
    document.getElementById("retailer_cat").style.backgroundColor = "rgba(27, 154, 179, 1)"
    document.getElementById("distribut_cat").style.backgroundColor = "rgba(27, 154, 179, 1)"

}
function f4(){
    document.getElementById("pilots").style.display ="none";
    document.getElementById("retail").style.display ="block";
    document.getElementById("distri").style.display ="none";
    document.getElementById("retailer_cat").style.backgroundColor = "rgb(19, 109, 128)"
    document.getElementById("sales_cat").style.backgroundColor = "rgba(27, 154, 179, 1)"
    document.getElementById("distribut_cat").style.backgroundColor = "rgba(27, 154, 179, 1)"
}
function f5(){
    document.getElementById("pilots").style.display ="none";
    document.getElementById("retail").style.display ="none";
    document.getElementById("distri").style.display ="block";
    document.getElementById("retailer_cat").style.backgroundColor = "rgba(27, 154, 179, 1)"
    document.getElementById("sales_cat").style.backgroundColor = "rgba(27, 154, 179, 1)"
    document.getElementById("distribut_cat").style.backgroundColor = "rgb(19, 109, 128)"
}

function addcrate() {
    // Get the iframe element by its ID
    alert("100");
    var iframe = document.getElementById('BOFrame');

    // Change the src attribute of the iframe
    iframe.src = './add_delete_crates.php';

  }
document.getElementById('sip').addEventListener('click', addcrate);


