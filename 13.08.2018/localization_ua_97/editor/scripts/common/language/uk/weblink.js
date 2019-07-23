function loadTxt() {
  document.getElementById("tab0").innerHTML = "\u0413\u0456\u043F\u0435\u0440\u043F\u043E\u0441\u0438\u043B\u0430\u043D\u043D\u044F";
  document.getElementById("tab1").innerHTML = "\u0421\u0442\u0438\u043B\u0456";
  document.getElementById("lblUrl").innerHTML = "\u0410\u0434\u0440\u0435\u0441\u0430:";
  document.getElementById("lblTitle").innerHTML = "\u0417\u0430\u0433\u043e\u043b\u043e\u0432\u043e\u043a:";
  document.getElementById("lblTarget1").innerHTML = "\u0412\u0456\u0434\u043A\u0440\u0438\u0442\u0438 \u043D\u0430 \u043F\u043E\u0442\u043E\u0447\u043D\u0456\u0439 \u0441\u0442\u043E\u0440\u0456\u043D\u0446\u0456";
  document.getElementById("lblTarget2").innerHTML = "\u0412\u0456\u0434\u043A\u0440\u0438\u0442\u0438 \u043D\u0430 \u043D\u043E\u0432\u0456\u0439 \u0441\u0442\u043E\u0440\u0456\u043D\u0446\u0456";
  document.getElementById("lnkNormalLink").innerHTML = "\u041D\u043E\u0440\u043C\u0430\u043B\u044C\u043D\u0435 \u043F\u043E\u0441\u0438\u043B\u0430\u043D\u043D\u044F &raquo;";
  document.getElementById("btnCancel").value = "\u0421\u043A\u0430\u0441\u0443\u0432\u0430\u0442\u0438"
}
function writeTitle() {
  document.write("<title>" + "\u0412\u0441\u0442\u0430\u0432\u043A\u0430 \u0433\u0456\u043F\u0435\u0440\u043F\u043E\u0441\u0438\u043B\u0430\u043D\u043D\u044F" + "</title>")
}
function getTxt(s) {
  switch(s) {
    case "insert":
      return"\u0412\u0441\u0442\u0430\u0432\u0438\u0442\u0438";
    case "change":
      return"\u0417\u043C\u0456\u043D\u0438\u0442\u0438"
  }
}
;