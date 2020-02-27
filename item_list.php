<?php include './view/header.php':?>
<main>
<h1> Item List</h1>

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

<section>
<h2><?php echo $category_name; ?></h2>
<table>
	<tr>
		<th>Description</th>
		<th>Title</th>
		<th>$nbsp;</th>
	</tr>
	<?php foreach($items as $item) :?>
	<tr>
		<td><?php echo $item['itemID'];?></td>
		<td><?php echo $item['title'];?></td>
		<td><form action="." method="post">
			<input type="hidden" name = "action"
				value = "delete_item">
			<input type="hidden" name="item_id"
				value = "<?php echo $item['itemID'];?>
			<input type="hidden" name="category_id"
				value = "<?php echo $item['categoryID'];?>
			<input type ="submit" value="Delete">
			</form></td>
		</tr>
		<?php endforeach; ?>
</table>
<p class="last_paragraph">
	<a href="?action=show_add_form">Add Item</a>
</p>
</section>
</main>
<?php include './view/footer.php':?>
				