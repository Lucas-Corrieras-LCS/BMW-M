function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
}

let currentAudio = null;
let currentButton = null;

function toggleSound(button, soundSrc) {
  if (currentAudio) {
    currentAudio.pause();
    currentAudio.currentTime = 0;
    if (currentButton) {
      currentButton.textContent = "Écouter le son";
    }
  }

  if (
    !currentAudio ||
    currentAudio.src !== new URL(soundSrc, document.baseURI).href
  ) {
    currentAudio = new Audio(soundSrc);
    currentAudio.play();
    currentButton = button;
    button.textContent = "Arrêter le son";

    currentAudio.onended = () => {
      button.textContent = "Écouter le son";
      currentAudio = null;
      currentButton = null;
    };
  } else {
    currentAudio = null;
    currentButton = null;
  }
}

window.addEventListener("load", function () {
  const loading = document.getElementById("loading");
  if (loading) {
    setTimeout(() => {
      loading.classList.add("hidden");
    }, 500);
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const partenaires = document.querySelectorAll(".partenaire");

  partenaires.forEach((partenaire) => {
    partenaire.addEventListener("click", function () {
      this.classList.toggle("flipped");
    });
  });
});

document.getElementById("bmw-logo").addEventListener("click", function () {
  document.body.classList.add("glitch-effect");

  let blackout = document.createElement("div");
  blackout.classList.add("blackout");
  document.body.appendChild(blackout);

  setTimeout(() => {
    document.body.classList.remove("glitch-effect");

    blackout.remove();
    setTimeout(() => {
      location.reload();
    });
  }, 800);
});

document.getElementById("openModal").addEventListener("click", function () {
  document.getElementById("myModal").classList.add("show");
});

document.querySelector(".close").addEventListener("click", function () {
  document.getElementById("myModal").classList.remove("show");
});

window.addEventListener("click", function (event) {
  if (event.target === document.getElementById("myModal")) {
    document.getElementById("myModal").classList.remove("show");
  }
});
