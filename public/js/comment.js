$(function () {
  $(".rateYo").rateYo({
    starWidth: "25px",
  });
  $(".rateYoSumpro").rateYo({
    starWidth: "15px",
  });
});

window.addEventListener("load", function () {
  const formCmt = document.querySelector(".form_cmt");
  const ListComment = document.querySelector(".list_comment");
  function renderComment(item, pathImg) {
    const template = `
      <div class="flex gap-2 my-3">
                              <div>

                                  <img class="w-[100px] h-[100px] rounded-full" src="${
                                    item.avt
                                      ? pathImg + item.avt
                                      : pathImg + "avt.jpg"
                                  }" alt="">
                              </div>
                              <div>

                                  <div class="arrival-product-evaluate">
                                  <div class="rateYo" data-rateyo-read-only="true" data-rateyo-rating="${
                                    item.rating
                                  }"></div>
                                      <!-- <span class="sold-out"><?php echo $new['views'] ?></span> -->
                                  </div>
                                  <div class="py-2">
                                      <span class="text-[#323334] font-bold text-[22px] ">${
                                        item.name
                                      }</span>
                                      <span>${item.created_at}</span>
                                  </div>
                                  <p>${item.content}</p>
                                  <div class="flex gap-32 py-2">
                                      <div class="hover:text-[#98cb50]">
                                          <span><i class="fa-regular fa-thumbs-up"></i></span>
                                          <span>Helpfull (2)</span>
                                      </div>
                                      <div class="hover:text-[#98cb50]">
                                          <span><i class="fa-regular fa-thumbs-down"></i></span>
                                          <span>Unhelpfull (0)</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
      `;
    $(".rateYo").rateYo({
      starWidth: "25px",
    });

    ListComment.insertAdjacentHTML("beforeend", template);
  }
  formCmt?.addEventListener("submit", function (e) {
    e.preventDefault();
    let rate = document.querySelector(".number-rate").textContent;
    let comment = document.querySelector("#comment").value;
    let iduser = this.dataset.iduser;
    let idpro = this.dataset.idpro;
    let url = this.getAttribute("action");
    let pathImg = this.dataset.pathimg;
    console.log(rate, comment, iduser, idpro, url);
    if (+rate > 0) {
      $.ajax({
        type: "POST",
        url: url,
        data: { iduser, idpro, comment, rate },
        dataType: "text",
        success: function (data) {
          let response = JSON.parse(data);
          console.log(response);
          ListComment.innerHTML = "";
          response.forEach((item) => {
            renderComment(item, pathImg);
          });
        },
        error: function (e) {
          console.log(e);
        },
      });
    } else {
      alert("Vui lòng nhập số sao!");
    }
  });
});
