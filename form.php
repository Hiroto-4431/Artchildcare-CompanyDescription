<?php include('./inc/header.php'); ?>

<!-- ===== メイン ===== -->
<main id="index">
  <!-- === エリア選択 === -->
  <section id="form" class="top form">
    <!--トピックパス-->
    <div class="topic-path">
      <ul>
        <li class="before-position__path">
          <p class="topic-path__num before-position__num">1</p>
          <p class="topic-path__text before-position__text">エリア選択</p>
        </li>
        <li class="before-position__path">
          <p class="topic-path__num before-position__num">2</p>
          <p class="topic-path__text before-position__text">日程選択</p>
        </li>
        <li class="">
          <p class="topic-path__num current-position__num">3</p>
          <p class="topic-path__text current-position__text">情報入力</p>
        </li>
        <li>
          <p class="topic-path__num">4</p>
          <p class="topic-path__text">完了</p>
        </li>

      </ul>
    </div>

    <div class="form__method">
      <p class="form__method--title">【テキストが入ります】</p>
      <p class="form__method--text">開催日：2022年4月20日(水)</p>
      <p class="form__method--text">会場：ダミーダミーダミー</p>
      <p class="form__method--text">開催時間：10:00〜11:00</p>
      <p class="form__method--content">説明会についての情報が入ります。説明会についての情報が入ります。説明会についての情報が入ります。説明会についての情報が入ります。説明会についての情報が入ります。説明会についての情報が入ります。説明会についての情報が入ります。説明会についての情報が入ります。説明会についての情報が入ります。説明会についての情報が入ります。
      </p>
    </div>

    <!--メインコンテンツ-->
    <div class="form__content">
      <div class="section-title form__content--headline">
        <h1 class="common-title">
          <i class="fa-solid fa-pen-to-square"></i>
          情報入力
        </h1>
        <p class="common-text complete__content--text">
          フォームに必要事項を記入いただきエントリーボタンを押してください。
        </p>
      </div>

      <div class="form__content--form-wrapper">
        <form action="complete.php" method="post">
          <table class="">
            <!--お名前-->
            <tr class="form__content--cell">
              <th class="form__content--cell--title">
                <label for="name">お名前</label>
                <span class="form__content--cell--required">必須</span>
              </th>
              <td class="form__content--cell--text">
                <input type="text" name="name" placeholder="山田花子" class="">
              </td>
            </tr>

            <!--フリガナ-->
            <tr class="form__content--cell">
              <th class="form__content--cell--title">
                <label for="name_read">フリガナ</label>
                <span class="form__content--cell--required">必須</span>
              </th>
              <td class="form__content--cell--text">
                <input type="text" name="name_read" placeholder="ヤマダハナコ" class="">
              </td>
            </tr>

            <!--学校名-->
            <tr class="form__content--cell form__content--school">
              <th class="form__content--cell--title">
                <label for="school">学校名</label>
                <span class="form__content--cell--required">必須</span>
              </th>
              <td class="form__content--cell--text">
                <input type="text" name="school" placeholder="" class="">
              </td>
            </tr>

            <!--都道府県-->
            <tr class="form__content--cell">
              <th class="form__content--cell--title">
                <label for="">都道府県</label>
              </th>
              <td class="form__content--cell--text">
                <div class="select__wrap">
                  <select name="reason" class="">
                    <option value="" selected>選択してください</option>
                    <option value="hokkaido">北海道</option>
                    <option value="aomori">青森県</option>
                    <option value="iwate">岩手県</option>
                    <option value="miyagi">宮城県</option>
                    <option value="akita">秋田県</option>
                    <option value="yamagata">山形県</option>
                    <option value="fukushima">福島県</option>
                    <option value="ibaraki">茨城県</option>
                    <option value="tochigi">栃木県</option>
                    <option value="gunma">群馬県</option>
                    <option value="saitama">埼玉県</option>
                    <option value="chiba">千葉県</option>
                    <option value="tokyo">東京県</option>
                    <option value="kanagawa">神奈川県</option>
                    <option value="nigata">新潟県</option>
                    <option value="toyama">富山県</option>
                    <option value="ishikawa">石川県</option>
                    <option value="fukui">福井県</option>
                    <option value="yamanashi">山梨県</option>
                    <option value="nagano">長野県</option>
                    <option value="gifu">岐阜県</option>
                    <option value="shizuoka">静岡県</option>
                    <option value="aichi">愛知県</option>
                    <option value="mie">三重県</option>
                    <option value="shiga">滋賀県</option>
                    <option value="kyoto">京都府</option>
                    <option value="osaka">大阪府</option>
                    <option value="hyogo">兵庫県</option>
                    <option value="nara">奈良県</option>
                    <option value="wakayama">和歌山県</option>
                    <option value="tottori">鳥取県</option>
                    <option value="shimane">島根県</option>
                    <option value="okayama">岡山県</option>
                    <option value="hiroshima">広島県</option>
                    <option value="yamaguchi">山口県</option>
                    <option value="tokushima">徳島県</option>
                    <option value="kagawa">香川県</option>
                    <option value="ehime">愛媛県</option>
                    <option value="kouchi">高知県</option>
                    <option value="fukuoka">福岡県</option>
                    <option value="saga">佐賀県</option>
                    <option value="nagasaki">長崎県</option>
                    <option value="kumamoto">熊本県</option>
                    <option value="oita">大分県</option>
                    <option value="miyazaki">宮崎県</option>
                    <option value="kagoshima">鹿児島県</option>
                    <option value="okinawa">沖縄県</option>
                  </select>
                </div>
              </td>
            </tr>

            <!--電話番号-->
            <tr class="form__content--cell">
              <th class="form__content--cell--title">
                <label for="tel">ご連絡先電話番号</label>
                <span class="form__content--cell--required">必須</span>
              </th>
              <td class="form__content--cell--text">
                <input type="text" name="tel" placeholder="012-3456-7890" class="">
              </td>
            </tr>

            <!--メールアドレス-->
            <tr class="form__content--cell form__content--mail">
              <th class="form__content--cell--title">
                <label for="mail">メールアドレス<br><span class="form__content--cell--postscript">　</span></label>
                <span class="form__content--cell--required">必須</span>
              </th>
              <td class="form__content--cell--text">
                <input type="text" name="mail" placeholder="art-child@example.com" class="">
                <p class="form__content--cell--postscript">※メールの受信制限をしている方は解除をお願いします。</p>
              </td>
            </tr>

            <!--保有資格-->
            <tr class="form__content--cell">
              <th class="form__content--cell--title">
                <label for="license">保有資格<br><span class="form__content--cell--postscript">（見込みを含む）</span></label>
                <span class="form__content--cell--required">必須</span>
              </th>
              <td class="form__content--cell--text">
                <input type="text" name="license" placeholder="保育士" class="">
                <p class="form__content--cell--postscript">※資格をお持ちでない方は「なし」とご記入ください。</p>
              </td>
            </tr>

            <!--ご質問-->
            <tr class="form__content--cell form__content--question">
              <th class="form__content--cell--title">
                <label for="question">ご質問</label>
              </th>
              <td class="form__content--cell--text">
                <textarea name="question" placeholder=""></textarea>
              </td>
            </tr>
          </table>
          <div class="form__content--submit">
            <button type="submit"><span>エントリー</span><i class="fa-solid fa-chevron-right"></i></button>
          </div>
        </form>
      </div>


      <div class="content-back">
        <a href="date.php">
          <i class="fa-solid fa-chevron-left"></i>
          日程選択へ戻る
        </a>
      </div>
    </div>
  </section>
</main>

<?php include('./inc/footer.php'); ?>