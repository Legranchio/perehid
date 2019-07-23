function loadTxt() {
  document.getElementById("tab0").innerHTML = "\u0421\u0435\u0440\u0432\u0456\u0441 FLICKR";
  document.getElementById("tab1").innerHTML = "\u041C\u043E\u0457 \u0444\u0430\u0439\u043B\u0438";
  document.getElementById("tab2").innerHTML = "\u0415\u0444\u0435\u043A\u0442\u0438";
  document.getElementById("lblTag").innerHTML = "\u0422\u0435\u0433:";
  document.getElementById("lblFlickrUserName").innerHTML = "\u0406\u043C\'\u044F \u043A\u043E\u0440\u0438\u0441\u0442\u0443\u0432\u0430\u0447\u0430 Flickr:";
  document.getElementById("lnkLoadMore").innerHTML = "\u0417\u0430\u0432\u0430\u043D\u0442\u0430\u0436\u0438\u0442\u0438 \u0431\u0456\u043B\u044C\u0448\u0435";
  document.getElementById("lblImgSrc").innerHTML = "URL \u0437\u043E\u0431\u0440\u0430\u0436\u0435\u043D\u043D\u044F:";
  document.getElementById("lblWidthHeight").innerHTML = "\u0420\u043E\u0437\u043C\u0456\u0440\u0438:";
  var optAlign = document.getElementsByName("optAlign");
  optAlign[0].text = "";
  optAlign[1].text = "\u041B\u0456\u0432\u043E\u0440\u0443\u0447";
  optAlign[2].text = "\u041F\u0440\u0430\u0432\u043E\u0440\u0443\u0447";
  document.getElementById("lblTitle").innerHTML = "\u0417\u0430\u0433\u043e\u043b\u043e\u0432\u043e\u043a:";
  document.getElementById("lblAlign").innerHTML = "\u0412\u0438\u0440\u0456\u0432\u043D\u044E\u0432\u0430\u043D\u043D\u044F:";
  document.getElementById("lblMargin").innerHTML = "\u041F\u043E\u043B\u044F: (TOP / RIGHT / BOTTOM / LEFT)";
  document.getElementById("lblSize1").innerHTML = "SMALL SQUARE";
  document.getElementById("lblSize2").innerHTML = "THUMBNAIL";
  document.getElementById("lblSize3").innerHTML = "SMALL";
  document.getElementById("lblSize5").innerHTML = "MEDIUM";
  document.getElementById("lblSize6").innerHTML = "LARGE";
  document.getElementById("lblOpenLarger").innerHTML = "\u0417\u0431\u0456\u043B\u044C\u0448\u0438\u0442\u0438 \u043A\u0430\u0440\u0442\u0438\u043D\u043A\u0443 \u0437 LIGHTBOX, \u0430\u0431\u043E";
  document.getElementById("lblLinkToUrl").innerHTML = "\u0412\u0441\u0442\u0430\u0432\u0438\u0442\u0438 \u0433\u0456\u043F\u0435\u0440\u043F\u043E\u0441\u0438\u043B\u0430\u043D\u043D\u044F:";
  document.getElementById("lblNewWindow").innerHTML = "\u0412\u0456\u0434\u043A\u0440\u0438\u0442\u0438 \u0443 \u043D\u043E\u0432\u043E\u043C\u0443 \u0432\u0456\u043A\u043D\u0456.";
  document.getElementById("btnCancel").value = "\u0421\u043A\u0430\u0441\u0443\u0432\u0430\u0442\u0438";
  document.getElementById("btnSearch").value = " \u041F\u043E\u0448\u0443\u043A ";
}
function writeTitle() {
  document.write("<title>" + "\u0412\u0441\u0442\u0430\u0432\u043A\u0430 \u0437\u043E\u0431\u0440\u0430\u0436\u0435\u043D\u043D\u044F" + "</title>")
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