function add_cart(id){
   
    $.post("http://localhost/php2_12/buoi3/mvc/add-cart", {id:id},  function(data){
      alert("Đã Thêm Vào Giỏ Hàng");
    });
};

function xoa(id){
  $.post("xoa", {id:id},  function(data){
    $("#div1").load("http://localhost/php2_12/buoi3/mvc/cart #cartx ");
    $("#div2").load("http://localhost/php2_12/buoi3/mvc/cart #tien ");
  });
};
function updateCart(id){
    
  $.post("http://localhost/php2_12/buoi3/mvc/updateCart",
  {
    number :$('#number_'+id).val(),
    id:id}, 
   function(data){
    $("#div1").load("http://localhost/php2_12/buoi3/mvc/cart #cartx ");
    $("#div2").load("http://localhost/php2_12/buoi3/mvc/cart #tien ");
  });
}