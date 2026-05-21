function validateLoginForm(event) {
      const email = document.getElementById("email").value.trim();
      const password = document.getElementById("password").value.trim();

      // Frontend JS Validation 
      if (email === "" || password === "") {
        alert("Please fill all fields before logging in!");
        event.preventDefault(); // stop form submit
        return false;
      }

      // basic email format check
      const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
      if (!emailPattern.test(email)) {
        alert("Please enter a valid email address!");
        event.preventDefault();
        return false;
      }
      return true;
    }

function onclick3(){
    alert("Message Sent Successfully !!")
}

function joinus(){
  alert("Login First To Join !!")

}