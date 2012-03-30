<?php
$con = mysql_connect("mysql.massart.dreamhosters.com","massartdbuser","massart");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("massarttester", $con);

if(isset($_POST['name'])) {
	$name = $_POST['name'];
	$ingredients = $_POST['ingredients'];
	$steps = $_POST['steps'];

	$result = mysql_query("INSERT INTO recipes (name, ingredients, steps) VALUES ('$name','$ingredients','$steps')");
	if(!$result) { die(mysqul_error()); }
}


$result = mysql_query("SELECT * FROM recipes");
$recipes = array();
while($row = mysql_fetch_array($result)) {
	array_push($recipes,$row);
}
?>
<!--
print_r($recipes);
-->

<h1>Recipr</h1>

<?php
foreach($recipes as $recipe) {
	?>
	<h2><?php echo htmlspecialchars($recipe['name']); ?></h2>

	<h3>Ingredients: <?php echo htmlspecialchars($recipe['ingredients']); ?></h3>
	<h3>Steps: <?php echo htmlspecialchars($recipe['steps']); ?></h3>
	<img src='<?php echo ($recipe['picture']); ?>'/>
		<?php } ?>
		
		

		<form method='post' name='contform'>
		<label for="name">Recipe name:</label>
		<input type="text" id="name" name="name" placeholder="What is it?" />

		<label for="ingredients">Ingredients:</label>
		<textarea rows="6" name="ingredients" id="ingredients" placeholder="What's in it?"></textarea>

		<label for="steps">Steps:</label>
		<textarea rows="6" name="steps" id="steps" placeholder="How do you make it?"></textarea>

		<label for="picture">Image file:</label>
		<input name="picture" id="picture" type="picture" />

		<button type="submit">Submit</button>

		</form>
