<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController {

    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $layout = '//layouts/main';
    public $menu = array();
    public $title;
    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs = array();
    
    public function filters() {

        return array(
            'accessControl',
        );
    }

}
