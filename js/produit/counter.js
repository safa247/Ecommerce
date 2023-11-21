$('.counter-plus').click(function(e){
    // $(e.currentTarget) selects the clicked button '+'
    let qty = $(e.currentTarget).siblings("#qty"); // selects the sibling with id 'qty'
    let qtyvalue = parseInt(qty.val()) + 1;
    qty.val(qtyvalue);
   
});
$('.counter-moins').click(function(e){
    // $(e.currentTarget) selects the clicked button '+'
    let qty = $(e.currentTarget).siblings("#qty"); // selects the sibling with id 'qty'
    let qtyvalue = parseInt(qty.val())-1;
    if(qtyvalue<0){
        qtyvalue=0
    }
    qty.val(qtyvalue);
});
