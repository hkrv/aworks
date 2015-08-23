<div class="container">
    <div class="main">
      <div class="pickupcontent">
        <div class="row">
        <div class="col-12">
        <?php foreach($detail_datas as $data) : ?>
          <div class="col-4">
            <div class="imgArea">
            <?php echo $this->Html->image('upload/' . $data["Detail"]["image"]); ?>
            </div>
            <div class="textareaTop">
              <p class="contenttext">
                  <?php echo $data["Detail"]["detail_name"]; ?><br>
                  <?php echo $data["Detail"]["category_name"]; ?><br>
                  <?php echo $data["Detail"]["prefecture"]; ?><br>
                  <?php echo $data["Detail"]["comment"]; ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
          <div class="col-4">
            <div class="imgArea">
            <?php echo $this->Html->image('jobs.jpg'); ?>
            </div>
            <div class="textareaTop">
              <p class="contenttext">
              ダミーテキスト
              </p>
            </div>
          </div>
          <div class="col-4">
            <div class="imgArea">
            <?php echo $this->Html->image('jobs.jpg'); ?>
            </div>
            <div class="textareaTop">
              <p class="contenttext">
              ダミーテキスト
              </p>
            </div>
          </div>
          <div class="col-4">
            <div class="imgArea">
            <?php echo $this->Html->image('jobs.jpg'); ?>
            </div>
            <div class="textareaTop">
              <p class="contenttext">
              ダミーテキスト
              </p>
            </div>
          </div><div class="col-4">
            <div class="imgArea">
            <?php echo $this->Html->image('jobs.jpg'); ?>
            </div>
            <div class="textareaTop">
              <p class="contenttext">
              ダミーテキスト
              </p>
            </div>
          </div>
          <div class="col-4">
            <div class="imgArea">
            <?php echo $this->Html->image('jobs.jpg'); ?>
            </div>
            <div class="textareaTop">
              <p class="contenttext">
              ダミーテキスト
              </p>
            </div>
          </div>
        </div>
        </div>
      </div>
        </div>
      </div>
    <div class="snsLink">
    <?php echo $this->Html->image('sns.png'); ?>
  </div>