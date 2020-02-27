<?php include "./view/header.php';?>
<main>
<h1>Category List</h1>
<aside>
	<h2>Categories</h2>
	<nav>
	<ul>
	<?php foreach ($categories as $category) :?>
	<li>
	<a href="?category_id=<?php echo $category['categoryID'];
	<?php echo $category['categoryName'];?>
	</a>
	</li>
	<?php endforeach; ?>
	</ul>
	<nav>
</aside>

<p class="last_paragraph">
	<a href="?action=show_add_form">Add Category</a>
</p>
</section>
</main>
<?php include './view/footer.php':?>