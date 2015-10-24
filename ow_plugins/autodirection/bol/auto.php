<?php

class AUTODIRECTION_BOL_Auto
{
    private static $classInstance;


    public static function getInstance()
    {
        if ( self::$classInstance === null )
        {
            self::$classInstance = new self();
        }

        return self::$classInstance;
    }



    public function bindEvents()
    {
    	OW::getEventManager()->bind(OW_EventManager::ON_BEFORE_DOCUMENT_RENDER, array($this, 'index'));
    }




    public function index()
    {
         $js = OW::getPluginManager()->getPlugin('autodirection')->getRootDir() . 'static/js/auto.js';
         $jsURL = OW::getPluginManager()->getPlugin('autodirection')->getStaticJsUrl() . 'auto.js';
         $DirectionFile = OW::getPluginManager()->getPlugin('autodirection')->getStaticCssUrl() . 'auto.css';

         if ( file_exists($js) )
         {
         
             $document = OW::getDocument();
             $document->addScript($jsURL, "text/javascript", 1);
             $document->addStyleSheet($DirectionFile. '?' . OW::getConfig()->getValue('base', 'cachedEntitiesPostfix'), 'all', (-10));
             
             
         }

         else
         {
            return;
         }
    }
}

