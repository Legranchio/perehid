function loadTxt() {
  document.getElementById("tab0").innerHTML = "\u0422\u0415\u041a\u0421\u0422";
  document.getElementById("tab1").innerHTML = "\u0422\u0406\u041D\u0406";
  document.getElementById("tab2").innerHTML = "\u041f\u0410\u0420\u0410\u0413\u0420\u0410\u0424";
  document.getElementById("tab3").innerHTML = "LISTINGS";
  document.getElementById("tab4").innerHTML = "\u0420\u041E\u0417\u041C\u0406\u0420";
  document.getElementById("lblColor").innerHTML = "\u041A\u043E\u043B\u0456\u0440 \u0442\u0435\u043A\u0441\u0442\u0443:";
  document.getElementById("lblHighlight").innerHTML = "\u041A\u043E\u043B\u0456\u0440 \u0442\u043B\u0430:";
  document.getElementById("lblLineHeight").innerHTML = "\u0412\u0438\u0441\u043E\u0442\u0430 \u0440\u044F\u0434\u043A\u0456\u0432:";
  document.getElementById("lblLetterSpacing").innerHTML = "\u0412\u0456\u0434\u0441\u0442\u0443\u043F\u0438 \u0441\u0438\u043C\u0432\u043E\u043B\u0456\u0432:";
  document.getElementById("lblWordSpacing").innerHTML = "\u0412\u0456\u0434\u0441\u0442\u0443\u043F\u0438 \u0441\u043B\u0456\u0432:";
  document.getElementById("lblNote").innerHTML = "\u0426\u044F \u043C\u043E\u0436\u043B\u0438\u0432\u0456\u0441\u0442\u044C \u043D\u0435 \u043F\u0456\u0434\u0442\u0440\u0438\u043C\u0443\u0454\u0442\u044C\u0441\u044F \u0443 IE."
}
function writeTitle() {
  document.write("<title>" + "\u041F\u0430\u0440\u0430\u043C\u0435\u0442\u0440\u0438 \u0442\u0435\u043A\u0441\u0442\u0443" + "</title>")
}
function getTxt(s) {
  switch(s) {
    case "DEFAULT SIZE":
      return"\u0420\u043E\u0437\u043C\u0456\u0440 \u043F\u043E \u0437\u0430\u043C\u043E\u0432\u0447\u0443\u0432\u0430\u043D\u043D\u044E";
	case "Heading 1": return "Heading 1";
    case "Heading 2": return "Heading 2";
    case "Heading 3": return "Heading 3";
    case "Heading 4": return "Heading 4";
    case "Heading 5": return "Heading 5";
    case "Heading 6": return "Heading 6";
    case "Preformatted": return "Preformatted";
    case "Normal": return "Normal";
  }
}
;