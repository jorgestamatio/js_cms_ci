<h1>Guests</h1>
	<a href="<?=site_url('guests/add')?>" class="<?=$this->config->item('NEW_BTN')?> pull-right">
    <?=$this->config->item('NEW_ICON')?> <?=$this->config->item('NEW_TXT')?>
  </a>
<table class='table table-striped'>
	<thead>
		<th>Name</th>
		<th>Comming</th>
		<th>Plus 1?</th>
		<th class="text-right">Edit</th>
	</thead>
<tbody id='contentTable'>
<?php foreach ($query->result() as $row) : ?>
	<tr>

		<td><?=$row->name?></td>
		<td><?=$row->email?></td>
		<td><?=$row->persons?></td>
		<td class="text-right">
			<a class="<?=$this->config->item('EDIT_BTN')?>" href="<?=site_url()?>guests/edit/<?=$row->id?>">
			<?=$this->config->item('EDIT_ICON')?> <?=$this->config->item('EDIT_TXT')?>
			</a>
		</td>
		
	</tr>
<?php endforeach; ?>
</tbody>
</table>




