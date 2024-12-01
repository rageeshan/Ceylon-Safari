
// Automatically format the card number as '1111 2222 3333 4444'
 const cnumberInput = document.getElementById('cnumber');

 cnumberInput.addEventListener('input', function (e) {
     let value = e.target.value.replace(/\D/g, '');  // Remove all non-digit characters
     value = value.substring(0, 16);  // Restrict input to 16 digits
     
     // Add space after every 4 digits
     const formattedValue = value.replace(/(.{4})/g, '$1 ').trim();
     
     e.target.value = formattedValue;
 });


 // Cardholder Name Restrictions (only alphabets and spaces)
 const chnameInput = document.getElementById('chname');
 chnameInput.addEventListener('input', function (e) {
     let value = e.target.value.replace(/[^a-zA-Z\s]/g, '');  // Remove non-alphabetic characters
     e.target.value = value;
 });

  // Expiry Date Formatting (MM/YY)
  const exdateInput = document.getElementById('exdate');
  exdateInput.addEventListener('input', function (e) {
      let value = e.target.value.replace(/\D/g, '');  // Remove non-digit characters

      // Insert '/' after the first two digits
      if (value.length >= 2) {
          value = value.substring(0, 2) + '/' + value.substring(2);
      }

      e.target.value = value.substring(0, 5);  // Limit the input to 5 characters (MM/YY)
  });

  // Expiry Date Validation
  exdateInput.addEventListener('blur', function (e) {
      const [month, year] = e.target.value.split('/').map(Number);

      if (month < 1 || month > 12) {
          alert('Invalid month. Please enter a valid month between 01 and 12.');
          e.target.value = '';
      }

      const currentYear = new Date().getFullYear() % 100; // Get last two digits of current year
      if (year < currentYear) {
          alert('Invalid year. The expiry year is in the past.');
          e.target.value = '';
      }
  });

   // CVV Input Formatting (3 digits)
   const cvvInput = document.getElementById('cvv');
   cvvInput.addEventListener('input', function (e) {
       let value = e.target.value.replace(/\D/g, '');  // Remove non-digit characters
       e.target.value = value.substring(0, 3);  // Limit the input to 3 digits
   });

    document.querySelector('.paybutton').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the form from submitting right away

    const cnumber = document.getElementById("cnumber").value;
    const chname = document.getElementById("chname").value;
    const exdate = document.getElementById("exdate").value;
    const cvv = document.getElementById("cvv").value;

    // Validate form fields
    if (!cnumber || !chname || !exdate || !cvv) {
        alert("All fields are required.");
        return false;
    }

    // Basic card number validation (16 digits, with dashes)
    const cnumberPattern = /^\d{4} \d{4} \d{4} \d{4}$/;
    if (!cnumberPattern.test(cnumber)) {
        alert("Invalid card number. It should be in the format xxxx-xxxx-xxxx-xxxx.");
        return false;
    }

   // Basic CVV validation (3 digits)
    if (cvv.length !== 3 || isNaN(cvv)) {
        alert("Invalid CVV. It should be a 3-digit number.");
        return false;
    }

    // Basic expiry date validation (MM/YY format)
    const exdatePattern = /^(0[1-9]|1[0-2])\/\d{2}$/;
    if (!exdateePattern.test(exdate)) {
        alert("Invalid expiry date. It should be in the format MM/YY.");
        return false;
    }

    // If validation passes, proceed to payment (you can replace this with actual payment logic)
    alert("Payment processed successfully.");
});
