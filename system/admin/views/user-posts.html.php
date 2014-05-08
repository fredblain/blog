<h2 class="post-index"><?php echo $heading?></h2>
<?php if(!empty($posts)) {?>
<table class="post-list">
	<tr class="head"><th>Titre</th><th>Publié le</th><th>Tag(s)</th><th>Opérations</th></tr>
	<?php $i = 0; $len = count($posts);?>
	<?php foreach($posts as $p):?>
		<?php
			if ($i == 0) {
				$class = 'item first';
			}
			elseif ($i == $len - 1) {
				$class = 'item last';
			}
			else {
				$class = 'item';
			}
			$i++;
		?>
	<tr class="<?php echo $class ?>">
		<td><a target="_blank" href="<?php echo $p->url ?>"><?php echo $p->title ?></a></td>
		<td><?php echo date('d F Y', $p->date) ?></td>
		<td><?php echo $p->tag ?></td>
		<td><a href="<?php echo $p->url ?>/edit?destination=admin/mine">Éditer</a> <a href="<?php echo $p->url ?>/delete?destination=admin/mine">Supprimer</a></td>
	</tr>
	<?php endforeach;?>
</table>
<?php if (!empty($pagination['prev']) || !empty($pagination['next'])):?>
	<div class="pager">
		<?php if (!empty($pagination['prev'])):?>
			<span><a href="?page=<?php echo $page-1?>" class="pagination-arrow newer" rel="précédent">Plus récent</a></span>
		<?php endif;?>
		<?php if (!empty($pagination['next'])):?>
			<span><a href="?page=<?php echo $page+1?>" class="pagination-arrow older" rel="suivant">Plus ancien</a></span>
		<?php endif;?>
	</div>
<?php endif;?>
<?php } else { echo 'Aucun billet trouvé !'; }?>
