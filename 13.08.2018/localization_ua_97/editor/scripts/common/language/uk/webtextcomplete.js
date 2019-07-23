function loadTxt() {
  document.getElementById("tab2").innerHTML = "\u0420\u043E\u0437\u043C\u0456\u0440";
  document.getElementById("tab3").innerHTML = "\u0422\u0456\u043D\u0456";
  document.getElementById("tab4").innerHTML = "\u041f\u0430\u0440\u0430\u0433\u0440\u0430\u0444";
  document.getElementById("tab5").innerHTML = "\u0421\u043f\u0438\u0441\u043a\u0438";
  document.getElementById("lblColor").innerHTML = "\u041A\u043E\u043B\u0456\u0440 \u0442\u0435\u043A\u0441\u0442\u0443:";
  document.getElementById("lblHighlight").innerHTML = "\u041A\u043E\u043B\u0456\u0440 \u0442\u043B\u0430:";
  document.getElementById("lblLineHeight").innerHTML = "\u0428\u0438\u0440\u0438\u043D\u0430 \u0440\u044F\u0434\u043A\u0430:";
  document.getElementById("lblLetterSpacing").innerHTML = "\u041C\u0456\u0436\u0441\u0438\u043C\u0432\u043E\u043B\u044C\u043D\u0438\u0439 \u0456\u043D\u0442\u0435\u0440\u0432\u0430\u043B:";
  document.getElementById("lblWordSpacing").innerHTML = "\u0406\u043D\u0442\u0435\u0440\u0432\u0430\u043B \u043C\u0456\u0436 \u0441\u043B\u043E\u0432\u0430\u043C\u0438:";
  document.getElementById("lblNote").innerHTML = "\u0426\u044F \u043C\u043E\u0436\u043B\u0438\u0432\u0456\u0441\u0442\u044C \u043D\u0435 \u043F\u0456\u0434\u0442\u0440\u0438\u043C\u0443\u0454\u0442\u044C\u0441\u044F \u0443 IE."
}
function writeTitle() {
  document.write("<title>" + "\u0424\u043E\u0440\u043C\u0430\u0442\u0443\u0432\u0430\u043D\u043D\u044F \u0442\u0435\u043A\u0441\u0442\u0443" + "</title>")
}
function getTxt(s) {
  switch(s) {
    case "DEFAULT SIZE":
      return"\u0420\u043E\u0437\u043C\u0456\u0440 \u043F\u043E \u0437\u0430\u043C\u043E\u0432\u0447\u0443\u0432\u0430\u043D\u043D\u044E";
    case "Heading 1":
      return"\u0417\u0430\u0433\u043e\u043b\u043e\u0432\u043e\u043a 1";
    case "Heading 2":
      return"\u0417\u0430\u0433\u043e\u043b\u043e\u0432\u043e\u043a 2";
    case "Heading 3":
      return"\u0417\u0430\u0433\u043e\u043b\u043e\u0432\u043e\u043a 3";
    case "Heading 4":
      return"\u0417\u0430\u0433\u043e\u043b\u043e\u0432\u043e\u043a 4";
    case "Heading 5":
      return"\u0417\u0430\u0433\u043e\u043b\u043e\u0432\u043e\u043a 5";
    case "Heading 6":
      return"\u0417\u0430\u0433\u043e\u043b\u043e\u0432\u043e\u043a 6";
    case "Preformatted":
      return"\u0424\u043E\u0440\u043C\u0430\u0442\u043E\u0432\u0430\u043D\u0438\u0439";
    case "Normal":
      return"\u0417\u0432\u0438\u0447\u0430\u0439\u043D\u0438\u0439";
    case "Google Font":
      return"GOOGLE FONTS:"
  }
}
;