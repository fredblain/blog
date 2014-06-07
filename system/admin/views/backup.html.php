<?php
	if(login()) {
		if(isset($_GET['file'])) {
			$file = $_GET['file'];

			if(!empty($file)) {
				unlink($file);
			}

		}
	}
?>
<a href="<?php echo site_url() ?>admin/backup-start">Créer une sauvegarde</a>
<h2>Vos sauvegardes</h2>
<?php echo get_backup_files() ?>
