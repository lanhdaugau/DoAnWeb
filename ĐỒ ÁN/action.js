function validateForm() {
    let x = document.forms["formSearch"]["formName"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
  }