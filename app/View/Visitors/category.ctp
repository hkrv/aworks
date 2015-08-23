<div class="container">
    <div class="main">
      <div class="pickupcontent">
        <div class="row">
        <div class="col-12">
        <?php foreach($detail_datas as $data) : ?>
        <a href = "<?php echo $this->Html->url(array(
                    "controller" => "visitors",
                    "action" => "detail"
                )) . "/" . $data["Detail"]["detail_id"]; ?>">
          <div class="col-4">
            <div class="imgArea">
            <?php echo $this->Html->image('upload/' . $data["Detail"]["image"]); ?>
            </div>
            <div class="textareaTop">
              <p class="contenttext">
                  <?php echo $data["Detail"]["detail_name"]; ?><br>
                  <?php echo $data["Detail"]["category_name"]; ?><br>
                  <?php echo $data["Detail"]["prefecture"]; ?><br>
                  <?php echo $data["Detail"]["summary"]; ?>
              </p>
            </div>
          </div>
        </a>
        <?php endforeach; ?>
        </div>
        </div>
      </div>
        </div>
      </div>
    <div class="snsLink">
    <?php echo $this->Html->image('sns.png'); ?>
  </div>