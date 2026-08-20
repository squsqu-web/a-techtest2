document.addEventListener("DOMContentLoaded", function () {

  // =========================
  // 生年月日
  // =========================

  if (typeof flatpickr !== "undefined") {

    const birthday = document.querySelector(".js-birthday");

    if (birthday) {
      flatpickr(birthday, {
        locale: "ja",
        dateFormat: "Y年n月j日",
        maxDate: "today",
        disableMobile: true,
        allowInput: false
      });
    }

  }

});