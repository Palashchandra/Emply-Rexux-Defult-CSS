add_action('init', 'css_remove_extendify');

function css_remove_extendify(){
    $file_path = ABSPATH . 'wp-content/plugins/redux-framework/extendify-sdk/public/extendify-utilities.css';
    if(is_file($file_path)){
        file_put_contents($file_path , '');
    }
}