<?php include('./inc/header.php'); ?>

<!-- ===== メイン ===== -->
<main id="index">
  <!-- === エリア選択 === -->
  <section id="area" class="top area">
    <!--トピックパス-->
    <div class="topic-path">
      <ul>
        <li>
          <p class="topic-path__num current-position__num">1</p>
          <p class="topic-path__text current-position__text">エリア選択</p>
        </li>
        <li>
          <p class="topic-path__num">2</p>
          <p class="topic-path__text">日程選択</p>
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
    <!--メインコンテンツ-->
    <div class="area__content">
      <div class="section-title">
        <h1 class="common-title">
          <i class="fa-solid fa-location-dot"></i>
          エリア選択
        </h1>
        <p class="common-text area__content--text">
          アートチャイルドケアでは、会社説明会を全国で開催しております。<br class="display-md">参加を希望される会社説明会・園見学会・採用面接会エリアを選択してください。
        </p>
      </div>

      <!--PC版-->
      <div class="area__content--map">
        <img src="./assets/img/map.png">

        <div class="area__content--button hokkaido-btn">
          <a href="date.php">
            <span class="area__content--button--name">北海道エリア</span>
            <i class="fa-solid fa-chevron-right"></i>
          </a>
        </div>

        <div class="area__content--button tohoku-btn">
          <a href="date.php">
            <span class="area__content--button--name">東北エリア</span>
            <i class="fa-solid fa-chevron-right"></i>
          </a>
        </div>

        <div class="area__content--button kanto-btn">
          <a href="date.php">
            <span class="area__content--button--name">関東エリア</span>
            <i class="fa-solid fa-chevron-right"></i>
          </a>
        </div>

        <div class="area__content--button tyubu-btn">
          <a href="date.php">
            <span class="area__content--button--name">中部エリア</span>
            <i class="fa-solid fa-chevron-right"></i>
          </a>
        </div>

        <div class="area__content--button nishinihon-btn">
          <a href="date.php">
            <span class="area__content--button--name">西日本エリア</span>
            <i class="fa-solid fa-chevron-right"></i>
          </a>
        </div>

        <div class="area__content--button kyusyu-btn">
          <a href="date.php">
            <span class="area__content--button--name">九州エリア</span>
            <i class="fa-solid fa-chevron-right"></i>
          </a>
        </div>

      </div>

      <!--SP版-->
      <div class="area__content--map-sp">
        <ul>
          <li>
            <a href="date.php">
              <span class="area__content--map-cell">
                <span class="area__content--map-cell--name">北海道エリア</span>
                <i class="fa-solid fa-chevron-right"></i>
              </span>
            </a>
          </li>
          <li>
            <a href="date.php">
              <span class="area__content--map-cell">
                <span class="area__content--map-cell--name">東北エリア</span>
                <i class="fa-solid fa-chevron-right"></i>
              </span>
            </a>
          </li>
          <li>
            <a href="date.php">
              <span class="area__content--map-cell">
                <span class="area__content--map-cell--name">関東エリア</span>
                <i class="fa-solid fa-chevron-right"></i>
              </span>
            </a>
          </li>
          <li>
            <a href="date.php">
              <span class="area__content--map-cell">
                <span class="area__content--map-cell--name">中部エリア</span>
                <i class="fa-solid fa-chevron-right"></i>
              </span>
            </a>
          </li>
          <li>
            <a href="date.php">
              <span class="area__content--map-cell">
                <span class="area__content--map-cell--name">西日本エリア</span>
                <i class="fa-solid fa-chevron-right"></i>
              </span>
            </a>
          </li>
          <li>
            <a href="date.php">
              <span class="area__content--map-cell">
                <span class="area__content--map-cell--name">九州エリア</span>
                <i class="fa-solid fa-chevron-right"></i>
              </span>
            </a>
          </li>
        </ul>
      </div>

    </div>
  </section>
</main>

<?php include('./inc/footer.php'); ?>