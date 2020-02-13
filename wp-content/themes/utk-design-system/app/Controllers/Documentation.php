<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Documentation extends Controller
{
    private function documentationPosts()
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
                $structure[$slug]['items'][$key]['slug'] = $post->post_name;
                $structure[$slug]['items'][$key]['url']   = get_permalink($post->ID);
            endforeach;
        endforeach;

        return $structure;
    }

    public static function renderDocumentationNav()
    {

        $menu = self::documentationPosts();

        $output = '<nav class="documentation-nav" id="utk-documentation-nav">';

        foreach ($menu as $section) :
            if ($section['items']) :
                $output .= '<h3>' . $section['title'] . '</h3>';
                $output .= '<ul>';

                foreach ($section['items'] as $item) :
                    $output .= '<li>';
                        $output .= '<a href="#utk-' . $item['slug'] .'">' . $item['title'] . '</a>';
                    $output .= '</li>';
                endforeach;

                $output .= '</ul>';
            endif;
        endforeach;

        return $output;
    }

    public static function renderDocumentationPosts()
    {

        $posts = self::documentationPosts();

        $output = '<div class="documentation-posts" id="utk-documentation-posts">';

        $output .= '<h2>Inventory</h2>';

        foreach ($posts as $slug => $section) :
            if ($section['items']) :
                $output .= '<div class="documentation-section" id="utk-' . $slug .'">';

                $output .= '<h3>' . $section['title'] . '</h3>';

                foreach ($section['items'] as $item) :
                    $post = get_post($item['id']);
                    $slug = $post->post_name;

                    $output .= '<div class="documentation-item" id="utk-' . $slug .'">';

                        $output .= '<h4>' . $post->post_title . '</h4>';
                        $output .= '<div>' . $post->post_content . '</div>';

                    $output .= '</div>';
                endforeach;
                $output .= '</div>';
            endif;
        endforeach;

        $output .= '</div>';

        return $output;
    }
}
