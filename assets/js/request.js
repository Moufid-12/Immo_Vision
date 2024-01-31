function afficherOptionsSelectionnees() {

    const serviceID = 'service_966s5l9';
 const templateID = 'template_pa4kl67';


    var selects = document.querySelectorAll("select");
    var selectedOptions = [];
    var senderName = document.querySelector('#nom').value;
    var senderNumber = document.querySelector('#number').value;

    selects.forEach(function(select) {
      for (var i = 0; i < select.options.length; i++) {
        var option = select.options[i];
        if (option.selected) {
          selectedOptions.push(option.value);
        }
      }
    });

    // alert(selectedOptions[0]);

    var params ={
        senderservice: selectedOptions[0],
        senderaction: selectedOptions[1],
        senderville: selectedOptions[2],
        senderquartier: selectedOptions[3],
        sendernom: senderName,
        sendernum: senderNumber
    };

emailjs.send(serviceID, templateID, params)
    .then(() => {
        alert('succes')
    }, (err) => {
    alert(JSON.stringify(err));
    console.log(err);
    });

    
  }