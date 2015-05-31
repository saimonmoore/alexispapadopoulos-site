// JS - Functions for archive page
(function($) {


  var Archive = {};
  Archive.onProjectHover = function () {
    // var img = $(this).find('img.wp-post-image'),
    //     featured_image = $('.featured_image'),
    //     cloned_image;

    // if (img) {
    //   cloned_image = img.clone();
    //   cloned_image.removeClass('wp-post-image');
    //   featured_image.html(cloned_image);
    // }
  };

  Archive.init = function () {
    $('article.projects').hover(Archive.onProjectHover);
  };

  $(document).ready(Archive.init);

})(jQuery); // Fully reference jQuery after this point.
