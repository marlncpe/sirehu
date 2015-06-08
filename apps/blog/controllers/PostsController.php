<?php

namespace Sirehu\Blog\Controllers;

use Sirehu\Blog\Models\BlogPosts;


class PostsController extends \Phalcon\Mvc\Controller
{

	public static function number_format($data)
    {
        //...
        return $transformedData="nada";
    }
    
    public function indexAction()
    {
    	$this->view->posts = BlogPosts::find();

    }
    /*function myTruncate($string, $limit, $break=”.”, $pad=”…”) { 
	    // return with no change if string is shorter than $limit if(strlen($string) <= $limit) return $string; 
	    // is $break present between $limit and the end of the string? 
	    if(false !== ($breakpoint = strpos($string, $break, $limit))) { 
	    	if($breakpoint < strlen($string) – 1) { 
	    		$string = substr($string, 0, $breakpoint) . $pad; 
	    	} 
	    } 
	    return $string; 
	}*/
}

