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
  var $items = $carouselContainer.children('.carousel-item');
  var itemWidth = $items.outerWidth(true);
  var itemsPerView = 3;
  var currentIndex = 0;

  function updateCarousel() {
    var offset = -currentIndex * itemWidth;
    $carouselContainer.css('transform', 'translateX(' + offset + 'px)');
  }

  function resizeCarousel() {
    var containerWidth = $('#carousel').width();

    if (containerWidth < 768) {
      itemsPerView = 1;
    } else if (containerWidth < 1024) {
      itemsPerView = 2;
    } else {
      itemsPerView = 3;
    }

    itemWidth = containerWidth / itemsPerView;

    $items.each(function () {
      $(this).width(itemWidth);
    });

    updateCarousel();
  }

  $('#next').click(function () {
    if (currentIndex < $items.length - itemsPerView) {
      currentIndex++;
    } else {
      currentIndex = 0; // Loop para o início
    }
    updateCarousel();
  });

  $('#prev').click(function () {
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = $items.length - itemsPerView; // Loop para o final
    }
    updateCarousel();
  });

  $(window).resize(function () {
    resizeCarousel();
  });

  resizeCarousel();
})
