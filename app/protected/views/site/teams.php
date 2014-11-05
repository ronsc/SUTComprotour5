<font size="22pt">รายชื่อทีมที่เข้าแข่งขัน</font>
<hr></hr>
<?php if(!empty($model)): ?>
<ol style="font-size: 18pt;">
	<?php foreach($model as $data): ?>
	<li><?php echo $data->name; ?></li>
	<?php endforeach; ?>
</ol>
<?php else: ?>
	<h3>ยังไม่มีทีมใดสมัครเข้าแข่งขัน</h3>
<?php endif; ?>