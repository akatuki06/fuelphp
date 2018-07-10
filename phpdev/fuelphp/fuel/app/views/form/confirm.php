<?//php Debug::dump($input); ?>

<p>
	名前:
	<?= $input['name']; ?>
</p>
<p>
	メールアドレス:
	<?= $input['email']; ?>
</p>
<p>
	コメント:
	<?= nl2br($input['comment'], false); ?>
</p>

<?php 
echo Form::open('form/');
echo Form::hidden('name', $input['name']);
echo Form::hidden('email', $input['email']);
echo Form::hidden('comment', $input['comment']);
 ?>
 <div class="actions">
 	<?php echo Form::submit('submit1', '修正'); ?>
 </div>
 <?php echo Form::close(); ?>

 <?php 
echo Form::open('form/send');

	//CSRF
  echo Form::csrf();

  echo Form::hidden('name',     $input['name'],     array('id' => 'name'));
  echo Form::hidden('email',    $input['email'],    array('id' => 'email'));
  echo Form::hidden('comment',  $input['comment'],  array('id' => 'comment'));
  ?>
  <div class="actions">
  	<?= Form::submit('submit2', '送信'); ?>
  </div>
  <?php echo Form::close(); ?>