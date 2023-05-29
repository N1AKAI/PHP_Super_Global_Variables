const output = document.querySelectorAll(".output");
if (output) {
  output.forEach((el) => {
    el.innerHTML = el.innerHTML.trim();
  });
}
