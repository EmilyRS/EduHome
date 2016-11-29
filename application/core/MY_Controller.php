<?php
class MY_Controller extends CI_Controller {
	
	public $data = array();
    protected $langs = array();
    protected $default_lang;
    protected $current_lang;
		function __construct() {
			parent::__construct();
			$this->data['errors'] = array();
			$this->data['site_name'] = config_item('site_name');
			
			#sitting up the language
		    $this->load->model('language_m');
		    $available_languages = $this->language_m->get();
		    if(isset($available_languages))
		    {
		      foreach($available_languages as $lang)
		      {
		        $this->langs[$lang->slug] = array('id'=>$lang->id_language,
										        'slug'=>$lang->slug,
										        'language_directory'=>$lang->language_directory,
										        'language_code'=>$lang->language_code,
										        'default'=>$lang->default,
												'name'=>$lang->language_name);
		        if($lang->default == '1')
				  $this->default_lang = $lang->slug;
		      }
		    }
		 
		    $lang_slug = $this->uri->segment(1);
		    if(isset($lang_slug) && array_key_exists($lang_slug, $this->langs))
		    {
		      $this->current_lang = $lang_slug;
		      $_SESSION['set_language'] = $lang_slug;
		    }
		    elseif(isset($_SESSION['set_language']))
		    {
		      $this->current_lang = $_SESSION['set_language'];
		    }
		    else
		    {
		      $this->current_lang = $this->default_lang;
		      $_SESSION['set_language'] = $this->default_lang;
		    }
		    // store the languages as a $data key, just in case we need them in our views
		    $this->data['langs'] = $this->langs;
		    // current language in a $data key
		    $this->data['current_lang'] = $this->langs[$this->current_lang];
		 
		    // For links inside our views we only need the lang slug. If the current language is the default language we don't need to append the language slug to our links
		    if($this->current_lang != $this->default_lang)
		    {
		      $this->data['lang_slug'] = $this->current_lang.'/';
		    }
		    else
		    {
		      $this->data['lang_slug'] = '';
		    }
			
		}
}