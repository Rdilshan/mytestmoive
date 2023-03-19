const editBtnstv = document.querySelectorAll('.tvseriesview .numbered-list .edit-btn');

// Attach a click event listener to each edit button
editBtnstv.forEach(function(btn) {
  btn.addEventListener('click', function() {
    // prevent the default behavior of the button
    event.preventDefault();
    // Get the value of the button
    const id = btn.value;
    console.log("tvseries: " +id);
    // Do something with the value

    let type = "tvseries";
    let url1 = `../php/adminedit.php?type=${type}&id=${id}`;
     // construct the URL with the search query string
    
     window.location.href = url1;
  });
});



const delectBtnstv = document.querySelectorAll('.tvseriesview .numbered-list .delete-btn');


delectBtnstv.forEach(function(btn) {
  btn.addEventListener('click', function() {

    event.preventDefault();

    const id = btn.value;
    console.log("tvseries: " +id);
 

    let type = "tvseries";
    if (confirm("Do you want to Delete this Film?'❗❗")) {
      // code to update the record

      window.location.href = `../php/delectpost.php?type=${type}&id=${id}`;
    } 

  });
});