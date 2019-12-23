function onlynumber(event){
  var key = window.event ? event.which : event.keyCode;
  if (key < 48 || key > 57) {
    event.preventDefault();
  }
}