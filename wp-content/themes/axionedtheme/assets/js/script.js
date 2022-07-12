$(document).ready(function () {
  // for tab filter
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
        if (html) {
          $('.our-work').html(html);
        }
      },
      error: function (xhr, status, error) {
        alert('Status: ' + xhr.status + ' ' + error);
      },
    });
  });

  // for search
  $('.form-content').keyup(function (e) { 
    var data = this;
    var userInput = data.value;
    var postPerPage = $('.form-content').attr('data-post');
    $.ajax({
      type: 'post',
      url: ajax.ajaxurl,
      data: {
        action: 'custom_search',
        search: userInput,
        post_per_page: postPerPage,
      },
      datatype: 'json',
      success: function (response) {
        var html = JSON.parse(response);
        if (html) {
          $('.our-work').html(html);
        }
      },
      error: function (xhr, status, error) {
        alert('Status: ' + xhr.status + ' ' + error);
      },
    });
  });;
});