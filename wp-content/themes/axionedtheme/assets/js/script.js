$(document).ready(function () {
  var postPerPage = $('.form-content').attr('data-post');

  searchFilter();
  
  // for tab filter
  $('.work-tag').click(function (e) {
    e.preventDefault();
    var data = $(this);
    var tagSlug = data.attr('data-slug');

    // remove all tag active class
    $('.work-tag').each(function (index, list) {
      $(list).removeClass('tag-active');
    });

    // add tag active class on clicked element and call searchFilter function
    if (tagSlug == 'all') {
      searchFilter();
      data.addClass('tag-active');
    } else {
      searchFilter(tagSlug);
      data.addClass('tag-active');
    }
  });
  
  // for search
  $('.form-content').keyup(function () {
    var data = this;
    var userInput = data.value;
    searchFilter('', userInput);
  });
  
  // searchFilter function to call ajax request
  function searchFilter(tag, search) {
    $.ajax({
      type: 'post',
      url: ajax.ajaxurl,
      data: {
        action: 'filter_search',
        tag_name: tag,
        search: search,
        post_per_page: postPerPage,
      },
      datatype: 'json',
      success: function (response) {
        if (response != 0) {
          $('.our-work').html(response);
        }
      },
      error: function (xhr, status, error) {
        alert('Status: ' + xhr.status + ' ' + error);
      },
    });
  }
});