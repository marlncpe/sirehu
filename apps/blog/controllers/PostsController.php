<?php

namespace Sirehu\Blog\Controllers;

use Sirehu\Blog\Models\BlogPosts;
use Phalcon\Paginator\Adapter\Model as PaginatorModel;

class PostsController extends ControllerBase
{    
    public function indexAction()
    {
    	parent::indexAction();
    	$currentPage = (int) $_GET["page"];
		$posts = BlogPosts::find();
		$paginator   = new PaginatorModel(
		    array(
		        "data"  => $posts,
		        "limit" => 4,
		        "page"  => $currentPage
		    )
		);
		$this->view->page = $paginator->getPaginate();
    
    }

    public function searchidAction(){
    	parent::index();
    	$currentPost = (int) $_GET["post"];
    	$post = BlogPosts::findFirst("id='".$currentPost."'");
    	$this->view->post = $post;
    }

    public function categoryidAction(){
    	parent::index();
    	$CategoryPost = (int) $_GET["category"];

		$category = BlogPosts::find("id_category='".$CategoryPost."'");

		$paginator   = new PaginatorModel(
		    array(
		        "data"  => $category,
		        "limit" => 4,
		        "page"  => $currentPage
		    )
		);
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

