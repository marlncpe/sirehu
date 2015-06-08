<?php

namespace Sirehu\Blog\Controllers;

use Sirehu\Blog\Models\BlogPosts;
use Phalcon\Paginator\Adapter\Model as PaginatorModel;

class PostsController extends \Phalcon\Mvc\Controller
{    
    public function indexAction()
    {
    	//$this->view->posts = BlogPosts::find();
    	$currentPage = (int) $_GET["page"];

		// The data set to paginate
		$robots = BlogPosts::find();

		// Create a Model paginator, show 10 rows by page starting from $currentPage
		$paginator   = new PaginatorModel(
		    array(
		        "data"  => $robots,
		        "limit" => 4,
		        "page"  => $currentPage
		    )
		);

		// Get the paginated results
		$this->view->page = $paginator->getPaginate();
    
    }

    /*function myTruncate($string, $limit, $break=”.”, $pad=”…”) { 
	    if(false !== ($breakpoint = strpos($string, $break, $limit))) { 
	    	if($breakpoint < strlen($string) – 1) { 
	    		$string = substr($string, 0, $breakpoint) . $pad; 
	    	} 
	    } 
	    return $string; 
	}*/
}

