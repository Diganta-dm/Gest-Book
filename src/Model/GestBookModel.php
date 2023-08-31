<?php

namespace Diganta\GestbookBundle\Model;
use \Contao\Model;
/*
 * Class GestBookModel
 *
 * @author Diganta Mondal
 */

class GestBookModel extends Model
{
    /**
     * Table name
     * @var string
     */
    protected static $strTable = 'tl_gestbook';
   
    /**
    * Author: Diganta Mondal
    * 
    * @param 
    * 
    * @return @Model Object
    **/

    
}

class_alias(GestBookModel::class, 'GestBookModel');
