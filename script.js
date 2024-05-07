// JavaScript for back to top button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("back-to-top").style.display = "block";
    } else {
        document.getElementById("back-to-top").style.display = "none";
    }
}

document.getElementById("back-to-top").addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// JavaScript for contact form submission
document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the default form submission behavior
    // You can add your code here to handle form submission, such as sending the form data to a server
    // For demonstration purposes, let's just log the form data to the console
    const formData = new FormData(this);
    for (const [name, value] of formData.entries()) {
        console.log(`${name}: ${value}`);
    }
    alert("Your message has been sent!"); // Display an alert after form submission
    this.reset(); // Reset the form fields after submission
});
//hosting , functionality of the contact form, 