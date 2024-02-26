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
      materialLabel.innerText = "6. Matériel:";
      kwhLabel.innerText = "7. Consommation d'électricité (KWH par an):";
      heatingLabel.innerText = "8. Type de chauffage:";
      heatingKwhLabel.innerText = "9. Consommation de chauffage (KWH par an):";
      recyclageLabel.innerText = "10. Recyclage:";
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
      materialLabel.innerText = "3. Matériel:";
      kwhLabel.innerText = "4. Consommation d'électricité (KWH par an):";
      heatingLabel.innerText = "5. Type de chauffage:";
      heatingKwhLabel.innerText = "6. Consommation de chauffage (KWH par an):";
      recyclageLabel.innerText = "7. Recyclage:";
    }
  });
});
