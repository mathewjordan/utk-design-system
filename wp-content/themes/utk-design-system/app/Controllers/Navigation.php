<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Navigation extends Controller
{
    public static function documentationNav()
    {
        $categories = [
            'style' => 'Styles',
            'component' => 'Components',
            'layout' => 'Layout',
            'extras' => 'Extras'
        ];

        $structure = [];

        foreach ($categories as $slug => $category) :

            $args = [
                'posts_per_page'   => -1,
                'post_type'        => 'post',
                'category_name'    => $slug
            ];

            $posts = get_posts($args);

            $structure[$slug]['title'] = $category;

            foreach ($posts as $key => $post) :
                $structure[$slug]['items'][$key]['id']    = $post->ID;
                $structure[$slug]['items'][$key]['title'] = $post->post_title;
                $structure[$slug]['items'][$key]['url']   = get_permalink($post->ID);
            endforeach;

        endforeach;

        return self::renderNav($structure);

    }

    static function renderNav($menu) {

        $output = '<nav id="utk-documentation-nav">';

        foreach ($menu as $section) :

            if ($section['items']) :

                $output .= '<h3>' . $section['title'] . '</h3>';
                $output .= '<ul>';

                    foreach ($section['items'] as $item) :

                        $output .= '<li>';
                            $output .= '<a href="' . $item['url'] .'">' . $item['title'] . '</a>';
                        $output .= '</li>';
                        
                    endforeach;

                $output .= '</ul>';

            endif;

        endforeach;

        return $output;
    }
}
