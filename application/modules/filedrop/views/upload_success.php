

<h3>Your file was successfully uploaded!</h3>

<ul>
<?php foreach ($data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>

<p><?php echo anchor('filedrop', 'Upload Another File!'); ?></p>
