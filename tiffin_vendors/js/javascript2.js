const logoContainer = document.getElementById("logoContainer");
const canvas = document.createElement("canvas");
canvas.width = 100;
canvas.height = 100;
const ctx = canvas.getContext("2d");

function submitForm() {
  const name = document.getElementById("TiffinName").value;
  const initials = getInitials(name);

  // Create the image
  const color = getRandomColor();
  ctx.fillStyle = color;
  ctx.fillRect(0, 0, 100, 100);
  ctx.fillStyle = "white";
  ctx.font = "40px Arial";
  ctx.fillText(initials, 25, 60);

  const imageDataURL = canvas.toDataURL();
  const img = document.createElement("img");
  img.src = imageDataURL;
  img.alt = name + "'s Logo";
  logoContainer.innerHTML = "";
  logoContainer.appendChild(img);
  alert("Image generated which will be used as your logo ");
}

function getInitials(name) {
  return name.split(" ").map(word => word[0]).join("");
}

function getRandomColor() {
  const letters = "0123456789ABCDEF";
  let color = "#";
  for (let i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}