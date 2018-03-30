/**document.addEventListener('DOMContentLoaded', function() );*/

const $addButton = $('.add-person');
const $removeButton = $('.remove-person');
const numPerson = parseInt($('num-person').text());

$addButton.on('click',function (event) {
    console.dir(event);
});

$removeButton.on('click',function (event) {
    console.dir(numPerson);
});


/**
function calculateQte(coef, _numPerson) {
    $.each($qteIngredients, (index, elem) => {
        )
}

*/


