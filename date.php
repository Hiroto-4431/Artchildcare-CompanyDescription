<?php include('./inc/header.php'); ?>

<!-- ===== メイン ===== -->
<main id="index">
  <!-- === エリア選択 === -->
  <section id="date" class="top date">
    <!--トピックパス-->
    <div class="topic-path">
      <ul>
        <li class="before-position__path">
          <p class="topic-path__num before-position__num">1</p>
          <p class="topic-path__text before-position__text">エリア選択</p>
        </li>
        <li>
          <p class="topic-path__num current-position__num">2</p>
          <p class="topic-path__text current-position__text">日程選択</p>
        </li>
        <li>
          <p class="topic-path__num">3</p>
          <p class="topic-path__text">情報入力</p>
        </li>
        <li>
          <p class="topic-path__num">4</p>
          <p class="topic-path__text">完了</p>
        </li>

      </ul>
    </div>
    <!--新型コロナウイルス感染予防対策-->
    <div class="date__method">
      <p class="date__method--title">新型コロナウイルス感染予防対策</p>
      <p class="date__method--text">新型コロナウイルス感染症拡大防止の観点から、現在はWEBによる会社説明会を実施しております。お気軽にお申し込み・ご相談ください。園見学をご希望の場合は以下の対策を実施しています。ご参加の際はご協力をいただきますようお願いいたします。<br>また、WEBでの見学を希望される方もご相談ください。</p>
      <ul class="date__method--img">
        <li><img src="./assets/img/date_method-1.png"></li>
        <li><img src="./assets/img/date_method-2.png"></li>
        <li><img src="./assets/img/date_method-3.png"></li>
        <li><img src="./assets/img/date_method-4.png"></li>
      </ul>
      <ul class="date__method-sp--img">
        <li><img src="./assets/img/date_method-sp-1.png"></li>
        <li><img src="./assets/img/date_method-sp-2.png"></li>
        <li><img src="./assets/img/date_method-sp-3.png"></li>
        <li><img src="./assets/img/date_method-sp-4.png"></li>
      </ul>
    </div>

    <!--メインコンテンツ-->
    <div class="date__content">
      <div class="section-title date__content--headline">
        <h1 class="common-title">
          <i class="fa-solid fa-calendar-days"></i>
          日程選択
        </h1>
        <p class="common-text date__content--text">
          下記スケジュールから行きたい会社説明会・園見学会・採用面接会を選び「予約」ボタンをクリックしてください。<br>
          会社説明会応募フォームから応募できます。
        </p>
      </div>

      <div class="date__content--schedule">
        <p class="date__content--subtitle"><em>関東エリア</em>のスケジュール</p>
        <!--PC版-->
        <table class="date__content--table">
          <!--タイトル-->
          <tr>
            <th class="table__date date__content--table--title">開催日</th>
            <th class="date__content--table--title table__place">会場</th>
            <th class="date__content--table--title table__time">開催時間</th>
            <th class="date__content--table--title table__reserve">予約</th>
          </tr>
          <!--セクション-->
          <tr>
            <td rowspan="3" class="table__date--content">2022年4月20日</td>
            <td rowspan="3" class="table__place--content">
              <div class="table__place--content--wrap">
                <p class="table__place--content--text">
                  <span class="table__place--content--title">
                    【WEB会社説明会or会社説明会or住所or園名】
                  </span>
                  <span class="table__place--content--sub">
                    選択したエリアの詳細内容が入ります選択したエリアの詳細内容が入ります（住所or園名等）
                  </span>
                </p>
              </div>
            </td>
            <td class="table__time--content">10:00〜11:00</td>
            <td class="table__reserve--content">
              <a href="form.php" class="table__reserve--content--button">
                <span>予約</span>
                <i class="fa-solid fa-angle-right"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td class="table__time--content">14:00〜15:00</td>
            <td class="table__reserve--content">
              <a href="form.php" class="table__reserve--content--button">
                <span>予約</span>
                <i class="fa-solid fa-angle-right"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td class="table__time--content">17:00〜18:00</td>
            <td class="table__reserve--content">
              <a href="form.php" class="table__reserve--content--button">
                <span>予約</span>
                <i class="fa-solid fa-angle-right"></i>
              </a>
            </td>
          </tr>
          <!--セクション-->
          <tr>
            <td rowspan="3" class="table__date--content">2022年4月26日</td>
            <td rowspan="3" class="table__place--content">
              <div class="table__place--content--wrap">
                <p class="table__place--content--text">
                  <span class="table__place--content--title">
                    【テキストが入ります】
                  </span>
                  <span class="table__place--content--sub">
                    選択したエリアの詳細内容が入ります選択したエリアの詳細内容が入ります（住所or園名等）
                  </span>
                </p>
              </div>
            </td>
            <td class="table__time--content">10:00〜11:00</td>
            <td class="table__reserve--content">
              <a href="form.php" class="table__reserve--content--button">
                <span>予約</span>
                <i class="fa-solid fa-angle-right"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td class="table__time--content">14:00〜15:00</td>
            <td class="table__reserve--content">
              <a href="form.php" class="table__reserve--content--button">
                <span>予約</span>
                <i class="fa-solid fa-angle-right"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td class="table__time--content">17:00〜18:00</td>
            <td class="table__reserve--content">
              <a href="form.php" class="table__reserve--content--button">
                <span>予約</span>
                <i class="fa-solid fa-angle-right"></i>
              </a>
            </td>
          </tr>
        </table>
        <!--SP版-->
        <table class="date__content--table-sp">
          <!--タイトル-->
          <tr class="table-sp--line table-sp--block">
            <th class="table-sp--line--text table-sp--block table-sp--title">開催日</th>
            <td rowspan="3" class="table-sp--line--text--content table-sp--block">2022年4月20日</td>
          </tr>

          <tr class="table-sp--line table-sp--block">
            <th class="table-sp--line--text table-sp--block table-sp--title">会場</th>
            <td rowspan="3" class="table-sp--line--text--content table-sp--block">
              <p class="table-sp--place">
                <span class="table-sp--place--title">
                  【テキストが入ります】
                </span>
                <span class="table-sp--place--text">
                  選択したエリアの詳細内容が入ります選択したエリアの詳細内容が入ります（住所or園名等）
                </span>
              </p>
            </td>
          </tr>

          <tr class="table-sp--line table-sp--flex table-sp--title">
            <th class="table-sp--line--text table-sp--title table-sp--title--half">開催時間</th>
            <th class="table-sp--line--text table-sp--title--half table-sp--title table-sp--reserve">予約</th>
          </tr>

          <tr class="table-sp--flex">
            <td class="table-sp--line--time table-sp--height table-sp--flex--content">10:00〜11:00</td>
            <td class="table-sp--line--text table-sp--height table-sp--flex--content table-sp--reserve">
              <a href="form.php" class="">
                <span>予約</span>
                <i class="fa-solid fa-angle-right"></i>
              </a>
            </td>
          </tr>
          <tr class="table-sp--line table-sp--flex">
            <td class="table-sp--line--time table-sp--height table-sp--flex--content">10:00〜11:00</td>
            <td class="table-sp--line--text table-sp--height table-sp--reserve table-sp--flex--content">
              <a href="form.php" class="">
                <span>予約</span>
                <i class="fa-solid fa-angle-right"></i>
              </a>
            </td>
          </tr>
          <tr class="table-sp--line table-sp--flex">
            <td class="table-sp--line--time table-sp--height table-sp--flex--content">10:00〜11:00</td>
            <td class="table-sp--line--text table-sp--height table-sp--flex--content table-sp--reserve">
              <a href="form.php" class="">
                <span>予約</span>
                <i class="fa-solid fa-angle-right"></i>
              </a>
            </td>
          </tr>
        </table>

        <table class="date__content--table-sp">
          <!--タイトル-->
          <tr class="table-sp--line table-sp--block">
            <th class="table-sp--line--text table-sp--block table-sp--title">開催日</th>
            <td rowspan="3" class="table-sp--line--text--content table-sp--block">2022年4月20日</td>
          </tr>

          <tr class="table-sp--line table-sp--block">
            <th class="table-sp--line--text table-sp--block table-sp--title">会場</th>
            <td rowspan="3" class="table-sp--line--text--content table-sp--block">
              <p class="table-sp--place">
                <span class="table-sp--place--title">
                  【テキストが入ります】
                </span>
                <span class="table-sp--place--text">
                  選択したエリアの詳細内容が入ります選択したエリアの詳細内容が入ります（住所or園名等）
                </span>
              </p>
            </td>
          </tr>

          <tr class="table-sp--line table-sp--flex table-sp--title">
            <th class="table-sp--line--text table-sp--title table-sp--title--half">開催時間</th>
            <th class="table-sp--line--text table-sp--title--half table-sp--title table-sp--reserve">予約</th>
          </tr>

          <tr class="table-sp--flex">
            <td class="table-sp--line--time table-sp--height table-sp--flex--content">10:00〜11:00</td>
            <td class="table-sp--line--text table-sp--height table-sp--flex--content table-sp--reserve">
              <a href="form.php" class="">
                <span>予約</span>
                <i class="fa-solid fa-angle-right"></i>
              </a>
            </td>
          </tr>
          <tr class="table-sp--line table-sp--flex">
            <td class="table-sp--line--time table-sp--height table-sp--flex--content">10:00〜11:00</td>
            <td class="table-sp--line--text table-sp--height table-sp--reserve table-sp--flex--content">
              <a href="form.php" class="">
                <span>予約</span>
                <i class="fa-solid fa-angle-right"></i>
              </a>
            </td>
          </tr>
          <tr class="table-sp--line table-sp--flex">
            <td class="table-sp--line--time table-sp--height table-sp--flex--content">10:00〜11:00</td>
            <td class="table-sp--line--text table-sp--height table-sp--flex--content table-sp--reserve">
              <a href="form.php" class="">
                <span>予約</span>
                <i class="fa-solid fa-angle-right"></i>
              </a>
            </td>
          </tr>
        </table>


        <div class="content-back">
          <a href="area.php">
            <i class="fa-solid fa-chevron-left"></i>
            エリア選択へ戻る
          </a>
        </div>
      </div>

    </div>
  </section>
</main>

<?php include('./inc/footer.php'); ?>