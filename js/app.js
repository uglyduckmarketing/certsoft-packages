const lastName = document.getElementById("last-name");
const firstName = document.getElementById("first-name");
const ccName = document.getElementById("cc-name");
const ccInput = document.getElementById("card-name");
const nameContainer = document.getElementById("name-container");
const editButton = document.getElementById("edit-name");
const nameOnCard = document.getElementById("name-on-card");
const studentDetailsConfirmation = document.getElementById(
  "student-details-confirm"
);
const emailAddress = document.getElementById("email");
const confirmEmailAddress = document.getElementById("confirm_email");
const progressBar = document.getElementById("progress-bar");
const progressButtons = document.querySelectorAll(".progress-button");
const preogressOneButton = document.getElementById("progress-button-01");
const progressTwoButton = document.getElementById("progress-button-02");
const terms = document.getElementById("terms-modal");
const termsTrigger = document.getElementById("terms-trigger");
const termsAgree = document.getElementById("terms-agree");
const cancelButton = document.getElementById("cancel-button");

cancelButton.addEventListener("click", function (e) {
  e.preventDefault();
  terms.classList.add("hidden");
});

termsAgree.addEventListener("click", function (e) {
  e.preventDefault();
  terms.classList.add("hidden");
  document.getElementById("terms").checked = true;
});

termsTrigger.addEventListener("click", function (e) {
  e.preventDefault();
  terms.classList.toggle("hidden");
});

progressButtons.forEach((button) => {
  button.addEventListener("click", function (e) {
    progressButtons.forEach((button) => {
      e.preventDefault();
    });
  });
});

preogressOneButton.addEventListener("click", function (e) {
  e.preventDefault();
  document.getElementById("step-01").classList.toggle("is-editable");
  document.getElementById("step-02").classList.toggle("is-editable");
  document
    .getElementById("progress-button-02")
    .classList.toggle("active-progress");
  progressBar.style.width = "10.25%";
});

progressTwoButton.addEventListener("click", function (e) {
  e.preventDefault();
  document.getElementById("step-01").classList.toggle("is-editable");
  document.getElementById("step-02").classList.toggle("is-editable");
  document
    .getElementById("progress-button-02")
    .classList.toggle("active-progress");
  progressBar.style.width = "34.5%";
});

confirmEmailAddress.addEventListener("blur", function () {
  if (emailAddress.value === confirmEmailAddress.value) {
    studentDetailsConfirmation.disabled = false;
  }
});

lastName.addEventListener("blur", function () {
  if (lastName.value && firstName.value) {
    nameContainer.classList.remove("hidden");
    ccName.innerHTML = firstName.value + " " + lastName.value;
    nameOnCard.value = firstName.value + " " + lastName.value;
    ccInput.classList.add("hidden");
  }
});

editButton.addEventListener("click", function (e) {
  e.preventDefault();
  ccInput.classList.remove("hidden");
});

nameOnCard.addEventListener("change", function () {
  ccName.innerHTML = nameOnCard.value;
});

studentDetailsConfirmation.addEventListener("click", function (e) {
  e.preventDefault();
  // window.scroll({top: 0, left: 0, behavior: 'smooth'});
  document.getElementById("step-01").classList.toggle("is-editable");
  document.getElementById("step-02").classList.toggle("is-editable");
  document
    .getElementById("progress-button-02")
    .classList.toggle("active-progress");
  progressBar.style.width = "34.5%";
});
