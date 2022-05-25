hideMessage();
console.log('workin');
function hideMessage() {
  setTimeout(() => {
    document.getElementById("message").style.visibility = "hidden";
  }, "5000")
  
}
function showPromocode() {
  var checkbox = document.getElementById('checkpromocode');
  var promocode = document.getElementById('promocode');

  if (checkbox.checked) {
    promocode.style.visibility = 'visible';
  } else {
    promocode.style.visibility = 'hidden';
    promocode.value = '';
   }
  
 }