
var password = document.getElementById("password");
var password_confirmation = document.getElementById("password_confirmation");
var token = "";
var token_confirmation = "";


password.addEventListener("change", (e) => {
  document.getElementById("content").innerHTML = e.target.value;
});
password_confirmation.addEventListener("change", (e) => {
  token = e.target.value;
});

if (token_confirmation.length) {
  if (token === token_confirmation) {
    console.log("right!");
  }
  else {
    console.log("bad!");
  }
}

// console.log(password_token);
// console.log(password_confirmation_token());