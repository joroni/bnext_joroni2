$(window).on('resize', hexagonalPattern);

hexagonalPattern();



function hexagonalPattern() {
  var width = $('.container').width();
  var $item = $('.hexa');
  var itemWidth = $item.width() * 2;
  var margin = 1;
  var rowLength = Math.floor(width / (itemWidth * 3 / 4 + 1));

  var itemLength = $item.length;
  var patternLength = Math.floor(itemLength / rowLength);
  var currentRow = 1;

  $item.each(function (index) {
    $(this).removeClass('top');
    if (index + 1 > currentRow * rowLength) {
      currentRow++;
    }

    var indexRow = index + 1 - (currentRow - 1) * rowLength;

    if (indexRow % 2 == 0) {
      $(this).addClass('top');
    }
  });



  $item.each(function (index) { //run when the DOM is ready
    $("li.hexa").mouseover(function () { //use a class, since your ID gets mangled
      $(this).toggleClass("active"); //add the class to the clicked element

      if ($(this).hasClass("c1")) {
        $(this).removeClass("c1").addClass("c2");
      }

      if ($(this).hasClass("c2")) {
        $(this).removeClass("c2").addClass("c3");
      }

      if ($(this).hasClass("c3")) {
        $(this).removeClass("c3").addClass("c4");
      }
      if ($(this).hasClass("c4")) {
        $(this).removeClass("c4");
      } else {
        $(this).addClass("c1");

      }
    });

    $("li.hexa").mouseout(function () { //use a class, since your ID gets mangled
      $(this).toggleClass("active"); //add the class to the clicked element
    });
  })
}