<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array (
  'pi_name' => 'Relative URL',
  'pi_version' => '1.0',
  'pi_author' => 'Justin Skolnick',
  'pi_author_url' => 'http://justinskolnick.com',
  'pi_description' => 'Strips URLs of their bases.',
  'pi_usage' => relative_url::usage()
);

class Relative_URL {
  
  public $return_data = '';
  
  public function __construct() {
    $this->EE = &get_instance();
    $content = $this->EE->TMPL->tagdata;
    
    $pattern = '/^http(s?)\:\/\/[a-z0-9-\.]+\//si';
    $output  = '/';
    
    $this->return_data = preg_replace($pattern, $output, $content);
  }
  
  public static function usage() {
    return '{exp:relative_url}http://example.com/foo/bar{/exp:relative_url}';
  }
  
}
?>