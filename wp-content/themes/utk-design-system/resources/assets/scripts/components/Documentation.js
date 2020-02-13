/* eslint-disable */

/* Formal */

export default class Documentation {

  constructor() {
    this.navigationEvents();
  }


  navigationEvents () {
    (function($, log) {

      var fixedTop = $('#utk-documentation-nav').offset().top;

      $(window).scroll(function() {

        var currentScroll = $(window).scrollTop();

        if (currentScroll >= fixedTop) {
          $('#utk-documentation-nav').css({
            position: 'fixed',
            top: 32
          });
        } else {
          $('#utk-documentation-nav').css({
            position: 'static'
          });
        }

      });

      $(document).on('click', '#utk-documentation-nav li > a', function(e) {

        e.preventDefault();
        e.stopPropagation();

        console.log($(this).attr('href'));

        $('html, body').animate(
          {
            scrollTop: $($(this).attr('href')).offset().top - 32,
          },
          200,
          'swing'
        )

      });
    })(jQuery, console.log);
  }
}
