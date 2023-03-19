// Get all the edit buttons
const editBtnsfilm = document.querySelectorAll('.filmview .numbered-list .edit-btn');

// Attach a click event listener to each edit button
editBtnsfilm.forEach(function(btn) {
  btn.addEventListener('click', function(e) {
    // prevent the default behavior of the button
    e.preventDefault();

    // Get the value of the button
    const id1 = btn.value;
    console.log("film: " +id1);
    // Do something with the value

    let typef = "film";
    let url = `../php/adminedit.php?type=${typef}&id=${id1}`;
     // construct the URL with the search query string
    window.location.href = url;

  });
});



// Get all the delect buttons
const delectBtnsfilm = document.querySelectorAll('.filmview .numbered-list .delete-btn');

// Attach a click event listener to each edit button
delectBtnsfilm.forEach(function(btn) {
  btn.addEventListener('click', function(e) {
    // prevent the default behavior of the button
    e.preventDefault();


    const id1 = btn.value;
    console.log("film: " +id1);
    let typef = "film";
    if (confirm("Do you want to Delete this Film?'❗❗")) {
      // code to update the record

      window.location.href = `../php/delectpost.php?type=${typef}&id=${id1}`;
    } 


  });
});


