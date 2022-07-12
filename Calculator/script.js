
function onClickClean() {
    $('.result').children('a').html('');
}

function onClickAppend(value) {

    if (isValidValue(value)) {
        appendValue(value);
    }
}

function isValidValue(value) {
    if (!isNaN(value)) {
        return true;
    }

    let lastDigit = $('.calc').children('a').text().split('').pop();
    return !isNaN(lastDigit);
}

function appendValue(value) {
    $('.calc').children('a').append(value)
}

function onClickEqual() {
    calculator();
}

function calculator() {
    let calc = $('.calc').children('a').text()
    $.ajax({
        url: "calculator.php",
        method: "POST",
        data: {
            math: calc,
        }
    }).done(function (result) {
        $('.result').children('a').html(result);
    });
}