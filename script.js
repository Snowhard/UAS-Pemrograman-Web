function mykelompok() {
    var products = ["Vicaristo Rammang - 20021106194", "Micha Sanger - 20021106118", "Fira Oroh - 20021106021"]; 
    // menggunakan perulangan untuk mencetak semua isi array 
    products.forEach((data) => { 
        document.write(`<li>${data}</li>`);
    }); 
}

// fungsi menuju portal
function portal() {
    location.replace="portal.php";
}

// proses melakukan login
// function login() {
//     const loginForm = document.getElementById("login-form");
//     const loginButton = document.getElementById("login-form-submit");

// loginButton.addEventListener("click", (e) => {
//     e.preventDefault();
//     const email = loginForm.email.value;
//     const password = loginForm.password.value;

//     if (email === "admin@gmail.com" && password === "admin") {
//         portal();
//     } else {
//         alert("Invalid email/password");
//         window.location.href="SignIn.html";
//         return;
//     }
// })
// }
