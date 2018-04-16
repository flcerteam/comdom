/* <![CDATA[ */
jQuery(document).ready(function($) {
        'use strict';
        /**
        *click vào icon thêm giỏ hàng
        **/
          $("#phone").focusout(function(){
            var phone = $("#phone").val();
            if("" == phone) {
              return;
            }
            $.ajax({
              type: "POST",
              url: "/get_customer_info",
              data: {'phone':$("#phone").val()},
              success: function(data){
                $("#name").val(data.customer['name']);
                if (data.customer['gender'] =='nam') {
                  $('#gender1').prop('checked',true);
                  $('#gender2').prop('checked',false);
                } else {
                  $('#gender2').prop('checked',true);
                  $('#gender1').prop('checked',false);
                }
                $("#email").val(data.customer['email']);
                $("#address").val(data.customer['address']);
              },
              error:function(data){
                // show popup thất bại
                $('.header-bottom').append('<div class="alert alert-danger alert-dismissible fade in" width="50px">\
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>\
                 Có lỗi xảy ra! Không thể lấy được data.\
                  </div>')
                  // set thời gian đóng popup
                  $(".alert-danger").delay(800).slideUp(200, function() {
                    $(this).alert('close');
                  });
              }
            });
          });
      });
