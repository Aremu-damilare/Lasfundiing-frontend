
function toastErrorNotif(text){
    Toastify({
        text: `${text}`,
        duration: 8000,
        destination: "#",
        newWindow: false,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
          background: "linear-gradient(to right, red, red)",          
        },
        onClick: function(){} // Callback after click
      }).showToast();
      return true
}

function toastSuccessNotif(text){
    Toastify({
        text: `${text}`,
        duration: 8000,
        destination: "#",
        newWindow: false,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
          background: "linear-gradient(to right, green, green)",
        },
        onClick: function(){} // Callback after click
      }).showToast();
      return true
}


function toastInfoNotif(text){
    Toastify({
        text: `${text}`,
        duration: 8000,
        destination: "#",
        newWindow: false,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
          background: "linear-gradient(to right, gray, gray)",
        },
        onClick: function(){} // Callback after click
      }).showToast();
      return true
}
