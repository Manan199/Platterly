const SignupBtn = document.querySelector(".SignupBtn");
const LoginBtn = document.querySelector(".LoginBtn");
const moveBtn = document.querySelector(".moveBtn");
const login = document.querySelector(".login");
const signup = document.querySelector(".signup");


LoginBtn.addEventListener("click",()=>{
    moveBtn.classList.add("rightBtn");
    login.classList.add("loginForm");
    signup.classList.remove("signupForm");
    moveBtn.innerHTML = "Login";
})

SignupBtn.addEventListener("click",()=>{
    moveBtn.classList.remove("rightBtn");
    signup.classList.add("signupForm");
    login.classList.remove("loginForm");
    moveBtn.innerHTML = "SignUp";    
})
  
  function myFunction() {
    var x = document.getElementById("Vendorpwd");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  function cloneForm() {
    let originalForm = document.getElementById("addproduct-form");
    let clonedForm = originalForm.cloneNode(true);
    clonedForm.id = "cloned-form";
    // add the cloned form to the page
    document.body.appendChild(clonedForm);
  }
document.getElementById("Feedbackform").addEventListener("submit", function(e)
{
    e.preventDefault();
      var formData = new FormData(this);
        fetch("feedback-handler.php",
        {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => 
        {
          alert(data);
        });
});

var subjectObject = {
  "Front-end": {
    "HTML": ["Links", "Images", "Tables", "Lists"],
    "CSS": ["Borders", "Margins", "Backgrounds", "Float"],
    "JavaScript": ["Variables", "Operators", "Functions", "Conditions"]
  },
  "Back-end": {
    "PHP": ["Variables", "Strings", "Arrays"],
    "SQL": ["SELECT", "UPDATE", "DELETE"]
  }
}
window.onload = function() {
  var subjectSel = document.getElementById("subject");
  var topicSel = document.getElementById("topic");
  var chapterSel = document.getElementById("chapter");
  for (var x in subjectObject) {
    subjectSel.options[subjectSel.options.length] = new Option(x, x);
  }
  subjectSel.onchange = function() {
    //empty Chapters- and Topics- dropdowns
    chapterSel.length = 1;
    topicSel.length = 1;
    //display correct values
    for (var y in subjectObject[this.value]) {
      topicSel.options[topicSel.options.length] = new Option(y, y);
    }
  }
  topicSel.onchange = function() {
    //empty Chapters dropdown
    chapterSel.length = 1;
    //display correct values
    var z = subjectObject[subjectSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
    }
  }
}