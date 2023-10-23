'use strict'
// Sidebar
const sidebarToggle = document.querySelector("#sidebar-toggle");
sidebarToggle.addEventListener("click", function(){
    document.querySelector("#sidebar").classList.toggle("collapsed")
});
// Xoa nhan vien 
// const deleteEmp = document.querySelector('.delete');
// const overlay = document.querySelector('.overlay');
// const btnCloseModal = document.querySelector('.no'); 
// const modal = document.querySelector('.modalEmp');

// const openModal = function () {
//   modal.classList.remove('hidden');
//   overlay.classList.remove('hidden');
// };

// const closeModal = function () {
//   modal.classList.add('hidden');
//   overlay.classList.add('hidden');
// };
// deleteEmp.addEventListener("click",  openModal);
// btnCloseModal.addEventListener("click", closeModal);
// overlay.addEventListener("click", closeModal);
// Che do SP
const modeProduct = document.querySelector('.mode');
const quantityPro = document.querySelector('.quantity');
const price = document.querySelector('.price')
modeProduct.addEventListener("change", function(){
  const modeValue = modeProduct.value;
  if(modeValue== "chinhsua"){
    quantityPro.removeAttribute("readonly");
    price.removeAttribute("readonly")
    quantityPro.focus();
    price.focus();
  }
})
