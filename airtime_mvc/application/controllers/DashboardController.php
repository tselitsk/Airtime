<?php

class DashboardController extends Zend_Controller_Action
{

    public function init()
    {

    }

    public function indexAction()
    {
        // action body
    }

    public function streamPlayerAction()
    {
        $request = $this->getRequest();
        $baseUrl = $request->getBaseUrl();
        $baseDir = dirname($_SERVER['SCRIPT_FILENAME']);
        
        $this->view->headLink()->appendStylesheet($baseUrl.'/js/jplayer/skin/jplayer.blue.monday.css?'.filemtime($baseDir.'/js/jplayer/skin/jplayer.blue.monday.css'));
        $this->_helper->layout->setLayout('bare');

        $logo = Application_Model_Preference::GetStationLogo();
        if($logo){
            $this->view->logo = "data:image/png;base64,$logo";
        } else {
            $this->view->logo = "$baseUrl/css/images/airtime_logo_jp.png";
        }
    }

    public function helpAction()
    {
        // action body
    }

    public function aboutAction()
    {
        $this->view->airtime_version = Application_Model_Preference::GetAirtimeVersion();
    }

}

