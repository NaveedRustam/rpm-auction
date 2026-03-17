// Load Product Info 
document.addEventListener("DOMContentLoaded", function () {
    const orderModal = document.getElementById("orderModal");

    orderModal.addEventListener("show.bs.modal", function (event) {
        const button = event.relatedTarget;

        // Get product data from button attributes
        const title = button.getAttribute("data-title");
        const price = button.getAttribute("data-price");
        const id = button.getAttribute("data-id");
        const oldPrice = button.getAttribute("data-oldprice");
        const discount = button.getAttribute("data-discount");
        const image = button.getAttribute("data-image");
        
        $('#category_id').val(id)
        // Update modal content
        document.getElementById("modalProductTitle").textContent = title;
        document.getElementById("modalNewPrice").textContent = "Rs." + price;
        document.getElementById("modalOldPrice").textContent = "Rs." + oldPrice;
        document.getElementById("modalDiscount").textContent = discount;
        document.getElementById("modalProductImg").src = image;
    });
});
// Quantity Buttons Script 

document.addEventListener("DOMContentLoaded", function () {
    const qtyInput = document.getElementById("productQty");
    const qtyMinus = document.getElementById("qtyMinus");
    const qtyPlus = document.getElementById("qtyPlus");

    qtyMinus.addEventListener("click", () => {
        let current = parseInt(qtyInput.value) || 1;
        if (current > 1) qtyInput.value = current - 1;
        $('#total_order').val($(productQty).val());
    });

    qtyPlus.addEventListener("click", () => {
        let current = parseInt(qtyInput.value) || 1;
        qtyInput.value = current + 1;
        $('#total_order').val($(productQty).val());
    });
});
// change image
  const mainImg = document.getElementById("modalProductImg");
const thumbs = document.querySelectorAll(".thumb");

thumbs.forEach((thumb) => {
    thumb.addEventListener("click", function () {
        // main image change karo
        mainImg.src = this.src;

        // active class update karo
        thumbs.forEach(t => t.classList.remove("active"));
        this.classList.add("active");
    });
});

// Default: pehli thumbnail active
thumbs[0].classList.add("active");

// document.addEventListener("DOMContentLoaded", function () {
//   const qtyInput = document.getElementById("productQty");
//   const qtyMinus = document.getElementById("qtyMinus");
//   const qtyPlus = document.getElementById("qtyPlus");

//   qtyMinus.addEventListener("click", () => {
//     let current = parseInt(qtyInput.value) || 1;
//     if (current > 1) qtyInput.value = current - 1;
//   });

//   qtyPlus.addEventListener("click", () => {
//     let current = parseInt(qtyInput.value) || 1;
//     qtyInput.value = current + 1;
//   });
// });
// Change main image when thumbnail clicked
// function changeImage(img) {
//     document.getElementById("mainImage").src = img.src;
// }