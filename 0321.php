<style>
  body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f0f0;
    padding: 20px;
  }

  form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    max-width: 500px;
    margin: auto;
  }

  label {
    display: block;
    color: #333333;
    margin-bottom: 5px;
    font-weight: bold;
  }

  input[type="text"],
  input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 2px solid #007bff;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type="radio"] {
    margin-right: 5px;
  }

  input[type="submit"] {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }
</style>











<form method="post" action="wp_ecom.php">

心理學實驗：請任意輸入一個正整數，統計所有人的填答後，輸入的數字最小「且」唯一不重複者獲勝。<br>

<label>你的名字</label><input name="name" type="text">

<br>

<label>數字</label><input name="number" type="number" min="1" step="1">

<br>

<label>是否支持老師幫獲勝者加分</label><input name="plus" type="radio" value="yes">加分
<input name="plus" type="radio" value="no">不加分

<br>

<label>對這份問卷評分</label><select name="score">
<option>5</option>
<option>4</option>
<option>3</option>
<option>2</option>
<option>1</option>
</select><br><br>

<input type="submit">

<br>



</form>
