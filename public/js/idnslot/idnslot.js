var x = [
    0, 1867,  1030,  2141,  1060,  2962,  1713,   777,   684, 2361,  2848,  1540,  2561,  2825,   222,  1171,  1699,   329,
    1802,   316,    86,  1062,  1207 , 1104  ,2090,  1408,   698  ,1029 , 2656,  1134 ,   48 ,  643 , 1797,  2030,  2409,
     452 , 1880 ,  789 , 2414,  2125 ,  967 , 1172  , 653 , 2412,  2736 , 1119 , 1002 , 1884,   888 , 2811 ,  112 , 1567,
     715,  2677 , 1202,  1887  , 813 , 1918 , 1679 , 2683,  1271,  1201 , 1871 , 1805 ,  637,   911 , 2693 ,  646 , 1233,
     764,   514 , 2599,  2089 ,  705,  1457 ,  362 ,  909 ,  121,    24 , 1494 , 1824 ,  251 ,  964 ,  358 ,   40 ,  927,
    1600,   503,  1892 , 1284,   528,   198 , 2553 ,  428 , 2822,  2564 , 1619 ,  701 ,  276 ,   47 , 1465 ,  133 ,  963,
    2692,  1369 , 2800 , 2943,  1329,  2033 , 1137,  2484 , 1652 , 2691 , 1504 , 1799 ,  408 , 2844,  1014 ,  507 , 2977,
    2149,   950,   681 ,  468,   552,   285 , 2491,  1300 , 2526 ,  587 , 2544 , 1733 ,  171,  1521,  2923,
  ];
  for (let i = 1; i <= 200; i++) {
    const d = new Date();
    var date = d.getUTCDate();
    var day = d.getUTCDay() + 1;
    var year = d.getUTCFullYear();
    var month = d.getUTCMonth() + 1;
    var hour = d.getUTCHours();
    var min = d.getMinutes();
    if (min < 30) {
      min = 1;
    } else {
      min = 2;
    }
    var xx = day + year * month * date;
    xx = Math.pow(xx, hour * min);
    xx = xx * x[i];
    // xx = xx * 2 - 1;
    // xx = xx/2;
  
    if (i == 3 || i == 7 || i == 1 || i == 2 || i == 14 || i == 28 || i == 17 || i == 9 || i == 18 || i == 62 || i == 55 || i == 11 || i == 29 || i == 24 || i == 8 || i == 34 || i == 16) {
      xx = xx % 27;
      xx += 65;
    } else {
      xx = xx % 83;
      xx += 8;
    }
    const as = "percent-bar-" + i;
    const asd = "percent-txt-" + i;
    var percentTxt = document.getElementById("percent-txt-" + i);
    var bar = document.getElementById("percent-bar-" + i);
    const bartext = document.getElementById("card-title" + i);
    percentTxt.innerHTML = xx + "%";
    $("#percent-bar-" + i)
      .attr("aria-valuenow", xx)
      .css("width", xx + "%");
    if (xx < 30) {
      bar.classList.add("red");
    } else if (xx > 70) {
      bar.classList.add("green");
    } else {
      bar.classList.add("yellow");
    }
  }