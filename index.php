<?php
require('./model/database.php');
require('./model/item_db.php');
require('./model/category_db.php');
include('./view/header.php');
include('./view/footer.php');
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
	$action = filter_input(INPUT_GET, 'action');
	if($action == NULL){
		$action = 'list_items';
	}
}
//show all items
if ($action == 'list_items') {
	$category_id = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
	
	$categories = get_categories();
	$category_name = get_category_name($category_id);
	$items = get_items_by_category($category_id);
	include('item_list.php');
	
} else if ($action == 'view_item') {
	$item_id = filter_input(INPUT_GET, 'item_id', FILTER_VALIDATE_INT);
	if($item_id == NULL || $item_id == FALSE) {
		$error = 'Missing or incorrect item id.';
		include('error.php');
	} else {
		$categories = get_categories();
		$items = get_item($item_id);
		
		//get item data
		$description = $item['description'];
		$title = $item['title'];
		include = ('todolist.php');
	}
	//add item
} else if ($action == 'add_item'){
	$categories = get_categories();
	$items = get_items_by_category(NULL);
	$title = filter_input(INPUT_POST, 'title');
	$description = filter_input(INPUT_POST, 'description');
	$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
	if($title == NULL || $description == NULL || $category_id == NULL || $category_id == FALSE) {
		include = ('error.php');
	}else{
		add_item($title, $description, $category_id);
	}
	//delete item
}else if ($action == 'delete_item')
	$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
	$item_id = filter_input(INPUT_POST, 'item_id', FILTER_VALIDATE_INT);
	if($title == NULL || $description == NULL || $category_id = NULL || $category_id == FALSE) {
		include = ('error.php');
	} else {
		delete_item($title, $description, $category_id);
	}
	//show categories
}else if ($action == 'list_categories') {
	$categories = get_categories();
	include = ('category_list.php');
	//add categories
}else if {$action == 'add_category'){
	$category_name = filter_input(INPUT_POST, 'category_name');
	if ($category_name == NULL){
		include ('error.php')
	} else {
		add_category($category_name);
		//delete categories
}else if ($action == 'delete_category'){
	$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
	delete_category($category_id);
}
?>
