function loadTxt() {
  document.getElementById("lblSearch").innerHTML = "\u0417\u043D\u0430\u0439\u0442\u0438:";
  document.getElementById("lblReplace").innerHTML = "\u0417\u0430\u043C\u0456\u043D\u0438\u0442\u0438:";
  document.getElementById("lblMatchCase").innerHTML = "\u0440\u0435\u0433\u0456\u0441\u0442\u0440";
  document.getElementById("lblMatchWhole").innerHTML = "\u0448\u0443\u043A\u0430\u0442\u0438 \u0441\u043B\u043E\u0432\u0430";
  document.getElementById("btnSearch").value = "\u0428\u0443\u043A\u0430\u0442\u0438 \u0434\u0430\u043B\u0456";
  document.getElementById("btnReplace").value = "\u0417\u0430\u043C\u0456\u043D\u0438\u0442\u0438";
  document.getElementById("btnReplaceAll").value = "\u0417\u0430\u043C\u0456\u043D\u0438\u0442\u0438 \u0432\u0441\u0435"
}
function getTxt(s) {
  switch(s) {
    case "Finished searching":
      return"\u041F\u043E\u0448\u0443\u043A \u043F\u043E \u0434\u043E\u043A\u0443\u043C\u0435\u043D\u0442\u0443 \u0437\u0430\u0432\u0435\u0440\u0448\u0435\u043D\u043E.\\n\u0420\u043E\u0437\u043F\u043E\u0447\u0430\u0442\u0438 \u043F\u043E\u0448\u0443\u043A \u0441\u043F\u043E\u0447\u0430\u0442\u043A\u0443?";
    default:
      return""
  }
}
function writeTitle() {
  document.write("<title>\u043F\u043E\u0448\u0443\u043A \u0442\u0430 \u0437\u0430\u043C\u0456\u043D\u0430</title>")
}
;