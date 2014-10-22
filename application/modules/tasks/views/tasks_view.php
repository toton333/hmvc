
     <h2>List Of The Tasks</h2>
	<?php foreach($lists as $list): ?>
  
   <h3><?php echo $list->title; ?> With priority level <?php echo $list->priority . '<br/>'; ?></h3>

    <?php endforeach; ?>
    <hr>

    <?php echo $method1 ; ?>
    <hr>
    <?php echo $method2 ; ?>
	