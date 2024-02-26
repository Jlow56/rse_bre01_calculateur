document.addEventListener("DOMContentLoaded", function () {
  const presentielRadio = document.getElementById("presentiel");
  const vehicleGroup = document.getElementById("vehicle-group");

  presentielRadio.addEventListener("change", function () {
    if (this.checked && this.value === "Presentiel") {
      vehicleGroup.style.display = "block";
    } else {
      vehicleGroup.style.display = "none";
    }
  });

  const distancielRadio = document.getElementById("distanciel");
  distancielRadio.addEventListener("change", function () {
    if (this.checked && this.value === "Distanciel") {
      vehicleGroup.style.display = "none";
    }
  });
});
