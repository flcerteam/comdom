/* <![CDATA[ */
jQuery(document).ready(function($) {
        'use strict';
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('value')
                }
        });
        /**
        *click vào icon thêm giỏ hàng
        **/
        $("body").on("click", ".sp1", (function(e){
            e.preventDefault();
            $.ajax({
              type: "POST",
              url: "/add-to-cart",
              data: {'id':e.currentTarget.childNodes[1].value},
              success: function(data){
                // show popup thành công
                  $('.header-bottom').append('<div class="alert alert-success alert-dismissible fade in" width="50px">\
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>\
                   Bạn đã thêm thành công 1 món ăn.\
                    </div>')
                    $('#tongso').text(data.cart["totalQty"]);
                    $('.list-items').html('');
                    $.each(data.cart["items"],function( key, value ){
                      $('.list-items').append('\
                      <div class="cart-item">\
                        <div class="media">\
                          <a class="pull-left" href="#"><img src="source/image/product/'+value.item["image"]+'" alt="" width="30px" height="30px"></a>\
                          <div class="media-body">\
                            <span class="cart-item-title">'+value.item["name"]+'</span>\
                            <span class="cart-item-amount">'+value.qty+' * <span>'+value.item["unit_price"]+'</span></span>\
                          </div>\
                        </div>\
                      </div>')
                    })
                    $('.cart-total-value').text(data.cart["totalPrice"]);
                    // set thời gian đóng popup
                    $(".alert-success").delay(800).slideUp(200, function() {
                      $(this).alert('close');
                    });

              },
              error:function(data){
                // show popup thất bại
                $('.header-bottom').append('<div class="alert alert-danger alert-dismissible fade in" width="50px">\
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>\
                 Bạn đã thêm thành công 1 món ăn.\
                  </div>')
                  // set thời gian đóng popup
                  $(".alert-danger").delay(800).slideUp(200, function() {
                    $(this).alert('close');
                  });
              }
            });
          }));
      });
