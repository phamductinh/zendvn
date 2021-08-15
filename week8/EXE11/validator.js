function validator(options) {

    function validate(inputElement, rule) {

        var errorElement = inputElement.parentElement.querySelector(options.errorSelector);
        var errorMessage = rule.test(inputElement.value);

        if (errorMessage) {
            errorElement.innerText = errorMessage;
            inputElement.parentElement.classList.add('invalid');
        } else {
            errorElement.innerText = '';
            inputElement.parentElement.classList.remove('invalid');
        }
    }

    var formElement = document.querySelector(options.form);

    if (formElement) {
        options.rules.forEach(function(rule) {

            var inputElement = formElement.querySelector(rule.selector);

            if (inputElement) {
                inputElement.onblur = function() {
                    validate(inputElement, rule);
                }
            }
        });
    }
}

validator.isRequired = function(selector) {
    return {
        selector: selector,
        test: function(value) {
            return value.trim() ? undefined : 'Vui lòng nhập trường này'
        }
    }
}

validator.isEmail = function(selector) {
    return {
        selector: selector,
        test: function(value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined : 'Trường này phải là email';
        }
    }
}

validator.minLength = function(selector, min) {
    return {
        selector: selector,
        test: function(value) {
            return value.length >= min ? undefined : `Vui lòng nhập tối thiểu ${min} kí tự`;
        }
    }
}

validator.isConfirmed = function(selector, getConfirmValue) {
    return {
        selector: selector,
        test: function(value) {
            return value === getConfirmValue() ? undefined : 'Giá trị nhập vào không khớp';
        }
    }
}

validator.isWebsite = function(selector) {
    return {
        selector: selector,
        test: function(value) {
            var regexp = new RegExp('^(https?:\\/\\/)?' + // protocol
                '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|' + // domain name
                '((\\d{1,3}\\.){3}\\d{1,3}))' + // OR ip (v4) address
                '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*' + // port and path
                '(\\?[;&a-z\\d%_.~+=-]*)?' + // query string
                '(\\#[-a-z\\d_]*)?$', 'i'); // fragment locator
            return regexp.test(value) ? undefined : 'Sai định dạng';
        }
    }
}