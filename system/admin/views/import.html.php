<?php if (isset($error)) { ?>
	<div class="error-message"><?php echo $error?></div>
 <?php } ?>
<h1>Import de flux RSS 2.0</h1>
<p>NOTE : en utilisant cet importateur, vous admettez que ce flux est le vôtre, ou que vous avez au moins l'authorisation de le publier.</p>
<form method="POST">
	Url du flux <span class="required">*</span> <br><input type="url" class="text <?php if (isset($url)) { if (empty($url)) { echo 'error';}} ?>" name="url"/><br><br>
	Ajouter le lien de la source (optionnel) <input type="checkbox" class="checkbox" name="credit" value="yes"/><br><br>
	<input type="submit" name="submit" class="submit" value="Importer"/>
</form>
