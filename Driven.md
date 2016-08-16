_s
===

Custom page templates and using jQuery

To make a custom page template:
1. Create a new page in WordPress. (For this, I'll call the new page 'slider')
2. Duplicate the single.php and name it 'page-slider.php'
3. You can remove a ton of things from this page. It depends what you want from it. I'd suggest putting a random <h1>hi</h1> tag somewhere so you can see how the page works.

Using jQuery:
jQuery is built in with WordPress. To use jQuery on a single page, you can add it to the bottom of your custom page template. For example, at the bottom of 'page-slider.php,' you can add the following script tag and 'hi' should appear in the console.

    <script type="text/javascript">
      jQuery(function($){
        console.log('hi');
      });
    </script>

    </main><!-- #main -->
  </div><!-- #primary -->

For reference: https://developer.wordpress.org/themes/template-files-section/page-template-files/page-templates/
