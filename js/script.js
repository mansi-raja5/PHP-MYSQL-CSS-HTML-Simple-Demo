const selectProperty = (prop) => {
  $(".proprty").removeClass("selected");
  $(prop).addClass("selected");
};

const selectIcon = (prop) => {
  alert($(prop).attr("data-type") + " clicked!");
};

$(".proprty")
  .css("cursor", "pointer")
  .click(function () {
    selectProperty(this);
  })
  .hover(
    function () {
      $(this).css("background", "#cbcfd3");
    },
    function () {
      $(this).css("background", "");
    }
  );

$(".icon")
  .click(function () {
    selectIcon(this);
  })
  .hover(
    function () {
      $(this).css("background", "#e30613");
    },
    function () {
      $(this).css("background", "");
    }
  );
