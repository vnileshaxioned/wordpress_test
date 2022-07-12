$(document).ready(function () {
  $('.work-tag').click(function (e) {
    e.preventDefault();
    var data = $(this);
    var tagSlug = $(data).attr('data-slug');
    var postPerPage = $(data).attr('data-post');
    $.ajax({
      type: 'post',
      url: ajax.ajaxurl,
      data: {
        action: 'filter_tab',
        tag_name: tagSlug,
        post_per_page: postPerPage,
      },
      datatype: 'json',
      success: function (response) {
        var html = JSON.parse(response);
        $('.our-work').html(html);
      },
    });
  });
});