document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let formData = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        subject: document.getElementById("subject").value,
        message: document.getElementById("message").value,
        _token: document.querySelector('input[name="_token"]').getAttribute("value")
    };

    fetch("/send-email", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').getAttribute("value")
        },
        body: JSON.stringify(formData)
    })
    .then(response => response.json())
    .then(data => alert(data.message))
    .catch(error => console.error("Erro:", error));
});
