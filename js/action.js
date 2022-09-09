function validateForm() {
  let x = document.forms["formSearch"]["formName"].value;

  if (x == "") {
    alert("Nội dung bạn tìm kiếm không hợp lệ");
    return false;
  }
  
  if(x=="nồi cơm"){
    window.open('sanpham2.html','_self');
  }
  else if(x=="nồi chiên không dầu" || x=="nồi chiên" ){
    window.open('sanpham.html','_self');
  }
  else if(x=="bếp điện" || x=="bếp"){
    window.open('sanpham3.html','_self');
  }
  else {
    alert("Sản phẩm bạn tìm kiếm không có!!");
  }
  

}

function closeProduct() {
  $(".overlay").hide(500);
  $(".overlay-cart").hide(500);
  i = 0;
}

// lấy ảnh nền, giá, tên sản phẩm
function openProduct(id) {

  $(".overlay").show(500);
  const main = document.getElementById(id);
  const styte = window.getComputedStyle(main);

  const image = styte.backgroundImage;
  $('.product-detail').css("background-image", image);

  var x = "#" + id + " .content-in-sanpham p:nth-child(1)";
  var y = "#" + id + " .content-in-sanpham p:nth-child(2)";


  $(".information-product").text($(x).text());
  $(".price-product").text($(y).text() + 'VND');
  var z = "#" + id + " .content-in-sanpham p:nth-child(3)";
  $('.value').text($(z).text());
  $('.value').css("font-size", "16px");

};


//lấy các giá trị của sản phẩm cần thêm
function addCart(id) {
  $(".overlay-cart").show(500);
  var x = "#" + id + " .content-in-sanpham p:nth-child(1)";
  $(".product-selected .information-selected span").text('Bạn đã thêm ' + $(x).text() + ' vào giỏ hàng');
  const main = document.getElementById(id);
  const styte = window.getComputedStyle(main);

  const image = styte.backgroundImage;
  $('.product-image').css("background-image", image);
  $(".inf").text($(x).text());
  var y = "#" + id + " .content-in-sanpham p:nth-child(2)";
  $(".price").text($(y).text() + ' ₫');
  // let num=$('#quantity-to-count').val();

  $('.total-money').text(Math.round($('#quantity-to-count').val() * $(y).text()).toFixed(3) + ' ₫');
  $('.need-pay').text($('.total-money').text());
  $('#quantity-to-count').on('input', function () {
    $(y).text();
    $('.total-money').text(Math.round($('#quantity-to-count').val() * $(y).text()).toFixed(3) + ' ₫');
    $('.need-pay').text($('.total-money').text());
  });

 
}


// tạo giá trị để đổi màu trái tim mỗi lần click
let i = 0;
function changeColor() {
  if (i % 2 == 0) {
    $(".fa-heart").css("color", "red");
    i++;
  }
  else {
    $(".fa-heart").css("color", "grey");
    i++;
  }
};


// thêm vào giỏ thông qua xem thêm


function searchFromPrice(){
    


    if($("#filter-duoi-100-000d").is(":checked")){
        $(".item-content").css("visibility","hidden");
        $(".notification").text("Không có sản phẩm");
        
    }
    else if($("#filter-100-000d-200-000d").is(":checked")){
      $(".item-content").css("visibility","hidden");
      $(".200k").css("visibility","visible");
      $(".notification").text("");
    }
    else if($("#filter-200-000d-300-000d").is(":checked")){
      $(".item-content").css("visibility","hidden");
      $(".200k").css("display","none");
      $(".300k").css("visibility","visible");
      $(".notification").text("");
    }
    else if($("#filter-300-000d-500-000d").is(":checked")){
      $(".item-content").css("visibility","hidden");
      $(".200k").css("display","none");
      $(".300k").css("display","none");
      $(".500k").css("visibility","visible");
      $(".notification").text("");
    }
    else if($("#filter-500-000d-1-000-000d").is(":checked")){
      $(".item-content").css("visibility","hidden");
        $(".notification").text("Không có sản phẩm");
    }
    else if($("#filter-tren1-000-000d").is(":checked")){
      $(".item-content").css("visibility","hidden");
        $(".notification").text("Không có sản phẩm");
    }
    else{
      $(".item-content").css("visibility","visible");
        $(".notification").text("");
        $(".500k").css("visibility","visible");
        $(".300k").css("visibility","visible");
        $(".200k").css("visibility","visible");
        $(".200k").css("display","block");
      $(".300k").css("display","block");
    }
}
function searchFromPrice1(){
  


  if($("#filter-duoi-100-000d1").is(":checked")){
      $(".item-content").css("visibility","hidden");
      $(".notification").text("Không có sản phẩm");
      
  }
  else if($("#filter-100-000d-200-000d1").is(":checked")){
    $(".item-content").css("visibility","hidden");
    $(".200k").css("visibility","visible");
    $(".notification").text("");
  }
  else if($("#filter-200-000d-300-000d1").is(":checked")){
    $(".item-content").css("visibility","hidden");
    $(".200k").css("display","none");
    $(".300k").css("visibility","visible");
    $(".notification").text("");
  }
  else if($("#filter-300-000d-500-000d1").is(":checked")){
    $(".item-content").css("visibility","hidden");
    $(".200k").css("display","none");
    $(".300k").css("display","none");
    $(".500k").css("visibility","visible");
    $(".notification").text("");
  }
  else if($("#filter-500-000d-1-000-000d1").is(":checked")){
    $(".item-content").css("visibility","hidden");
      $(".notification").text("Không có sản phẩm");
  }
  else if($("#filter-tren1-000-000d1").is(":checked")){
    $(".item-content").css("visibility","hidden");
      $(".notification").text("Không có sản phẩm");
  }
  else{
    $(".item-content").css("visibility","visible");
      $(".notification").text("");
      $(".500k").css("visibility","visible");
      $(".300k").css("visibility","visible");
      $(".200k").css("visibility","visible");
      $(".200k").css("display","block");
    $(".300k").css("display","block");
  }
}
function openSearch(){
  $(".price-search").show("slow");
  
}
function closeSearch(){
  $(".price-search").hide("slow");
  
}