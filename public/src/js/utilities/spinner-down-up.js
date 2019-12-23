(function (document) {

  spinners = document.querySelectorAll("[data-spinner=\"input\"]");

  if (spinners) {
    for (var i = 0; i < spinners.length; i++) {

      var input_spinner = spinners[i];

      value = input_spinner.value;
      var spinner_id = input_spinner.dataset.spinnerId;

      var spinner_down = document.querySelector("[data-spinner-down=\"" + spinner_id + "\"]");
      var spinner_up = document.querySelector("[data-spinner-up=\"" + spinner_id + "\"]");

      //Spinner Down
      if (spinner_down) {
        spinner_down.addEventListener('click', function (event) {
          event.preventDefault();

          identificador = this.dataset.spinnerDown;
          var spinner = document.querySelector("[data-spinner-id=\"" + identificador + "\"]");

          let value = spinner.value;
          let interval = spinner.dataset.interval;
          let min_value = spinner.dataset.min ? spinner.dataset.min : 0;
          let max_value = spinner.dataset.max ? spinner.dataset.max : 9;

          value = parseInt(value) - parseInt(interval);
          if (value >= parseInt(min_value) && value <= parseInt(max_value)) {
            spinner.value = value;
          }

        });

      }
      //Spinner Up

      if (spinner_up) {
        spinner_up.addEventListener('click', function (event) {
          event.preventDefault();

          identificador = this.dataset.spinnerUp;
          var spinner = document.querySelector("[data-spinner-id=\"" + identificador + "\"]");

          let value = spinner.value;
          let interval = spinner.dataset.interval;
          let min_value = spinner.dataset.min ? spinner.dataset.min : 0;
          let max_value = spinner.dataset.max ? spinner.dataset.max : 9;

          value = parseInt(value) + parseInt(interval);
          if (value >= parseInt(min_value) && value <= parseInt(max_value)) {
            spinner.value = value;
          }

        });

      }

      //AGREGAMOS EL EVENTOS keypress
      input_spinner.addEventListener('keypress', function (event) {
        return onlynumber(event);
      });

      //AGREGAMOS EL EVENTOS change
      input_spinner.addEventListener('change', function (event) {
        spinner = this;
        value = spinner.value;

        let min_value = spinner.dataset.min ? spinner.dataset.min : 0;
        let max_value = spinner.dataset.max ? spinner.dataset.max : 9;

        if (value < parseInt(min_value)) {
          spinner.value = min_value;
        }
        else if (value > parseInt(max_value)) {
          spinner.value = max_value;

        }
      });


    }


  }

})(document);
