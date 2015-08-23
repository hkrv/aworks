<div class="container">
  <div class="page-header">
    <h2><span>情報登録</span></h2>
    <p>下記のフォームに必要事項をご入力の上、【登録】ボタンをクリックしてください。</p>
  </div>
  <div class="wrapper">
    <?php echo $this->Form->create('Detail', array('class' => 'form-horizontal')); ?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="title">タイトル</label>
      <div class="col-sm-10">
        <?php echo $this->Form->input('detail_name', array('class' => 'form-control input-sm', 'required' => '', 'placeholder'=> 'プロジェクトのタイトルをご記入ください', 'label' => false)); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="area">場所</label>
      <div class="col-sm-10">
        <?php echo $this->Form->input('prefecture', array('class' => 'form-control input-sm', 'required' => '', 'placeholder'=> 'プロジェクトを実施する都道府県をご記入ください', 'label' => false)); ?>
        <?php echo $this->Form->input('area', array('class' => 'form-control input-sm', 'required' => '', 'placeholder'=> '市区町村をご記入ください', 'label' => false)); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="category">カテゴリー</label>
      <div class="col-sm-10">
          
          <?php echo $this->Form->select('category_name', array(
                '観光' => '観光',
                'まちおこし' => 'まちおこし',
                '農業' => '農業',
                '漁業' => '漁業',
                '林業' => '林業',
                'ものづくり・デザイン' => 'ものづくり・デザイン',
                '映像・音楽' => '映像・音楽',
                'IT・テクノロジー' => 'IT・テクノロジー',
            ), array('class' => 'form-control', 'selected' => 'プロジェクトのカテゴリを選択してください')); ?>
      </div>
    </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="name">氏名</label>
        <div class="col-sm-10">
        <?php echo $this->Form->input('owner_name', array('class' => 'form-control input-sm', 'required' => '', 'placeholder'=> 'プロジェクトの代表者さま、ご担当者さまのご氏名をご記入ください', 'label' => false)); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">メールアドレス</label>
      <div class="col-sm-10">
        <?php echo $this->Form->input('mail', array('class' => 'form-control input-sm', 'required' => '', 'placeholder'=> 'プロジェクトの代表者さま、ご担当者さまのメールアドレスをご記入ください', 'label' => false)); ?>
        <span class="help-block">▼ 確認のため再入力</span>
        <input type="text" name="email02" id="email02" value="" class="form-control input-sm" placeholder="確認用メールアドレス" required="">
        <span class="help-block">※半角200文字以内で入力してください。<br>
        <ul>
          <li>携帯電話アドレス（<b class="red">特に@ezweb.ne.jp</b>）でのご登録は、手続きメールが届かない場合がございます。<br>
          PCのメール又はフリーメールアドレスでのご登録をおすすめします。</li>
          <li>自動的に迷惑メールフィルタで迷惑メールとして別フォルダに振り分けられている場合があります。</li>
          <li>メールは「info@asobi.work」より送信されますので、受信拒否機能を設定されている場合は、<br>
          ドメイン「asobi.work」のメールが受信できるように設定後、改めてお試しください。</li>
          <li>登録していただいたメールアドレスが間違っていたと予想される場合は、登録手続きを最初からやり直してください。</li>
        </ul>
        </span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tel">TEL（任意）</label>
      <div class="col-sm-10">
        <?php echo $this->Form->input('telephone', array('type' => 'tel', 'class' => 'form-control input-sm', 'required' => '', 'placeholder'=> '電話番号をご記入ください', 'label' => false)); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pass">最少催行人数</label>
      <div class="col-sm-10">
        <?php echo $this->Form->input('number', array('type' => 'string', 'class' => 'form-control input-sm', 'required' => '', 'placeholder'=> 'プロジェクトの最少催行人数をご記入ください', 'label' => false)); ?>
     </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tel">プロジェクト概要</label>
      <div class="col-sm-10">
        <?php echo $this->Form->input('summary', array('class' => 'form-control input-sm', 'required' => '', 'placeholder'=> 'このプロジェクトの概要を教えてください', 'label' => false)); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="contents">プロジェクト魅力</label>
      <div class="col-sm-10">
        <?php echo $this->Form->input('comment', array('class' => 'form-control input-sm', 'required' => '', 'placeholder'=> 'このプロジェクトの魅力を第三者にもわかるように教えてください', 'label' => false)); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="contents">URL</label>
      <div class="col-sm-10">
        <?php echo $this->Form->input('url', array('class' => 'form-control input-sm', 'required' => '', 'placeholder'=> 'Webサイト、FacebookページなどのURLをご記入ください', 'label' => false)); ?>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-4 col-sm-4">
        <?php echo $this->Form->submit('登録', array('class' => 'btn btn-regist btn-lg btn-block', 'id' => 'formbtn', 'required' => '', 'data-loading-text'=> 'Loading..', 'label' => false)); ?>
      </div>
    </div>
    <?php echo $this->Form->end(); ?>
  </div>
  </div>