<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">
        <?php echo CHtml::encode(Yii::app()->name); ?>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="index.php">หน้าแรก</a>
        </li>
        <li>
          <a href="index.php?r=Site/Teams">
            ทีมที่เข้าแข่งขัน
          </a>
        </li>
        <li>
          <a href="index.php?r=Site/Table">กำหนดการ</a>
        </li>
        <li>
          <a href="index.php?r=Site/Property">คุณสมบัติผู้เข้าแข่งขัน</a>
        </li>
        <li>
          <a href="index.php?r=Site/Registration">สมัครแข่งขัน</a>
        </li>
        <li>
          <a href="index.php?r=Site/Contact">
            ติดต่อเรา
          </a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>