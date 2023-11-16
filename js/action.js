window.addEventListener(
  "scroll",
  () => {
    document.body.style.setProperty(
      "--scroll",
      window.pageYOffset / (document.body.offsetHeight - window.innerHeight)
    );
  },
  false
);

const pwShowHide = document.querySelectorAll(".showHidePass");
pwShowHide.forEach((icon) => {
  icon.addEventListener("click", () => {
    let getPwInput = icon.parentElement.querySelector("input");
    //truy cap phan tu cha cua icon
    if (getPwInput.type == "password") {
      getPwInput.type = "text";
      icon.classList.replace("fa-eye", "fa-eye-slash");
    } else {
      getPwInput.type = "password";
      icon.classList.replace("fa-eye-slash", "fa-eye");
    }
  });
});


// const testGet = document.querySelector('.header__cart-notice').value;
// console.log(testGet);

const clickShowContact = document.querySelector(".list .phone_number")
const phoneContact = document.querySelector(".phone_contact")

clickShowContact.addEventListener("click",()=> {
  phoneContact.classList.toggle("show_contact")
})

// Chuyển trang show product
