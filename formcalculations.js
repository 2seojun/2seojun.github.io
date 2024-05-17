
 var cake_prices = new Array();
 cake_prices["Round6"]=20;
 cake_prices["Round8"]=25;
 cake_prices["Round10"]=35;
 cake_prices["Round12"]=45;
 
 
 var filling_prices= new Array();
 filling_prices["None"]=0;
 filling_prices["1"]=1;
 filling_prices["2"]=2;
 filling_prices["3"]=3;
 filling_prices["4"]=4;
 	 
function getCakeSizePrice()
{  
    var cakeSizePrice=0;
    var theForm = document.forms["cakeform"];
    var selectedCake = theForm.elements["selectedcake"];
    for(var i = 0; i < selectedCake.length; i++)
    {
        if(selectedCake[i].checked)
        {
            cakeSizePrice = cake_prices[selectedCake[i].value];
            break;
        }
    }
    return cakeSizePrice;
}

function getFillingPrice()
{
    var cakeFillingPrice=0;
    var theForm = document.forms["cakeform"];
     var selectedFilling = theForm.elements["filling"];
     
    cakeFillingPrice = filling_prices[selectedFilling.value];

    return cakeFillingPrice;
}



        
function calculateTotal()
{
     var tiketPrice = getCakeSizePrice() * getFillingPrice();
    
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Price Tiket "+tiketPrice;

}

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
}