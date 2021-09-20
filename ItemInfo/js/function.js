
function largeImage(id){
    let largeImage = document.getElementById('large-img');
    let smallImage = document.getElementById(id);
    largeImage.src = smallImage.src;
};

function increaseQty(){
    document.getElementById('qtyInput').stepDown();
}

function discreaseQty(){
    document.getElementById('qtyInput').stepUp();
}

function addToCard(){
    const radioBtn = document.querySelector('input[name = "btnradio"]:checked').value;

    const qty = document.getElementById('qtyInput').value;
};
