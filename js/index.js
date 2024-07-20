function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function closeAlert() {
  setTimeout(() => {
    $('.alert').hide()
  }, 10000);
}

function showAlertSuccess(msg) {
  showAlert('alert-success', msg)
}

function showAlertError(msg) {
  showAlert('alert-danger', msg)
}

function showAlert(classe, msg) {
  $('.alert.' + classe).html('<button type="button" data-dismiss="alert" class="alert-dismissible close" aria-label="Close" onclick="this.parentElement.style.display=\'none\';">&times;</button>');
  $('.alert.' + classe).prepend(msg);
  $('.alert.' + classe).show()
  closeAlert()
}

function resetFormsClick() {
  $("#forms-click")[0].reset()
}

function submitFormsClick() {
  const data = $("#forms-click").serialize()
  $.ajax({
    url: 'mail.php',
    data: data,
    method: 'POST',
    success: (msg) => {
      console.log('msg', msg)
      if (msg == 'success') {
        showAlertSuccess('Success! Thank you for contacting us. One of our representatives will contact you.')
        resetFormsClick()
      } else {
        showAlertError('Error! Reload and try again later. ' + msg)
      }
    },
    error: (error) => {
      console.error(error)
      showAlertError('Error! Reload and try again later. ' + error)
    }
  })
}

$(() => {
  $("a#whatsapp").click(() => {
    window.location.href = 'https://wa.me/16194550669';
  })

  $("a#scheduleInitialCall").click(() => {
    window.location.href = 'tel:+16194550669';
  })

  var $carouselContainer = $('#carousel .carousel-container');
  var currentIndex = 0;

  const items = $('.carousel-item');
  const itemCount = items.length;

  function updateItemsToShow() {
    const width = $(window).width();
    if (width >= 1024) {
      return 3;
    } if(width >= 769) {
      return 2;
    } else {
      return 1;
    }
  }

  function showItem(index) {
    const itemsToShow = updateItemsToShow();
    const offset = -index * (100 / itemsToShow);
    $('.carousel-inner').css('transform', `translateX(${offset}%)`);
  }

  $('.next').click(function () {
    const itemsToShow = updateItemsToShow();
    currentIndex = (currentIndex + itemsToShow) % itemCount;
    if (currentIndex + itemsToShow > itemCount) {
      currentIndex = itemCount - itemsToShow;
    }
    showItem(currentIndex);
  });

  $('.prev').click(function () {
    const itemsToShow = updateItemsToShow();
    currentIndex = (currentIndex - itemsToShow + itemCount) % itemCount;
    if (currentIndex < 0) {
      currentIndex = 0;
    }
    showItem(currentIndex);
  });

  $(window).resize(function () {
    showItem(currentIndex);
  });

  showItem(currentIndex);
})
