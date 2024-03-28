let closer = document.querySelector("#closer");

closer.onclick = () => {
  closer.style.display = "none";
  navbar.classList.remove("active");
  cart.classList.remove("active");
  loginForm.classList.remove("active");
};

let navbar = document.querySelector(".navbar");

document.querySelector("#menu-btn").onclick = () => {
  closer.style.display = "block";
  navbar.classList.toggle("active");
};

let cart = document.querySelector(".shopping-cart");

document.querySelector("#cart-btn").onclick = () => {
  closer.style.display = "block";
  cart.classList.toggle("active");
};

let searchForm = document.querySelector(".header .search-form");

document.querySelector("#search-btn").onclick = () => {
  searchForm.classList.toggle("active");
};

window.onscroll = () => {
  searchForm.classList.remove("active");
};

let slides = document.querySelectorAll(".home .slides-container .slide");
let index = 0;

function next() {
  slides[index].classList.remove("active");
  index = (index + 1) % slides.length;
  slides[index].classList.add("active");
}

function prev() {
  slides[index].classList.remove("active");
  index = (index - 1 + slides.length) % slides.length;
  slides[index].classList.add("active");
}


document.addEventListener("DOMContentLoaded", function() {
  const addToCartButtons = document.querySelectorAll('.fas.fa-shopping-cart');

  addToCartButtons.forEach(button => {
      button.addEventListener('click', function(event) {
          event.preventDefault();

          // Get product information
          const productBox = this.closest('.box');
          const productName = productBox.querySelector('.content h3').textContent;
          const productPrice = parseFloat(productBox.querySelector('.price').textContent.replace('Rs ', ''));

          // Create new cart item element
          const cartItem = document.createElement('div');
          cartItem.classList.add('cart-item');
          cartItem.innerHTML = `
              <p>${productName}</p>
              <p>Rs ${productPrice.toFixed(2)}</p>
          `;

          // Append cart item to the cart
          const cartContainer = document.getElementById('cart-btn');
          cartContainer.appendChild(cartItem);

          // Update total
          updateTotal(productPrice);
      });
  });

  function updateTotal(price) {
      const totalElement = document.getElementById('total');
      let currentTotal = parseFloat(totalElement.textContent.replace('Rs ', ''));

      // Add product price to the current total
      currentTotal += price;

      // Update total element
      totalElement.textContent = `Rs ${currentTotal.toFixed(2)}`;
  }
});
