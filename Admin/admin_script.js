let  btnDashbord = document.querySelector('#dashboard');
let btnOrders = document.querySelector('#orders');
let btnViewProducts = document.querySelector('#view_products');
let btnAddProducts = document.querySelector('#add_products');
let btnCategory = document.querySelector('#categories');
let btnUserDetails = document.querySelector('#user_details');
let btnAddAdmin = document.querySelector('#add_admin');
let content = document.querySelector('#content');

btnDashbord.addEventListener('click',() =>{
    document.getElementById('content').src = 'dashboard.php';
});

btnOrders.addEventListener('click',() =>{
    document.getElementById('content').src = 'orders.php';
});

btnViewProducts.addEventListener('click',() =>{
    document.getElementById('content').src = 'view_products.php';
});

btnAddProducts.addEventListener('click',() =>{
    document.getElementById('content').src = 'add_products.php';
});

btnCategory.addEventListener('click',() =>{
    document.getElementById('content').src = 'categories.php';
});

btnUserDetails.addEventListener('click',() =>{
    document.getElementById('content').src = 'user_details.php';
});

btnAddAdmin.addEventListener('click',() =>{
    document.getElementById('content').src = 'add_admin.php';
});