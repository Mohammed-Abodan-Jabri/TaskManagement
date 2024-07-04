document.addEventListener('DOMContentLoaded', function () {
    var sliders = document.querySelectorAll(".range-slider__range");
    var outputs = document.querySelectorAll(".range-slider__value");

    sliders.forEach(function (slider, index) {
        var output = outputs[index];
        output.innerHTML = slider.value;

        slider.oninput = function () {
            output.innerHTML = this.value;
            var value = (this.value - this.min) / (this.max - this.min) * 100;
            this.style.background = 'linear-gradient(to right, #7335b7 0%, #f8842b ' + value + '%, #d7dcdf ' + value + '%, #d7dcdf 100%)';
        }
    });
});

