<form method="get" action="">
  <label for="id_user">
    User:
  </label>
  <input type="text" name="user" id="id_user" />
  <label for="id_pass">
    Pass:
  </label>
  <input type="password" name="pass" id="id_pass" />
  <input type="hidden" name="page" value="show_results" />
  <select name="seleziona">
    <option value="opzione_1">Opzione 1</option>
    <option value="opzione_2">Opzione 2</option>
  </select>
  <label>
    Rosso <input type="radio" name="colore" value="rosso">
  </label>
  <label>
    Blu <input type="radio" name="colore" value="blu">
  </label>

  <input type="submit" value="Entra">
</form>

<script type="text/javascript">
  function OnRequestStateChange() {
    if (this.readyState === 4 && this.status === 200) {
      console.log(this.responseText);
    }
  }

  var URL = 'http://crossorigin.me/http://google.it';
  var richiesta = new XMLHttpRequest();
  richiesta.addEventListener('readystatechange', OnRequestStateChange);
  richiesta.open('GET', URL);
  richiesta.send();
</script>