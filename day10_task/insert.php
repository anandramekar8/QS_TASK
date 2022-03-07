<?php


$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");

if(isset($_POST["name"]))
{
	$skill = implode(", ", $_POST["skill"]);

	$data = array(
		':progremmer_name'		=>	$_POST["name"],
		':programmer_skill'		=>	$skill
	);

	$query = "
	INSERT INTO programmer 
	(progremmer_name, programmer_skill) 
	VALUES (:progremmer_name, :programmer_skill)
	";

	$statement = $connect->prepare($query);

	if($statement->execute($data))
	{
		echo '
		<div class="alert alert-success">
			Data Successfully Inserted
		</div>
		';
	}
}

?>