<style>
  .main {
    margin: 5% auto;
    text-align: center;
    width: 400px;
  }

  .data {
    text-align: left;
    padding: 0 20px;
    border: blue 2px solid;
    margin-bottom: 20px;
  }

  .data p {
    min-width: 300px;
  }
</style>


<body>

  <div class="main">
    <h1>vCard產生器</h1>
    <form action="api.php" method="post" enctype="multipart/form-data">
      <div class="data">
        <p>大名| <input type="text" name="user" value="陳大美"></p>
        <p>職位 | <input type="text" name="title" value="網頁設計師"></p>
        <p>
          <span style="vertical-align:top">技能| </span>
          <textarea name="skill" cols=30 rows=10>吃飯睡覺打東東</textarea>
        </p>
        <p>email | <input type="text" name="mail" value="user1285@gmail.com"></p>
        <p>手機 | <input type="text" name="phone" value="0912-858632"></p>
        <hr>
        <p>美照 | <input type="file" name="who"></p>
        <p>台灣南波萬 |
          <select name="layout">
            <option value="green" selected>麵麵俱到快來腸腸</option>
            <option value="pink">香味四溢魅力四射</option>
            <option value="black">中式黑蛋糕</option>
            <option value="white">滷在鍋裡幸福在嘴裡</option>
          </select>
        </p>
      </div>

      <input type="submit" value="送出">
    </form>


  </div>

</body>