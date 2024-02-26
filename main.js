document.addEventListener("DOMContentLoaded", function () {
  const presentielRadio = document.getElementById("presentiel");
  const vehicleGroup = document.getElementById("vehicle-group");
  const distance = document.getElementById("distance");
  const motor = document.getElementById("motor");
  const materialLabel = document.getElementById("material-label");
  const kwhLabel = document.getElementById("kwh-label");
  const heatingLabel = document.getElementById("heating-label");
  const heatingKwhLabel = document.getElementById("heating-kwh-label");
  const recyclageLabel = document.getElementById("recyclage-label");

  presentielRadio.addEventListener("change", function () {
    if (this.checked && this.value === "Presentiel") {
      vehicleGroup.style.display = "block";
      distance.style.display = "block";
      motor.style.display = "block";
      materialLabel.innerText = "6. Quel type de PC avez vous ?";
      kwhLabel.innerText =
        "7. Quelle est la consommation d'électricité pour votre bâtiment ? (en kw/heure)";
      heatingLabel.innerText =
        "8. Quel type d’énergie utilisez-vous pour le chauffage ?";
      heatingKwhLabel.innerText =
        "9. Quelle est votre consommation d’énergie pour le chauffage ?";
      recyclageLabel.innerText = "10. Pratiquez vous le recyclage ?";
    } else {
      vehicleGroup.style.display = "none";
      distance.style.display = "none";
      motor.style.display = "none";
    }
  });

  const distancielRadio = document.getElementById("distanciel");
  distancielRadio.addEventListener("change", function () {
    if (this.checked && this.value === "Distanciel") {
      vehicleGroup.style.display = "none";
      distance.style.display = "none";
      motor.style.display = "none";
      materialLabel.innerText = "3. Quel type de PC avez vous ?";
      kwhLabel.innerText =
        "4. Quelle est la consommation d'électricité pour votre bâtiment ? (en kw/heure)";
      heatingLabel.innerText =
        "5. Quel type d’énergie utilisez-vous pour le chauffage ?";
      heatingKwhLabel.innerText =
        "6. Quelle est votre consommation d’énergie pour le chauffage ?";
      recyclageLabel.innerText = "7. Pratiquez vous le recyclage ?";
    }
  });
});
