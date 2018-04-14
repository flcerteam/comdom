jQuery(document).ready(function($) {
      'use strict';
    $('ul.pagination').hide();
    $(function() {
        $('.infinite-scroll').jscroll({
            autoTrigger: true,
            loadingHtml: '<img class="center-block" src="/images/loading.gif" alt="Loading..." />',
            padding: 0,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.infinite-scroll',
            callback: function() {
                // xóa thanh phân trang ra khỏi html mỗi khi load xong nội dung
                $('ul.pagination').remove();
            }
        });
    });
});
