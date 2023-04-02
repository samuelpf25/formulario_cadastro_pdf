
import json_cidades from "./cidades.json" assert { type: "json" };

//const json_cidades = require('./cidades.json')

const states = document.querySelector("#states");
const cities = document.querySelector("#cities");
const wrapperCities = document.querySelector("#wrapper-cities");

const removeChild = (el) => {
  while (el.firstChild) {
    el.removeChild(el.firstChild);
  }
};

const hideElement = (el) => (el.style.display = "none");

const showElement = (el) => (el.style.display = "");

hideElement(wrapperCities);

states.addEventListener("change", (e) => {
  showElement(wrapperCities);
  removeChild(cities);
  if (e.target.value === states.value) {
    json_cidades["estados"].map((estado) => {
      if (estado.sigla === e.target.value) {
        estado.cidades.map((city) => {
          const option = document.createElement("option");
          option.classList.add("form_select_option")
          const value = (option.text = city);
          cities.add(option);
        });
      }
      /*data["sigla" = e.target.value].map( city => {
          const option = document.createElement("option")
          const value = option.text = city;
          cities.add(option);
      })*/
    });
  }
});