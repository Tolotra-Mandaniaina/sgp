$(document).on('change','#location_province, #location_region, #location_district ',function () {
    

    let $field = $(this);

    let $provinceField = $('#location_province');
    let $regionField = $('#location_region');
    let $form = $field.closest('form');
    let target = '#' + $field.attr('id').replace('district','commune').replace('region','district').replace('province','region');
    let data = {};
    data[$provinceField.attr('name')] = $provinceField.val();
    data[$regionField.attr('name')] = $regionField.val();
    data[$field.attr('name')] = $field.val();
   
    $.post($form.attr('input'),data).then(function (data) {
        console.log(data);

        let $input = $(data).find(target);
        $(target).replaceWith($input);
    })
});
   