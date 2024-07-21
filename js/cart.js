


function increaseTotal(){
    
    let price= document.querySelector('.price');
    let quantity= document.querySelector('.quantity-amount');
    let total= document.querySelector('.total-amount');
    let pricewithoutdollar=parseInt(price.textContent.slice(1));
    let total_amount= pricewithoutdollar*(parseInt(quantity.value)+1);  
    total.textContent='$'+total_amount; 
}
function decreaseTotal(){
    
    let price= document.querySelector('.price');
    let quantity= document.querySelector('.quantity-amount');
    let total= document.querySelector('.total-amount');

    if(parseInt(quantity.value) === 0){
        return;
    }
    let pricewithoutdollar=parseInt(price.textContent.slice(1));
    let total_amount= pricewithoutdollar*(parseInt(quantity.value)-1);
    total.textContent='$'+total_amount;
   
}


function deleteRow(){
    let row= document.querySelector('.cart-row');
    row.remove();
   
}