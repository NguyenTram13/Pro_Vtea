window.addEventListener("load", function () {
  const listcate = document.querySelector(".mscl-top-item");
  const filterCate = document.querySelectorAll(".filter_cate");
  // console.log(filterCate);
  filterCate.forEach((item) => {
    item.addEventListener("click", function (e) {
      // item.classList.remove("active");
      filterCate.forEach((item) => item.classList.remove("active"));
      item.classList.add("active");
    });
  });
});
