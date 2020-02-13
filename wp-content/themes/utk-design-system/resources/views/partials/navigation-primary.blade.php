@php

  Namespace App\Controllers;

  if (is_page_template('views/page-documentation.blade.php')) :

    $nav = Documentation::renderDocumentationNav();

    print $nav;

  endif;

@endphp
