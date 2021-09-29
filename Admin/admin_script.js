let  btnDashbord = document.querySelector('#dashboard');
let btnOrders = document.querySelector('#orders');
let btnViewProducts = document.querySelector('#view_products');
let btnAddProducts = document.querySelector('#add_products');
let btnCategory = document.querySelector('#categories');
let btnUserDetails = document.querySelector('#user_details');
let btnAddAdmin = document.querySelector('#add_admin');
let content = document.querySelector('#content');

btnDashbord.addEventListener('click',() =>{
    document.getElementById('content').src = './admin_section_dashboard/dashboard.php';
});

btnOrders.addEventListener('click',() =>{
    document.getElementById('content').src = './admin_section_order_list/orders.php';
});

btnViewProducts.addEventListener('click',() =>{
    document.getElementById('content').src = './admin_section_view_products/view_products.php';
});

btnAddProducts.addEventListener('click',() =>{
    document.getElementById('content').src = './admin_section_add_products/add_products.php';
});

btnCategory.addEventListener('click',() =>{
    document.getElementById('content').src = './admin_section_category_lists/categories.php';
});

btnUserDetails.addEventListener('click',() =>{
    document.getElementById('content').src = './admin_section_user_details/user_details.php';
});

btnAddAdmin.addEventListener('click',() =>{
    document.getElementById('content').src = './admin_section_add_admin/add_admin.php';
});