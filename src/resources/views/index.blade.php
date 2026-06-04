<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header>FashionablyLate</header>

  <main>

  <h1>Contact</h1>

  <form>

  <div>
    <label>お名前
      <span class="required">※</span>
    </label>
    <input type="text" name="last_name" placeholder="例：山田">

  <input type="text" name="first_name" placeholder="例：太郎">
  </div>

  <div>
    <label>性別
      <span class="required">※</span>
    </label>
    <input type="radio" name="gender" value="male">
    <label>男性</label>
    <input type="radio" name="gender" value="female">
    <label>女性</label>
    <input type="radio" name="gender" value="other">
    <label>その他</label>
  </div>

  <div>
    <label>メールアドレス
      <span class="required">※</span>
    </label>
    <input type="email" name="email">
  </div>

  <div>
    <label>電話番号<span class="required">※</span>
  </label>
    <input type="text" name="tel1" placeholder="090">
    <input type="text" name="tel2" placeholder="1234">
    <input type="text" name="tel3" placeholder="5678">
   
  </div>


  <div>
    <label>住所
      <span class="required">※</span>
    </label>
    <input type="text" name="postal_code" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3">
  </div>

  <div>
    <label>建物名</label>
    <input type="text" name="building_name" placeholder="例：千駄ヶ谷ビル101">
  </div>

  <div>
    <label>お問い合わせの種類
      <span class="required">※</span>
    </label>
       <select name="category">
    <option value="">選択してください</option>
      <option value="product">1.商品のお届けについて</option>
      <option value="service">2.商品の交換について</option>
      <option value="other">3.商品トラブル</option>
      <option value="other">4.ショップへのお問合せ</option>
      <option value="other">5.その他</option>
    </select>
  </div>

  <div>
    <label>お問い合わせ内容
      <span class="required">※</span>
    </label>
    <textarea name="message" placeholder="お問い合わせ内容をご記載ください"></textarea>
  </div>

    <button>確認画面</button>


</form>

</main>

</body>