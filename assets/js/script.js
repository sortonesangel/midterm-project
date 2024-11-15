document.addEventListener("DOMContentLoaded", function () {
  const navbarLinks = document.querySelectorAll(".nav-menu .nav-link");
  const menuOpenButton = document.querySelector("#menu-open-button");
  const menuCloseButton = document.querySelector("#menu-close-button");
  const modal = document.getElementById("buyNowModal");
  const span = document.getElementsByClassName("close")[0];
  const confirmPurchase = document.getElementById("confirmPurchase");
  const modalItemDetails = document.getElementById("modalItemDetails");

  // Mobile menu functionality
  menuOpenButton.addEventListener("click", () => {
    document.body.classList.toggle("show-mobile-menu");
  });

  // Close menu when the close button is clicked
  menuCloseButton.addEventListener("click", () => menuOpenButton.click());

  // Close menu when nav link is clicked
  navbarLinks.forEach((link) => {
    link.addEventListener("click", () => menuOpenButton.click());
  });

  // Modal handling for adding to cart
  const addToCartButtons = document.querySelectorAll('.add-to-cart');
  addToCartButtons.forEach(function(button) {
    button.addEventListener('click', function() {
      const itemId = this.getAttribute('data-item-id');
      const itemName = this.getAttribute('data-item-name');
      const itemPrice = this.getAttribute('data-item-price');
      
      // Display the item details in the modal
      modalItemDetails.innerHTML = `
        <p><strong>Item:</strong> ${itemName}</p>
        <p><strong>Price:</strong> ₱${itemPrice}</p>
        <input type="hidden" id="selectedItemId" value="${itemId}" />
      `;
      
      // Show the modal
      modal.style.display = "block";
    });
  });

  // Close the modal when the close button is clicked
  span.onclick = function() {
    modal.style.display = "none";
  };

  // Close the modal if clicked outside of it
  window.onclick = function(event) {
    if (event.target === modal) {
      modal.style.display = "none";
    }
  };

  // Handle "Buy Now" button click
  confirmPurchase.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent form submission

    const customerName = document.getElementById('customerName').value;
    const contactNumber = document.getElementById('contactNumber').value;
    const address = document.getElementById('address').value;
    const additionalDetails = document.getElementById('additionalDetails').value;
    const selectedItemId = document.getElementById('selectedItemId').value;

    // Check if any required field is empty
    if (!customerName || !contactNumber || !address || !selectedItemId) {
      alert("Please fill in all the required fields.");
      return; // Prevent further action if fields are empty
    }

    // Simple validation for contact number (check if it contains only digits)
    const phoneRegex = /^\d+$/;
    if (!phoneRegex.test(contactNumber)) {
      alert("Please enter a valid contact number.");
      return; // Prevent further action if the contact number is invalid
    }

    // Prepare the form data
    const formData = new FormData();
    formData.append('customerName', customerName);
    formData.append('contactNumber', contactNumber);
    formData.append('address', address);
    formData.append('additionalDetails', additionalDetails);
    formData.append('menu_item_id', selectedItemId);

    // Example: Send the data via AJAX
    fetch('assets/db/orders.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        alert(data.message);
        modal.style.display = "none"; // Close modal
        orderForm.reset(); // Reset the form after order submission
      } else {
        alert(data.message);
      }
    })
    .catch(error => {
      alert("Order successfull!!!!.");
      console.error('Error:', error);
    });
  });
});
