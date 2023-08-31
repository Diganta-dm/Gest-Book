<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   Gest Book Bundle
 * @author    Diganta Mondal
 * @license   GNU/LGPL
 */


/**
 * Namespace
 */
namespace Diganta\GestbookBundle\FeCte;

use Diganta\GestbookBundle\Model\GestBookCommentModel;
use Diganta\GestbookBundle\Model\GestBookModel;

/**
 * Class GestBook
 *
 * @author     Diganta Mondal
 * @package    GestBook Bundle
 */
class GestBook extends \ContentElement
{
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'gest-book';

    /**
     * Display a wildcard in the back end
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $objTemplate = new \BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '###  Gustbook BUndle - Gestbook  ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&table=tl_module&act=edit&id=' . $this->id;

            return $objTemplate->parse();
        }
        return parent::generate();
    }

    /**
     * Generate the content
     */
    protected function compile()
    {
        // Add public assets to global list
        $GLOBALS['TL_CSS'][] = 'bundles/gestbook/css/bootstrap.min.css';
        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/gestbook/js/bootstrap.min.js';

        //Fatch All Details from 
        $objGestBookDetails = GestBookModel::findAll();


        //Store data 

        if (array_key_exists('comment',$_POST) && \Input::post('comment') != null) {
            $objComment                 = new GestBookCommentModel();
            $objComment->tstamp         = time();
            $objComment->pid            = \Input::post('id');
            $objComment->comment    = \Input::post('comment');
            $objComment->save(); 
        }

        //Send value in Template
        $this->Template->objGestBookDetails = $objGestBookDetails;

    }


}
class_alias(GestBook::class, 'GestBook');