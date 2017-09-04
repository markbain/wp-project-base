<?php

function mbdmaster_languages_list(){
    if ( function_exists( 'icl_get_languages' ) ) {
             $languages = icl_get_languages('skip_missing=0&orderby=code');
        if(!empty($languages)){
            echo '<div id="language-selector"><ul>';
            foreach($languages as $l){
                if(!$l['active']) {
                	echo '<li class="active">';
                } else {
                	echo '<li class="inactive">';
                }
                if(!$l['active']) echo '<a href="'.$l['url'].'">';
                echo icl_disp_language($l['native_name']);
                if(!$l['active']) echo '</a>';
                echo '</li>';
            }
            echo '</ul></div>';
        }
    }
}