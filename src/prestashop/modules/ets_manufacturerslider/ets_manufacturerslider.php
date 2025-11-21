<?php
/**
 * Copyright ETS Software Technology Co., Ltd
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 website only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses.
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future.
 *
 * @author ETS Software Technology Co., Ltd
 * @copyright  ETS Software Technology Co., Ltd
 * @license    Valid for 1 website (or project) for each purchase of license
 */

if (!defined('_PS_VERSION_'))
	exit;
class Ets_manufacturerslider extends Module
{
    private $_html;
    protected $secure_key;
    protected $fields_form;
    public function __construct()
	{
		$this->name = 'ets_manufacturerslider';
		$this->tab = 'front_office_features';
		$this->version = '1.0.7';
		$this->author = 'PrestaHero';
		$this->need_instance = 0;
		$this->bootstrap = true;

		parent::__construct();

		$this->displayName = $this->l('Manufacturer carousel slider PRO');
		$this->description = $this->l('Display manufacturer logos in a carousel slider');
$this->refs = 'https://prestahero.com/';
		$this->ps_versions_compliancy = array('min' => '1.6.0.0', 'max' => _PS_VERSION_);   
        $this->_html = ''; 
    }
    /**
	 * @see Module::install()
	 */
	public function install()
	{
	    $this->_installDb();
        return parent::install() 
               && $this->registerHook('displayHome') 
               && $this->registerHook('displayHeader')
               && $this->registerHook('displayBackofficeHeader')
               && $this->registerHook('etsManufacturer');
    }
    
    /**
	 * @see Module::uninstall()
	 */
	public function uninstall()
	{
	    $this->_uninstallDb();
        return parent::uninstall();
    }
    
    private function _installDb()
    {
        $languages = Language::getLanguages(false);
        $YBC_MF_TITLES = array();
        foreach($languages as $l)
        {
            $YBC_MF_TITLES[$l['id_lang']] = $this->l('Our brands');
        }  
        Configuration::updateValue('YBC_MF_TITLE', $YBC_MF_TITLES);
        Configuration::updateValue('YBC_MF_MANUFACTURER_NUMBER', '');
        Configuration::updateValue('YBC_MF_PER_ROW_DESKTOP', 4);        
        Configuration::updateValue('YBC_MF_PER_ROW_TABLET',3);
        Configuration::updateValue('YBC_MF_PER_ROW_MOBILE',1);
        Configuration::updateValue('YBC_MF_SHOW_NAME', 0);
        Configuration::updateValue('YBC_MF_MANUFACTURER_ORDER', 'name_asc');
        Configuration::updateValue('YBC_MF_MANUFACTURER_HOOK','default');
        Configuration::updateValue('YBC_MF_SHOW_NAV',1);
        Configuration::updateValue('YBC_MF_AUTO_PLAY',1);
        Configuration::updateValue('YBC_MF_SPEED',3000);
        Configuration::updateValue('YBC_MF_PAUSE',0);
        Configuration::updateValue('YBC_MF_MANUFACTURERS',0);
    }      
    private function _uninstallDb()
    {
        Configuration::deleteByName('YBC_MF_TITLE');
        Configuration::deleteByName('YBC_MF_MANUFACTURER_NUMBER');
        Configuration::deleteByName('YBC_MF_MANUFACTURER_ORDER');
        Configuration::deleteByName('YBC_MF_PER_ROW_DESKTOP');
        Configuration::deleteByName('YBC_MF_PER_ROW_MOBILE');
        Configuration::deleteByName('YBC_MF_PER_ROW_TABLET');
        Configuration::deleteByName('YBC_MF_SHOW_NAME');
        Configuration::deleteByName('YBC_MF_MANUFACTURER_HOOK');
        Configuration::deleteByName('YBC_MF_SHOW_NAV');
        Configuration::deleteByName('YBC_MF_AUTO_PLAY');
        Configuration::deleteByName('YBC_MF_SPEED');
        Configuration::deleteByName('YBC_MF_PAUSE');
        Configuration::deleteByName('YBC_MF_MANUFACTURERS');
    }
    /**
     * Module backend html 
     */
    public function getContent()
	{
	   $languages = Language::getLanguages(false);
       $id_lang_default = (int)Configuration::get('PS_LANG_DEFAULT');
	   $errors = array();
       if(Tools::isSubmit('saveConfig'))
       {
            $YBC_MF_TITLES = array();
            foreach($languages as $l)
            {
                $YBC_MF_TITLES[$l['id_lang']] = trim(Tools::getValue('YBC_MF_TITLE_'.$l['id_lang'])) !='' ? trim(Tools::getValue('YBC_MF_TITLE_'.$l['id_lang'])) : trim(Tools::getValue('YBC_MF_TITLE_'.$id_lang_default));
            }   
            $YBC_MF_MANUFACTURER_NUMBER = trim(Tools::getValue('YBC_MF_MANUFACTURER_NUMBER'));
            $YBC_MF_MANUFACTURER_ORDER = Tools::strtolower(trim(Tools::getValue('YBC_MF_MANUFACTURER_ORDER','name_asc')));
            $YBC_MF_PER_ROW_DESKTOP = trim(Tools::getValue('YBC_MF_PER_ROW_DESKTOP',4));
            $YBC_MF_PER_ROW_MOBILE = trim(Tools::getValue('YBC_MF_PER_ROW_MOBILE',1));
            $YBC_MF_PER_ROW_TABLET = trim(Tools::getValue('YBC_MF_PER_ROW_TABLET',3));
            $YBC_MF_SHOW_NAME = (int)Tools::getValue('YBC_MF_SHOW_NAME') ? 1 : 0;
            if(trim(Tools::getValue('YBC_MF_TITLE_'.$id_lang_default)) == '')                
                $errors[] = $this->l('You need to enter block title');
            if($YBC_MF_MANUFACTURER_NUMBER == '0')
                $errors[] = $this->l('You need to enter number of manufacturers greater than zero');
            elseif($YBC_MF_MANUFACTURER_NUMBER && !Validate::isUnsignedInt($YBC_MF_MANUFACTURER_NUMBER))
                $errors[] = $this->l('Manufacturer number is not valid');
            else
                $YBC_MF_MANUFACTURER_NUMBER = $YBC_MF_MANUFACTURER_NUMBER ? (int)$YBC_MF_MANUFACTURER_NUMBER : '';
            if(!$YBC_MF_PER_ROW_DESKTOP)
                $errors[] = $this->l('Per row on desktop is required');
            elseif(!Validate::isUnsignedInt($YBC_MF_PER_ROW_DESKTOP))
                $errors[] = $this->l('Per row on desktop is not valid');            
            if(!$YBC_MF_PER_ROW_TABLET)
                $errors[] = $this->l('Per row on tablet is required');
            elseif(!Validate::isUnsignedInt($YBC_MF_PER_ROW_TABLET))
                $errors[] = $this->l('Per row on tablet is not valid');
            if(!$YBC_MF_PER_ROW_MOBILE)
                $errors[] = $this->l('Per row on mobile is required');
            elseif(!Validate::isUnsignedInt($YBC_MF_PER_ROW_MOBILE))
                $errors[] = $this->l('Per row on mobile is not valid');
            if((int)Tools::getValue('YBC_MF_AUTO_PLAY')){
                if(!(int)Tools::getValue('YBC_MF_SPEED'))
                    $errors[] = $this->l('Slider autoplay speed is required');
                elseif(!Validate::isUnsignedInt(Tools::getValue('YBC_MF_SPEED')))
                    $errors[] = $this->l('Slider autoplay speed is not valid');
            }

            if(!$errors)
            {
                Configuration::updateValue('YBC_MF_TITLE',$YBC_MF_TITLES);
                Configuration::updateValue('YBC_MF_MANUFACTURER_NUMBER',$YBC_MF_MANUFACTURER_NUMBER); 
                Configuration::updateValue('YBC_MF_MANUFACTURER_ORDER',$YBC_MF_MANUFACTURER_ORDER); 
                Configuration::updateValue('YBC_MF_PER_ROW_DESKTOP',$YBC_MF_PER_ROW_DESKTOP); 
                Configuration::updateValue('YBC_MF_PER_ROW_MOBILE',$YBC_MF_PER_ROW_MOBILE);
                Configuration::updateValue('YBC_MF_PER_ROW_TABLET',$YBC_MF_PER_ROW_TABLET);  
                Configuration::updateValue('YBC_MF_SHOW_NAME',$YBC_MF_SHOW_NAME);
                Configuration::updateValue('YBC_MF_SHOW_NAV',(int)Tools::getValue('YBC_MF_SHOW_NAV') ? 1 : 0);
                Configuration::updateValue('YBC_MF_AUTO_PLAY',(int)Tools::getValue('YBC_MF_AUTO_PLAY') ? 1 : 0);
                Configuration::updateValue('YBC_MF_PAUSE',(int)Tools::getValue('YBC_MF_PAUSE') ? 1 : 0);
                Configuration::updateValue('YBC_MF_SPEED',Tools::getValue('YBC_MF_SPEED'));
                Configuration::updateValue('YBC_MF_MANUFACTURER_HOOK',Tools::getValue('YBC_MF_MANUFACTURER_HOOK'));
                Configuration::updateValue('YBC_MF_MANUFACTURERS', implode(',',Tools::getValue('YBC_MF_MANUFACTURERS')));
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
            }
            else
                $this->_html .= $this->displayError(implode('<br />', $errors));  
        }
        $this->renderConfigForm();
        return $this->_html.$this->display(__FILE__,'admin.tpl').$this->displayIframe();
    }
    private function renderConfigForm()
    {
        $manufacturers=$this->getManufactures('name asc',false,true);
        $list_manufactures=array(
        );
        $list_manufactures[0]=array(
            'id'=>'0',
            'name'=>$this->l('All'),
        );
        if($manufacturers) {
            foreach ($manufacturers as $manufacture) {
                $list_manufactures[] = array(
                    'id' => $manufacture['id_manufacturer'],
                    'name' => $manufacture['name'],
                );
            }
        }
        $deviceRows = array(
            array(
                'id' => 1,
                'name' => 1
            ),
            array(
                'id' => 2,
                'name' => 2
            ),
            array(
                'id' => 3,
                'name' => 3
            ),
            array(
                'id' => 4,
                'name' => 4
            ),
            array(
                'id' => 5,
                'name' => 5
            ),
            array(
                'id' => 6,
                'name' => 6
            ),
        );
        $autoplaySlider = Tools::isSubmit('saveConfig') ? (int)Tools::getValue('YBC_MF_AUTO_PLAY') : (int)Configuration::get('YBC_MF_AUTO_PLAY');
        $fields_form = array(
			'form' => array(
				'legend' => array(
					'title' => $this->l('Manufacturer slider configuration'),
					'icon' => 'icon-AdminAdmin'
				),
				'input' => array(
                    array(
    						'type' => 'text',
    						'label' => $this->l('Block title'),
    						'name' => 'YBC_MF_TITLE',
                            'required' => true,
                            'lang' => true        
                        ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Manufacturers'),
                        'name' => 'YBC_MF_MANUFACTURERS[]',
                        'multiple' => true,
                        'options' => array(
                            'query' => $list_manufactures,
                            'id' => 'id',
                            'name' => 'name'
                        )
                    ),    
                    array(
						'type' => 'text',
						'label' => $this->l('Number of manufacturers to display'),
						'name' => 'YBC_MF_MANUFACTURER_NUMBER',
                        'col' => 2,
                        'desc' => $this->l('Leave blank to display all'),
                    ),
                    array(
						'type' => 'select',
						'label' => $this->l('Manufacturers per row on desktop'),
						'name' => 'YBC_MF_PER_ROW_DESKTOP',
                        'col' => 3,
                        'options' => array(
                            'id' => 'id',
                            'name' => 'name',
                            'query' => $deviceRows
                        )
                    ),                      
                    array(
						'type' => 'select',
						'label' => $this->l('Manufacturers per row on tablet'),
						'name' => 'YBC_MF_PER_ROW_TABLET',
                        'col' => 3,
                        'options' => array(
                            'id' => 'id',
                            'name' => 'name',
                            'query' => $deviceRows
                        )
                    ), 
                    array(
						'type' => 'select',
						'label' => $this->l('Manufacturers per row on mobile'),
						'name' => 'YBC_MF_PER_ROW_MOBILE',
                        'col' => 3,
                        'options' => array(
                            'id' => 'id',
                            'name' => 'name',
                            'query' => $deviceRows
                        )
                    ), 
                    array(
						'type' => 'select',
						'label' => $this->l('Order by'),
						'name' => 'YBC_MF_MANUFACTURER_ORDER',                        
                		'options' => array(
                			'query' => array(
                                array(
                                    'id_option' => 'name_asc',              
                                    'name' => $this->l('Manufacturer name ASC') 
                                ),
                                array(
                                    'id_option' => 'name_desc',              
                                    'name' => $this->l('Manufacturer name DESC') 
                                ),
                                array(
                                    'id_option' => 'manu_asc',              
                                    'name' => $this->l('Manufacturer ID ASC') 
                                ),
                                array(
                                    'id_option' => 'manu_desc',              
                                    'name' => $this->l('Manufacturer ID DESC') 
                                ),                                
                            ),
                			'id' => 'id_option',
                			'name' => 'name'
               		     )
                    ),                    
                    array(
						'type' => 'switch',
						'label' => $this->l('Show manufacturer name'),
						'name' => 'YBC_MF_SHOW_NAME',
                        'is_bool' => true,
						'values' => array(
							array(
								'id' => 'active_on',
								'value' => 1,
								'label' => $this->l('Yes')
							),
							array(
								'id' => 'active_off',
								'value' => 0,
								'label' => $this->l('No')
							)
						)					
					), 
                    array(
						'type' => 'switch',
						'label' => $this->l('Enable slider navigation buttons'),
						'name' => 'YBC_MF_SHOW_NAV',
                        'is_bool' => true,
						'values' => array(
							array(
								'id' => 'active_on',
								'value' => 1,
								'label' => $this->l('Yes')
							),
							array(
								'id' => 'active_off',
								'value' => 0,
								'label' => $this->l('No')
							)
						)					
					), 
                    array(
						'type' => 'switch',
						'label' => $this->l('Auto play slider'),
						'name' => 'YBC_MF_AUTO_PLAY',
                        'is_bool' => true,
						'values' => array(
							array(
								'id' => 'active_on',
								'value' => 1,
								'label' => $this->l('Yes')
							),
							array(
								'id' => 'active_off',
								'value' => 0,
								'label' => $this->l('No')
							)
						)					
					),
                    array(
						'type' => 'switch',
						'label' => $this->l('Pause on mouse hover'),
						'name' => 'YBC_MF_PAUSE',
                        'form_group_class' => 'autoplay_slider_item'.(!$autoplaySlider ? ' hide' : ''),
                        'is_bool' => true,
						'values' => array(
							array(
								'id' => 'active_on',
								'value' => 1,
								'label' => $this->l('Yes')
							),
							array(
								'id' => 'active_off',
								'value' => 0,
								'label' => $this->l('No')
							)
						)					
					),
                    array(
						'type' => 'text',
						'label' => $this->l('Slider autoplay speed'),
                        'col' => 2,
						'form_group_class' => 'autoplay_slider_item'.(!$autoplaySlider ? ' hide' : ''),
						'name' => 'YBC_MF_SPEED',
                        'suffix' => $this->l('milliseconds'),
                        'required' => true,
                    ),  
                    array(
						'type' => 'select',
						'label' => $this->l('Hook to'),
						'name' => 'YBC_MF_MANUFACTURER_HOOK',
                		'options' => array(
                			'query' => array(
                                array(
                                    'id_option' => 'default',              
                                    'name' => $this->l('Default') 
                                ),
                                array(
                                    'id_option' => 'custom_hook',              
                                    'name' => $this->l('Custom hook') 
                                ),                                
                            ),
                			'id' => 'id_option',
                			'name' => 'name'
               		     ),
                         'desc' => $this->l('Put {hook h=\'etsManufacturer\'} to .tpl files where you want to display the manufacturer logos'),
                    ),                  
                ),
                'submit' => array(
					'title' => $this->l('Save'),
				)
            ),
		);
        
        $helper = new HelperForm();
		$helper->show_toolbar = false;
		$helper->table = $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
		$this->fields_form = array();
		$helper->module = $this;
		$helper->identifier = $this->identifier;
		$helper->submit_action = 'saveConfig';
		$helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$language = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->override_folder = '/';
        $languages = Language::getLanguages(false);
        /**
         * Get field values 
         */
        
        $fields = array();
        if(Tools::isSubmit('saveConfig'))
        {
            foreach($languages as $l)
            {
                $fields['YBC_MF_TITLE'][$l['id_lang']] = Tools::getValue('YBC_MF_TITLE_'.$l['id_lang'],Tools::getValue('YBC_MF_TITLE_'.Configuration::get('PS_LANG_DEFAULT')));    
            }             
            $fields['YBC_MF_MANUFACTURER_NUMBER'] = Tools::getValue('YBC_MF_MANUFACTURER_NUMBER');
            $fields['YBC_MF_MANUFACTURER_ORDER'] = Tools::getValue('YBC_MF_MANUFACTURER_ORDER', 'name_asc');  
            $fields['YBC_MF_PER_ROW_DESKTOP'] = Tools::getValue('YBC_MF_PER_ROW_DESKTOP', 4);
            $fields['YBC_MF_PER_ROW_MOBILE'] = Tools::getValue('YBC_MF_PER_ROW_MOBILE', 2);   
            $fields['YBC_MF_PER_ROW_TABLET'] = Tools::getValue('YBC_MF_PER_ROW_TABLET', 3);               
            $fields['YBC_MF_SHOW_NAME'] = Tools::getValue('YBC_MF_SHOW_NAME',0);
            $fields['YBC_MF_SHOW_NAV'] = Tools::getValue('YBC_MF_SHOW_NAV',1);
            $fields['YBC_MF_AUTO_PLAY'] = Tools::getValue('YBC_MF_AUTO_PLAY',1);
            $fields['YBC_MF_PAUSE'] = Tools::getValue('YBC_MF_PAUSE',1);
            $fields['YBC_MF_SPEED'] = Tools::getValue('YBC_MF_SPEED');
        }
        else
        {
            foreach($languages as $l)
            {
                $fields['YBC_MF_TITLE'][$l['id_lang']] = Configuration::get('YBC_MF_TITLE', $l['id_lang']);    
            } 
            $fields['YBC_MF_MANUFACTURER_NUMBER'] = Configuration::get('YBC_MF_MANUFACTURER_NUMBER') != '' ? Configuration::get('YBC_MF_MANUFACTURER_NUMBER') : '';
            $fields['YBC_MF_MANUFACTURER_ORDER'] = Configuration::get('YBC_MF_MANUFACTURER_ORDER') ? Configuration::get('YBC_MF_MANUFACTURER_ORDER') : 'name_asc';
            $fields['YBC_MF_PER_ROW_DESKTOP'] = Configuration::get('YBC_MF_PER_ROW_DESKTOP') ? Configuration::get('YBC_MF_PER_ROW_DESKTOP') : 4;
            $fields['YBC_MF_PER_ROW_MOBILE'] = Configuration::get('YBC_MF_PER_ROW_MOBILE') ? Configuration::get('YBC_MF_PER_ROW_MOBILE') : 2;
            $fields['YBC_MF_PER_ROW_TABLET'] = Configuration::get('YBC_MF_PER_ROW_TABLET') ? Configuration::get('YBC_MF_PER_ROW_TABLET') : 3;
            $fields['YBC_MF_SHOW_NAME'] = (int)Configuration::get('YBC_MF_SHOW_NAME') ? 1 : 0;
            $fields['YBC_MF_SHOW_NAV'] =(int)Configuration::get('YBC_MF_SHOW_NAV') ? 1 : 0; 
            $fields['YBC_MF_AUTO_PLAY'] = (int)Configuration::get('YBC_MF_AUTO_PLAY') ? 1 : 0;
            $fields['YBC_MF_PAUSE'] = (int)Configuration::get('YBC_MF_PAUSE') ? 1 : 0; 
            $fields['YBC_MF_SPEED'] = Configuration::get('YBC_MF_SPEED');
        }
        $fields['YBC_MF_MANUFACTURERS[]'] = Tools::getValue('YBC_MF_MANUFACTURERS',explode(',',Configuration::get('YBC_MF_MANUFACTURERS')));       
        $fields['YBC_MF_MANUFACTURER_HOOK'] = Tools::getValue('YBC_MF_MANUFACTURER_HOOK',Configuration::get('YBC_MF_MANUFACTURER_HOOK'));
        $helper->tpl_vars = array(
			'base_url' => $this->context->shop->getBaseURL(),
			'language' => array(
				'id_lang' => $language->id,
				'iso_code' => $language->iso_code
			),
			'fields_value' => $fields,
			'languages' => $this->context->controller->getLanguages(),
			'id_language' => $this->context->language->id
        );        
        $this->_html .= $helper->generateForm(array($fields_form));	
    }
    
    /** 
     * Hooks 
     */
     public function getManufactures($orderby = 'name asc', $limit = false,$all=false)
     {
        $sql = "SELECT id_manufacturer, name 
                FROM "._DB_PREFIX_."manufacturer 
                WHERE active = 1 ".(Configuration::get('YBC_MF_MANUFACTURERS') && !in_array(0,explode(',',Configuration::get('YBC_MF_MANUFACTURERS')))&&!$all? " AND id_manufacturer in (".pSQL(Configuration::get('YBC_MF_MANUFACTURERS')).")":"" )." 
                ORDER BY ".pSQL($orderby) . 
                ($limit ? ' LIMIT 0,'.(int)$limit : '');
        $ms = Db::getInstance()->executeS($sql);
        if($ms)
            foreach($ms as &$m)
            {
                $m['link_rewrite'] = Tools::str2url($m['name']);
            }
        return $ms;
     }
     protected function _prepareHook()
     {        
        if(Configuration::get('YBC_MF_MANUFACTURERS'))
            return;
        switch(Configuration::get('YBC_MF_MANUFACTURER_ORDER'))
        {
            case 'name_desc':
                $order = 'name desc';
                break;
            case 'manu_asc':
                $order = 'id_manufacturer asc';
                break;
            case 'manu_desc':
                $order = 'id_manufacturer desc';
                break;
            default:
                $order = 'name asc';
                break;
        }
        $manufacturers = $this->getManufactures($order, (int)Configuration::get('YBC_MF_MANUFACTURER_NUMBER') > 0 ? (int)Configuration::get('YBC_MF_MANUFACTURER_NUMBER') : false);
        foreach ($manufacturers as &$manufacturer)
		{		
            if(file_exists(_PS_MANU_IMG_DIR_.$manufacturer['id_manufacturer'].'.jpg'))
                $manufacturer['image'] = _THEME_MANU_DIR_.$manufacturer['id_manufacturer'].'.jpg';
            else
                $manufacturer['image'] = $this->_path.'images/default_logo.jpg';
		}
		$this->smarty->assign(array(
			'manufacturers' => $manufacturers,
			'YBC_MF_TITLE' => Configuration::get('YBC_MF_TITLE', (int)$this->context->language->id),
			'YBC_MF_SHOW_NAME' => (int)Configuration::get('YBC_MF_SHOW_NAME'),
            'YBC_MF_PER_ROW_DESKTOP' => (int)Configuration::get('YBC_MF_PER_ROW_DESKTOP'),
            'YBC_MF_PER_ROW_MOBILE' => (int)Configuration::get('YBC_MF_PER_ROW_MOBILE'),
            'YBC_MF_PER_ROW_TABLET' => (int)Configuration::get('YBC_MF_PER_ROW_TABLET'),
            'YBC_MF_SHOW_NAV' => (int)Configuration::get('YBC_MF_SHOW_NAV'),
            'YBC_MF_AUTO_PLAY' => (int)Configuration::get('YBC_MF_AUTO_PLAY'),
            'YBC_MF_PAUSE' => (int)Configuration::get('YBC_MF_PAUSE'),
            'YBC_MF_SPEED' => (int)Configuration::get('YBC_MF_SPEED') > 0 ? (int)Configuration::get('YBC_MF_SPEED') : 5000,
            'link' => $this->context->link,
            'view_all_mnf' => $this->context->link->getPageLink('manufacturer')
		));
        return $this->display(__FILE__, 'manufacturers.tpl');
     }
     public function hookEtsManufacturer()
     {
        if(Configuration::get('YBC_MF_MANUFACTURER_HOOK')=='custom_hook')
            return $this->_prepareHook();
     }
     public function hookDisplayBackOfficeHeader()
    {
        $this->context->controller->addCSS($this->_path.'views/css/admin.css','all');
        if(Tools::getValue('controller') == 'AdminModules' && Tools::getValue('configure') == 'ets_manufacturerslider'){
            $this->smarty->assign(array(
                'linkAdminJs' => $this->_path.'views/js/admin.js',
            ));
        }
        return $this->display(__FILE__, 'admin_head.tpl');
    }
     public function hookDisplayHome()
     {
        if(Configuration::get('YBC_MF_MANUFACTURER_HOOK')=='default')
            return $this->_prepareHook();
     }
     public function hookDisplayHeader()
     {
        if(Configuration::get('YBC_MF_MANUFACTURER_HOOK')=='custom_hook' || (Configuration::get('YBC_MF_MANUFACTURER_HOOK')=='default' && Tools::getValue('controller')=='index'))
        {
            $this->context->controller->addCSS($this->_path.'views/css/ets_manufacturerslider.css','all');
            $this->context->controller->addJS($this->_path.'views/js/owl.carousel.js'); 
            $this->context->controller->addJS($this->_path.'views/js/ets_manufacturerslider.js');            
            $this->context->controller->addCSS($this->_path.'views/css/owl.carousel.css','all');
            $this->context->controller->addCSS($this->_path.'views/css/owl.theme.css','all');
            $this->context->controller->addCSS($this->_path.'views/css/owl.transitions.css','all');
            
        }   
     }

    public function displayIframe()
    {
        switch($this->context->language->iso_code) {
            case 'en':
                $url = 'https://cdn.prestahero.com/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            case 'it':
                $url = 'https://cdn.prestahero.com/it/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            case 'fr':
                $url = 'https://cdn.prestahero.com/fr/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            case 'es':
                $url = 'https://cdn.prestahero.com/es/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            default:
                $url = 'https://cdn.prestahero.com/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
        }
        $this->smarty->assign(
            array(
                'url_iframe' => $url
            )
        );
        return $this->display(__FILE__,'iframe.tpl');
    }
}