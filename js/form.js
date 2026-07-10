document.addEventListener("DOMContentLoaded", function () {

  if (typeof flatpickr === "undefined") {
    console.error("flatpickr が読み込まれていません");
    return;
  }

  const firstDate = document.querySelector("#first-date");
  const secondDate = document.querySelector("#second-date");

  const firstFp = firstDate ? flatpickr(firstDate, {
    locale: "ja",
    dateFormat: "Y/m/d",
    minDate: "today",
    disableMobile: true,
    allowInput: false
  }) : null;

  const secondFp = secondDate ? flatpickr(secondDate, {
    locale: "ja",
    dateFormat: "Y/m/d",
    minDate: "today",
    disableMobile: true,
    allowInput: false
  }) : null;

  document.querySelectorAll(".form-fa").forEach(function (icon) {
    icon.addEventListener("click", function () {

      const targetId = icon.getAttribute("data-target");

      if (targetId === "first-date" && firstFp) firstFp.open();
      if (targetId === "second-date" && secondFp) secondFp.open();

    });
  });

});
